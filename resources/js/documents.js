import axios from 'axios';

document.addEventListener('alpine:init', () => {
    Alpine.store('documents', {
        selectedDocument: null,
        authUserStakeholderId: null,
        stakeholders: [],
        tags: [],
        users: [],
        contracts: [],
        gettingData: false,
        loadingMore: false,
        saving: false,
        documents: [],
        form: {},
        errors: {},
        currentPage: 1,
        lastPage: 1,
        total: 0,
        filters: {
            search: '',
            contract_ids: [],
            stakeholder_ids: [],
            follow_ids: [],
            tag_ids: [],
            type_ids: [],
            status_ids: [],
        },

        clearFilters(){
            this.filters = {
                search: '',
                contract_ids: [],
                stakeholder_ids: [],
                follow_ids: [],
                tag_ids: [],
                type_ids: [],
                status_ids: [],
            };
        },
        openFormModal(document = null, type = null){
            this.selectedDocument = document;
            this.errors = {};
            this.form = this.getEmptyForm();
            if(document){
                // edit mode - create a deep copy to avoid modifying the original
                this.form = {...document};
                this.form.tag_ids = document.tag_ids ? [...document.tag_ids] : [];
                this.form.follow_ids = document.follow_ids ? [...document.follow_ids] : [];
                this.form.contract_ids = document.contract_ids ? [...document.contract_ids] : [];
            }else{
                // create mode
                if(type === 'in'){
                    this.form.type = 'in';
                    this.form.from_id = null;
                    this.form.to_id = this.authUserStakeholderId;
                }else{
                    this.form.type = 'out';
                    this.form.from_id = this.authUserStakeholderId;
                    this.form.to_id = null;
                }
            }
            Flux.modal('document-form').show();
        },
    
        closeFormModal(){
            this.errors = {};
            this.form = this.getEmptyForm();
            this.selectedDocument = null;
        },
        
        getEmptyForm(){
            return {
                title: '',
                content: '',
                notes: '',
                from_id: null,
                to_id: null,
                type: null,
                tag_ids: [],
                follow_ids: [],
                contract_ids: [],
            }
        },
    
        getDocuments(page = 1){
            this.gettingData = this.documents.length === 0;
            axios.get('/documents', {
                params: {
                    page: page,
                    filters: this.filters,
                }
            })
            .then(response => {
                if(page === 1){
                    this.documents = response.data.data;
                }else{
                    this.documents = [...this.documents, ...response.data.data];
                }
                this.currentPage = response.data.meta.current_page;
                this.lastPage = response.data.meta.last_page;
                this.gettingData = false;
                this.loadingMore = false;
                this.total = response.data.meta.total;
            })
            .catch(error => {
                console.error(error);
                this.gettingData = false;
                this.loadingMore = false;
            });
        },
    
        saveDocument(){
            this.saving = true;
            this.errors = {};
            const method = this.form.id ? 'put' : 'post';
            const url = this.form.id ? `/documents/${this.form.id}` : '/documents';
            axios[method](url, this.form)
            .then(response => {
                if(this.form.id){
                    this.documents = this.documents.map(d => d.id === this.form.id ? response.data.data : d);
                }else{
                    this.documents.unshift(response.data.data);
                    this.total++;
                }
                Flux.modal('document-form').close();
            })
            .catch(error => {
                console.log(error);
                this.errors = error.response.data.errors;
            })
            .finally(() => {
                this.saving = false;
            });
        },
    
        deleteDocument(document){
            if(!confirm('Are you sure you want to delete this document?')){
                return;
            }
            axios.delete(`/documents/${document.id}`)
            .then(response => {
                this.documents = this.documents.filter(d => d.id !== document.id);
                this.total--;
            })
            .catch(error => {
                console.log(error);
            });
        },
    
        loadMore(){
            if(this.currentPage === this.lastPage || this.loadingMore){
                return;
            }
            this.loadingMore = true;
            this.getDocuments(this.currentPage + 1);
        },

        removeTag(tag){
            this.form.tag_ids = this.form.tag_ids.filter(t => t !== tag);
        },
    
        getTagNameById(id){
            return this.tags.find(tag => tag.id === id)?.name;
        },

        getUserNameById(id){
            return this.users.find(user => user.id === id)?.name;
        },

        removeFollow(follow){
            this.form.follow_ids = this.form.follow_ids.filter(f => f !== follow);
        },

        getContractNameById(id){
            return this.contracts.find(contract => contract.id === id)?.name;
        },

        getStakeholderNameById(id){
            return this.stakeholders.find(stakeholder => stakeholder.id === id)?.name;
        },

        removeContract(contract){
            this.form.contract_ids = this.form.contract_ids.filter(c => c !== contract);
        },

        updateDocumentCard(documentId){
            const index = this.documents.findIndex(d => d.id === documentId);
            if(index !== -1){
                axios.get(`/documents/${documentId}`)
                .then(response => {
                    this.documents[index] = response.data.data;
                })
                .catch(error => {
                    console.log(error);
                });
            }
        },
    
    })
})

