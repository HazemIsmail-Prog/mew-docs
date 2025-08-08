import axios from 'axios';

document.addEventListener('alpine:init', () => {
    Alpine.store('permissions', {
        selectedPermission: null,
        gettingData: false,
        loadingMore: false,
        saving: false,
        permissions: [],
        form: {},
        errors: {},
        currentPage: 1,
        lastPage: 1,
        total: 0,

        openFormModal(permission = null){
            this.selectedPermission = permission;
            this.errors = {};
            this.form = this.getEmptyForm();
            if(permission){
                this.form = {...permission};
            }
            Flux.modal('permission-form').show();
        },
    
        closeFormModal(){
            this.errors = {};
            this.form = this.getEmptyForm();
            this.selectedPermission = null;
        },
        
        getEmptyForm(){
            return {
                name: '',
                description: '',
            }
        },
    
        getPermissions(page = 1){
            this.gettingData = this.permissions.length === 0;
            axios.get('/permissions', {
                params: {
                    page: page,
                }
            })
            .then(response => {
                if(page === 1){
                    this.permissions = response.data.data;
                }else{
                    this.permissions = [...this.permissions, ...response.data.data];
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
    
        savePermission(){
            this.saving = true;
            this.errors = {};
            const method = this.form.id ? 'put' : 'post';
            const url = this.form.id ? `/permissions/${this.form.id}` : '/permissions';
            axios[method](url, this.form)
            .then(response => {
                if(this.form.id){
                    this.permissions = this.permissions.map(p => p.id === this.form.id ? response.data.data : p);
                }else{
                    this.permissions.push(response.data.data);
                    this.total++;
                }
                Flux.modal('permission-form').close();
            })
            .catch(error => {
                console.log(error);
                this.errors = error.response.data.errors;
            })
            .finally(() => {
                this.saving = false;
            });
        },
    
        deletePermission(permission){
            if(!confirm('Are you sure you want to delete this permission?')){
                return;
            }
            axios.delete(`/permissions/${permission.id}`)
            .then(response => {
                this.permissions = this.permissions.filter(p => p.id !== permission.id);
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
            this.getPermissions(this.currentPage + 1);
        },
    
    
    })
})

