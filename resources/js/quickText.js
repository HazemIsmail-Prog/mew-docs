import axios from 'axios';

document.addEventListener('alpine:init', () => {
    Alpine.store('quickText', {

        quickTexts: [],
        currentActiveElement: null,
        search: '',

        init(){
            this.getQuickTexts();
        },

        get filteredSortedQuickTexts(){
            // First filter by search
            const filteredQuickTexts = this.quickTexts.filter(quickText => 
                quickText.text.toLowerCase().includes(this.search.toLowerCase())
            );

            // Then sort - current date (id 0) at top, rest by descending id
            return filteredQuickTexts.sort((a, b) => {
                if(a.id === 0) return -1;
                if(b.id === 0) return 1;
                return b.id - a.id;
            });
        },

        getQuickText(el){
            this.currentActiveElement = el;
            Flux.modal('quick-text').show();
            const searchTextarea = document.getElementById('quick-text-search-textarea');
            searchTextarea.focus();
        },

        selectQuickText(text){
            if(this.currentActiveElement.value === ''){
                this.currentActiveElement.value = text;
            }else{
                this.currentActiveElement.value += text;
            }
            
            // Trigger input event to reflect changes
            const event = new Event('input', { bubbles: true });
            this.currentActiveElement.dispatchEvent(event);
            // Flux.modal('quick-text').close();
        },

        handleClose(){
            this.search = '';
            this.currentActiveElement.focus();
            this.currentActiveElement.selectionStart = this.currentActiveElement.value.length;
            this.currentActiveElement.selectionEnd = this.currentActiveElement.value.length;
            this.currentActiveElement = null; 
        },

        getQuickTexts(){
            axios.get('/quick-texts')
            .then(response => {
                this.quickTexts = response.data;
                const currentDateObject = new Date();
                // wanna format the date to dd-mm-yyyy
                const currentDate = currentDateObject.toLocaleDateString('en-GB', { day: '2-digit', month: '2-digit', year: 'numeric' }).replace(/\//g, '-');
                this.quickTexts.push({id: 0, text: currentDate});
            });
        },

        addQuickText(){
            axios.post('/quick-texts', {text: this.search})
            .then(response => {
                this.quickTexts.push(response.data);
            });
        },

        deleteQuickText(id){
            if(id === 0){
                // this id is for the current date
                // so we don't want to delete it
                return;
            }
            axios.delete(`/quick-texts/${id}`)
            .then(response => {
                this.quickTexts = this.quickTexts.filter(quickText => quickText.id !== id);
            });
        }

    })
})