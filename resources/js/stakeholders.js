import axios from 'axios';

document.addEventListener('alpine:init', () => {
    Alpine.store('stakeholders', {
        selectedStakeholder: null,
        gettingData: false,
        loadingMore: false,
        saving: false,
        stakeholders: [],
        form: {},
        errors: {},
        currentPage: 1,
        lastPage: 1,
        total: 0,

        openFormModal(stakeholder = null){
            this.selectedStakeholder = stakeholder;
            this.errors = {};
            this.form = this.getEmptyForm();
            if(stakeholder){
                this.form = {...stakeholder};
            }
            Flux.modal('stakeholder-form').show();
        },
    
        closeFormModal(){
            this.errors = {};
            this.form = this.getEmptyForm();
            this.selectedStakeholder = null;
        },
        
        getEmptyForm(){
            return {
                name: '',
            }
        },
    
        getStakeholders(page = 1){
            this.gettingData = this.stakeholders.length === 0;
            axios.get('/stakeholders', {
                params: {
                    page: page,
                }
            })
            .then(response => {
                if(page === 1){
                    this.stakeholders = response.data.data;
                }else{
                    this.stakeholders = [...this.stakeholders, ...response.data.data];
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
    
        saveStakeholder(){
            this.saving = true;
            this.errors = {};
            const method = this.form.id ? 'put' : 'post';
            const url = this.form.id ? `/stakeholders/${this.form.id}` : '/stakeholders';
            axios[method](url, this.form)
            .then(response => {
                if(this.form.id){
                    this.stakeholders = this.stakeholders.map(s => s.id === this.form.id ? response.data.data : s);
                }else{
                    this.stakeholders.push(response.data.data);
                    this.total++;
                }
                Flux.modal('stakeholder-form').close();
            })
            .catch(error => {
                console.log(error);
                this.errors = error.response.data.errors;
            })
            .finally(() => {
                this.saving = false;
            });
        },
    
        deleteStakeholder(stakeholder){
            if(!confirm('Are you sure you want to delete this stakeholder?')){
                return;
            }
            axios.delete(`/stakeholders/${stakeholder.id}`)
            .then(response => {
                this.stakeholders = this.stakeholders.filter(s => s.id !== stakeholder.id);
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
            this.getStakeholders(this.currentPage + 1);
        },
    
    
    })
})

