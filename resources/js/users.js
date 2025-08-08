import axios from 'axios';

document.addEventListener('alpine:init', () => {

    Alpine.store('users', {
        selectedUser: null,
        gettingData: false,
        loadingMore: false,
        saving: false,
        users: [],
        roles: [],
        permissions: [],
        contracts: [],
        form: {},
        errors: {},
        currentPage: 1,
        lastPage: 1,
        total: 0,
        modalVisible: false,

        openFormModal(user = null){
            this.selectedUser = user;
            this.errors = {};
            this.form = this.getEmptyForm();
            if(user){
                this.form = {...user};
                this.form.contract_ids = user.contract_ids ? [...user.contract_ids] : [];
            }
            this.modalVisible = true;
            Flux.modal('user-form').show();
        },

        closeFormModal(){
            this.errors = {};
            this.form = this.getEmptyForm();
            this.selectedUser = null;
            this.modalVisible = false;
        },
        
        getEmptyForm(){
            return {
                name: '',
                email: '',
                username: '',
                password: '',
                role_ids: [],
                permission_ids: [],
                contract_ids: [],
            }
        },

        getUsers(page = 1){
            this.gettingData = this.users.length === 0;
            axios.get('/users', {
                params: {
                    page: page,
                }
            })
            .then(response => {
                if(page === 1){
                    this.users = response.data.data;
                }else{
                    this.users = [...this.users, ...response.data.data];
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

        saveUser(){
            this.saving = true;
            this.errors = {};
            const method = this.form.id ? 'put' : 'post';
            const url = this.form.id ? `/users/${this.form.id}` : '/users';
            axios[method](url, this.form)
            .then(response => {
                if(this.form.id){
                    this.users = this.users.map(u => u.id === this.form.id ? response.data.data : u);
                }else{
                    this.users.unshift(response.data.data);
                    this.total++;
                }
                Flux.modal('user-form').close();
            })
            .catch(error => {
                console.log(error);
                this.errors = error.response.data.errors;
            })
            .finally(() => {
                this.saving = false;
            });
        },

        deleteUser(user){
            if(!confirm('Are you sure you want to delete this user?')){
                return;
            }
            axios.delete(`/users/${user.id}`)
            .then(response => {
                this.users = this.users.filter(u => u.id !== user.id);
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
            this.getUsers(this.currentPage + 1);
        },

        toggleRole(roleId){
            if(this.form.role_ids.includes(roleId)){
                this.form.role_ids = this.form.role_ids.filter(id => id !== roleId);
            }else{
                this.form.role_ids.push(roleId);
            }
        },

        togglePermission(permissionId){
            if(this.form.permission_ids.includes(permissionId)){
                this.form.permission_ids = this.form.permission_ids.filter(id => id !== permissionId);
            }else{
                this.form.permission_ids.push(permissionId);
            }
        },

        updateUserStatus(user, event){
            axios.put(`/users/${user.id}/toggle-status`, {
                is_active: event.target.checked,
            })
            .then(response => {
                console.log('success');
            })
            .catch(error => {
                user.is_active = response.data.data.is_active;
            });
        },

        getContractNameById(id){
            return this.contracts.find(contract => contract.id === id)?.name;
        },

        removeContract(contract){
            this.form.contract_ids = this.form.contract_ids.filter(c => c !== contract);
        },
    })

})