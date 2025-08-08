import axios from 'axios';

document.addEventListener('alpine:init', () => {
    Alpine.store('contracts', {
        selectedContract: null,
        gettingData: false,
        loadingMore: false,
        saving: false,
        contracts: [],
        form: {},
        errors: {},
        currentPage: 1,
        lastPage: 1,
        total: 0,

        openFormModal(contract = null){
            this.selectedContract = contract;
            this.errors = {};
            this.form = this.getEmptyForm();
            if(contract){
                this.form = {...contract};
            }
            Flux.modal('contract-form').show();
        },
    
        closeFormModal(){
            this.errors = {};
            this.form = this.getEmptyForm();
            this.selectedContract = null;
        },
        
        getEmptyForm(){
            return {
                name: '',
            }
        },
    
        getContracts(page = 1){
            this.gettingData = this.contracts.length === 0;
            axios.get('/contracts', {
                params: {
                    page: page,
                }
            })
            .then(response => {
                if(page === 1){
                    this.contracts = response.data.data;
                }else{
                    this.contracts = [...this.contracts, ...response.data.data];
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
    
        saveContract(){
            this.saving = true;
            this.errors = {};
            const method = this.form.id ? 'put' : 'post';
            const url = this.form.id ? `/contracts/${this.form.id}` : '/contracts';
            axios[method](url, this.form)
            .then(response => {
                if(this.form.id){
                    this.contracts = this.contracts.map(c => c.id === this.form.id ? response.data.data : c);
                }else{
                    this.contracts.push(response.data.data);
                    this.total++;
                }
                Flux.modal('contract-form').close();
            })
            .catch(error => {
                console.log(error);
                this.errors = error.response.data.errors;
            })
            .finally(() => {
                this.saving = false;
            });
        },
    
        deleteContract(contract){
            if(!confirm('Are you sure you want to delete this contract?')){
                return;
            }
            axios.delete(`/contracts/${contract.id}`)
            .then(response => {
                this.contracts = this.contracts.filter(c => c.id !== contract.id);
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
            this.getContracts(this.currentPage + 1);
        },
    
    
    })
})

