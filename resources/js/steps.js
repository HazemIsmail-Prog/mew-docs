import axios from 'axios';

document.addEventListener('alpine:init', () => {
    Alpine.store('steps', {
        selectedDocument: null,
        gettingData: false,
        saving: false,
        steps: [],
        form: {},
        errors: {},
        stepToEdit: null,
        stepToDelete: null,
        newAction: '',
        editingAction: '',
    
        getSteps(document_id){
            this.steps = [];
            this.gettingData = this.steps.length === 0;
            axios.get(`/documents/${document_id}/steps`)
            .then(response => {
                this.steps = response.data.data;
                this.gettingData = false;
            })
            .catch(error => {
                this.gettingData = false;
            });
        },

        editStep(step){
            this.stepToEdit = step.id;
            this.editingAction = step.action;
            // set focus to the closest textarea after 100ms
            setTimeout(() => {
                const closestTextarea = document.querySelector('textarea');
                if(closestTextarea){
                    closestTextarea.focus();
                }
            }, 100);
        },

        updateStep(step){
            if(!this.editingAction || !this.editingAction.trim().length > 0){
                return;
            }
            axios.put(`/steps/${step.id}`, {
                action: this.editingAction,
            })
            .then(response => {
                this.steps = this.steps.map(s => s.id === step.id ? response.data.data : s);
                this.stepToEdit = null;
                this.editingAction = '';
                Alpine.store('documents').updateDocumentCard(response.data.data.document_id);
            })
            .catch(error => {
                console.log(error);
                this.errors = error.response.data.errors;
            });
        },

        addStep(document_id){
            if(!this.newAction || !this.newAction.trim().length > 0){
                return;
            }
            axios.post(`/documents/${document_id}/steps`, {
                action: this.newAction,
            })
            .then(response => {
                this.steps.push(response.data.data);
                this.newAction = '';
                Alpine.store('documents').updateDocumentCard(document_id);
            })
            .catch(error => {
                console.log(error);
                this.errors = error.response.data.errors;
            })    
            .finally(() => {
                this.saving = false;
            });
        },

        toggleStepCompletion(step,event){
            axios.put(`/steps/${step.id}/toggle-completion`, {
                is_completed: event.target.checked,
                order: step.order
            })
            .then(response => {
                Alpine.store('documents').updateDocumentCard(response.data.data.document_id);
            })
            .catch(error => {   
                console.log(error);
            });
        },
    
        deleteStep(step){
            axios.delete(`/documents/${this.selectedDocument.id}/steps/${step.id}`)
            .then(response => {
                this.steps = this.steps.filter(s => s.id !== step.id);
                Alpine.store('documents').updateDocumentCard(response.data.data.document_id);
            })
            .catch(error => {
                console.log(error);
            });
        },

        resetAll(){
            this.selectedDocument = null;
            this.steps = [];
            this.errors = {};
            this.stepToEdit = null;
            this.stepToDelete = null;
            this.newAction = '';
            this.editingAction = '';
        },

        updateStepsOrder(event){
            const newIndex = event.newIndex;
            const draggedItemId = event.item.id;

            // get all childs of the stepsList ref
            const stepsList = document.querySelector('[x-ref="stepsList"]');
            const steps = stepsList.querySelectorAll('.stepSelector');

            const newPositionsArray = [];

            steps.forEach((step, index) => {
                newPositionsArray.push({
                    id: step.id,
                    index: index,
                    order: this.steps.find(s => s.id == step.id).order
                });
            });

            let newOrder = 0;

            if(newIndex == 0){
                newOrder = newPositionsArray[1].order - 10;
            }

            if(newIndex == newPositionsArray.length - 1){
                newOrder = newPositionsArray[newPositionsArray.length - 2].order + 10;
            }

            if(newIndex > 0 && newIndex < newPositionsArray.length - 1){
                newOrder = (newPositionsArray[newIndex - 1].order + newPositionsArray[newIndex + 1].order) / 2;
            }


            axios.put(`/steps/${draggedItemId}/update-order`, {
                order: newOrder
            })
            .then(response => {
                this.steps = this.steps.map(s => s.id == draggedItemId ? response.data.data : s);
                Alpine.store('documents').updateDocumentCard(response.data.data.document_id);
            })
            .catch(error => {
                console.log(error);
            });


        },
    
    })
})

