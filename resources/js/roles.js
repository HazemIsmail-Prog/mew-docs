import axios from 'axios';

document.addEventListener('alpine:init', () => {

    Alpine.store('roles', {
        selectedRole: null,
        permissions: [],
        gettingData: false,
        loadingMore: false,
        saving: false,
        roles: [],
        form: {},
        errors: {},
        currentPage: 1,
        lastPage: 1,
        total: 0,

        openFormModal(role = null){
            this.selectedRole = role;
            this.errors = {};
            this.form = this.getEmptyForm();
            if(role){
                this.form = {...role};
            }
            Flux.modal('role-form').show();
        },

        closeFormModal(){
            this.errors = {};
            this.form = this.getEmptyForm();
            this.selectedRole = null;
        },
        
        getEmptyForm(){
            return {
                name: '',
                permission_ids: [],
            }
        },

        getRoles(page = 1){
            this.gettingData = this.roles.length === 0;
            axios.get('/roles', {
                params: {
                    page: page,
                }
            })
            .then(response => {
                if(page === 1){
                    this.roles = response.data.data;
                }else{
                    this.roles = [...this.roles, ...response.data.data];
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

        saveRole(){
            this.saving = true;
            this.errors = {};
            const method = this.form.id ? 'put' : 'post';
            const url = this.form.id ? `/roles/${this.form.id}` : '/roles';
            axios[method](url, this.form)
            .then(response => {
                if(this.form.id){
                    this.roles = this.roles.map(r => r.id === this.form.id ? response.data.data : r);
                }else{
                    this.roles.push(response.data.data);
                    this.total++;
                }
                Flux.modal('role-form').close();
            })
            .catch(error => {
                console.log(error);
                this.errors = error.response.data.errors;
            })
            .finally(() => {
                this.saving = false;
            });
        },

        deleteRole(role){
            if(!confirm('Are you sure you want to delete this role?')){
                return;
            }
            axios.delete(`/roles/${role.id}`)
            .then(response => {
                this.roles = this.roles.filter(r => r.id !== role.id);
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
            this.getRoles(this.currentPage + 1);
        },

        togglePermission(permissionId){
            if(this.form.permission_ids?.includes(permissionId)){
                this.form.permission_ids = this.form.permission_ids.filter(id => id !== permissionId);
            }else{            
                this.form.permission_ids = [...(this.form.permission_ids || []), permissionId];
            }
        },


    })

})