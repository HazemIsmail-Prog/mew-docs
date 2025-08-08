import axios from 'axios';

document.addEventListener('alpine:init', () => {
    Alpine.store('attachments', {
        selectedDocument: null,
        gettingData: false,
        saving: false,
        attachments: [],
        form: {},
        errors: {},
        attachmentToEdit: null,
        attachmentToDelete: null,
        newDescription: '',
        newFile: null,
        editingDescription: '',
        deleting: false,

        getAttachments(document_id){
            this.attachments = [];
            this.gettingData = this.attachments.length === 0;
            axios.get(`/documents/${document_id}/attachments`)
            .then(response => {
                this.attachments = response.data.data;
                this.gettingData = false;
            })
            .catch(error => {
                this.gettingData = false;
            });
        },

        editAttachment(attachment){
            this.attachmentToEdit = attachment.id;
            this.editingDescription = attachment.description;
            // set focus to the closest textarea after 100ms
            setTimeout(() => {
                const closestTextarea = document.querySelector('textarea');
                if(closestTextarea){
                    closestTextarea.focus();
                }
            }, 100);
        },

        updateAttachment(attachment){
            if(!this.editingDescription || !this.editingDescription.trim().length > 0){
                return;
            }
            axios.put(`/attachments/${attachment.id}`, {
                description: this.editingDescription,
            })
            .then(response => {
                this.attachments = this.attachments.map(a => a.id === attachment.id ? response.data.data : a);
                this.attachmentToEdit = null;
                this.editingDescription = '';
                Alpine.store('documents').updateDocumentCard(response.data.data.document_id);
            })
            .catch(error => {
                console.log(error);
                this.errors = error.response.data.errors;
            });
        },

        addAttachment(document_id){

            if (!this.newFile) {
                alert('Please upload a file first.');
                return;
            }
            if (!this.newDescription.trim()) {
                alert('Please provide a description for the file.');
                return;
            }

            this.saving = true;

            const formData = new FormData();
            formData.append('file', this.newFile);
            formData.append('description', this.newDescription);

            axios.post(`documents/${document_id}/attachments`, formData)
                .then((response) => {
                    this.attachments.push(response.data.data);
                    this.clearFileInput();
                })
                .catch((error) => {
                    alert(error.response.data.message);
                })
                .finally(() => {
                    this.saving = false;
                });
        },
    
        deleteAttachment(attachment){
            this.deleting = true;
            axios.delete(`/documents/${this.selectedDocument.id}/attachments/${attachment.id}`)
            .then(response => {
                this.attachments = this.attachments.filter(a => a.id !== attachment.id);
                Alpine.store('documents').updateDocumentCard(response.data.data.document_id);
            })
            .catch(error => {
                console.log(error);
            })
            .finally(() => {
                this.deleting = false;
            });
        },

        clearFileInput(){
            this.newFile = null;
            this.newDescription = '';
            const fileInput = document.getElementById('dropzone-file');
            if(fileInput){
                fileInput.value = '';
            }
        },

        resetAll(){
            this.selectedDocument = null;
            this.attachments = [];
            this.errors = {};
            this.attachmentToEdit = null;
            this.attachmentToDelete = null;
            this.newDescription = '';
            this.editingDescription = '';
        },


        handleFileUpload(event) {
            const files = event.target.files;
            if (files.length > 0) {
                this.newFile = null;
                this.newFile = files[0];
                // get file name without extension
                this.newDescription = files[0].name.split('.').slice(0, -1).join('.');
            }
        },

        handleFileDrop(event) {
            const files = event.dataTransfer.files;
            if (files.length > 0) {
                this.newFile = null;
                this.newFile = files[0];
                // get file name without extension
                this.newDescription = files[0].name.split('.').slice(0, -1).join('.');
            }
        },
    })
})

