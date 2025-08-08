import axios from 'axios';

document.addEventListener('alpine:init', () => {

    Alpine.store('language', {
        language: '',
        init(){
            this.getLanguage();
        },

        getLanguage(){
            axios.get('/language')
            .then(response => {
                this.language = response.data.language;
            })
        },

        setLanguage(){
            axios.post('/language', { language: this.language })
            .then(response => {
                window.location.reload();
            })
        }
    })

})