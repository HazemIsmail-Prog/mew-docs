import axios from 'axios';

document.addEventListener('alpine:init', () => {
    Alpine.store('tags', {
        selectedTag: null,
        gettingData: false,
        loadingMore: false,
        saving: false,
        tags: [],
        form: {},
        errors: {},
        currentPage: 1,
        lastPage: 1,
        total: 0,

        openFormModal(tag = null){
            this.selectedTag = tag;
            this.errors = {};
            this.form = this.getEmptyForm();
            if(tag){
                this.form = {...tag};
            }
            Flux.modal('tag-form').show();
        },
    
        closeFormModal(){
            this.errors = {};
            this.form = this.getEmptyForm();
            this.selectedTag = null;
        },
        
        getEmptyForm(){
            return {
                name: '',
            }
        },
    
        getTags(page = 1){
            this.gettingData = this.tags.length === 0;
            axios.get('/tags', {
                params: {
                    page: page,
                }
            })
            .then(response => {
                if(page === 1){
                    this.tags = response.data.data;
                }else{
                    this.tags = [...this.tags, ...response.data.data];
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
    
        saveTag(){
            this.saving = true;
            this.errors = {};
            const method = this.form.id ? 'put' : 'post';
            const url = this.form.id ? `/tags/${this.form.id}` : '/tags';
            axios[method](url, this.form)
            .then(response => {
                if(this.form.id){
                    this.tags = this.tags.map(t => t.id === this.form.id ? response.data.data : t);
                }else{
                    this.tags.push(response.data.data);
                    this.total++;
                }
                Flux.modal('tag-form').close();
            })
            .catch(error => {
                console.log(error);
                this.errors = error.response.data.errors;
            })
            .finally(() => {
                this.saving = false;
            });
        },
    
        deleteTag(tag){
            if(!confirm('Are you sure you want to delete this tag?')){
                return;
            }
            axios.delete(`/tags/${tag.id}`)
            .then(response => {
                this.tags = this.tags.filter(t => t.id !== tag.id);
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
            this.getTags(this.currentPage + 1);
        },
    
    
    })
})

