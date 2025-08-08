import axios from 'axios';

document.addEventListener('alpine:init', () => {
    Alpine.store('letters', {
        selectedLetter: null,
        gettingData: false,
        loadingMore: false,
        saving: false,
        letters: [],
        form: {},
        errors: {},
        currentPage: 1,
        lastPage: 1,
        total: 0,
        pdfPath: null,
        gettingPdf: false,
        kendoEditor: null,
        showCover: false,
        filters: {
            letter_id: '',
            search: '',
            scope: 'mine',
        },

        initKendoEditor() {
            // Destroy existing editor if it exists
            if (this.kendoEditor) {
                this.kendoEditor.destroy();
            }

            const editorElement = $("#editor");
            this.kendoEditor = editorElement.kendoEditor({
                // stylesheets: [
                //     "{{ asset('css/app.css') }}",
                // ],
                tools: [
                    "bold",
                    // "italic",
                    // "underline", 
                    // "strikethrough",
                    "justifyRight",
                    "justifyCenter",
                    "justifyLeft",
                    "justifyFull",
                    // "lineHeight",

                    // "createLink",
                    "insertUnorderedList",
                    "insertOrderedList",
                    "outdent",
                    "indent",
                    // "unlink",
                    // "insertImage",
                    // "createTable",
                    // "addColumnLeft",
                    // "addColumnRight",
                    // "addRowAbove",
                    // "addRowBelow",
                    // "deleteRow",
                    // "deleteColumn",
                    // "foreColor",
                    // "backColor"
                ],
                select: (e) => {
                    this.form.body = this.kendoEditor.value();
                },
                change: (e) => {
                    this.form.body = this.kendoEditor.value();
                },
                execute: (e) => {
                    this.form.body = this.kendoEditor.value();
                },
                paste: (e) => {
                    this.form.body = this.kendoEditor.value();
                },
                keyup: () => {
                    this.form.body = this.kendoEditor.value();
                },
            }).data("kendoEditor");

            const createdElement = this.kendoEditor.document;
            createdElement.body.style.fontSize = "15px";
            createdElement.body.style.fontFamily = "Sultan Normal, sans-serif";
            createdElement.body.style.height = "100%";

            if (this.form.body) {
                this.kendoEditor.value(this.form.body);
            } else {
                this.kendoEditor.value("");
            }
        },
    
        getEmptyForm(){
            return {
                id: null,
                user_id: '',
                code: false,
                internal: false,
                official: false,
                has_attachments: true,
                address: '',
                prefix: '',
                sender: '',
                receiver: '',
                subject: '',
                copy_to: '',
                body: '',
                line_height: 1.9,
                can_edit: true,
            }
        },
    
        getLetters(page = 1){
            this.gettingData = this.letters.length === 0;
            axios.get('/letters', {
                params: {
                    page: page,
                    filters: this.filters,
                }
            })
            .then(response => {
                if(page === 1){
                        this.letters = response.data.data;
                }else{
                    this.letters = [...this.letters, ...response.data.data];
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
    
        saveLetter(){
            if(this.form.id && !this.form.can_edit){
                alert('You are not allowed to edit this letter');
                return;
            }
            this.saving = true;
            this.errors = {};
            const method = this.form.id ? 'put' : 'post';
            const url = this.form.id ? `/letters/${this.form.id}` : '/letters';
            axios[method](url, this.form)
            .then(response => {
                if(this.form.id){
                    this.letters = this.letters.map(l => l.id === this.form.id ? response.data.data : l);
                }else{
                    this.letters.unshift(response.data.data);
                    this.total++;
                }
                this.handleLetterSelection(response.data.data);
            })
            .catch(error => {
                console.log(error);
                this.errors = error.response.data.errors;
            })
            .finally(() => {
                this.saving = false;
            });
        },
    
        deleteLetter(letter){
            if(!letter.can_delete){
                alert('You are not allowed to delete this letter');
                return;
            }
            if(!confirm('Are you sure you want to delete this letter?')){
                return;
            }
            axios.delete(`/letters/${letter.id}`)
            .then(response => {
                this.letters = this.letters.filter(l => l.id !== letter.id);
                this.total--;
                if(this.selectedLetter?.id === letter.id){
                    this.selectedLetter = null;
                    this.form = this.getEmptyForm();
                    this.pdfPath = null;
                    if (this.kendoEditor) {
                        this.kendoEditor.value(this.form.body || '');
                    } else {
                        this.initKendoEditor();
                    }
                }
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
            this.getLetters(this.currentPage + 1);
        },
    
        incrementLineSpacing(){
            if(this.form.line_height == 2.4){
                return;
            }
            this.form.line_height = +(this.form.line_height + 0.1).toFixed(1);
        },
    
        decrementLineSpacing(){
            if(this.form.line_height == 1.3){
                return;
            }
            this.form.line_height = +(this.form.line_height - 0.1).toFixed(1);
        },

        handleShowCoverChange(e){
            if(!this.pdfPath){
                return;
            }
            this.showCover = e.target.checked;
            this.setPdfPath();
        },

        setPdfPath() {
            this.pdfPath = null;
            this.gettingPdf = true;
            this.pdfPath = `/letters/${this.selectedLetter.id}/pdf?showCover=${this.showCover}&t=${Date.now()}#navpanes=1&toolbar=1&view=FitH&scrollbar=0`;
        },

        handleLetterSelection(letter){
            this.selectedLetter = letter;
            this.form = {...letter};
            if (this.kendoEditor) {
                this.kendoEditor.value(this.form.body || '');
            } else {
                this.initKendoEditor();
            }
            this.setPdfPath();
        },

        handleNewLetter(){
            this.form = this.getEmptyForm();
            this.selectedLetter = 'new';
            this.pdfPath = null;

            if (this.kendoEditor) {
                this.kendoEditor.value(this.form.body || '');
            } else {
                this.initKendoEditor();
            }
        },

        handleDuplicateLetter(letter){
            this.form = {...letter};
            this.form.id = null;
            this.form.can_edit = true;
            this.selectedLetter = 'new';
            this.pdfPath = null;
            if (this.kendoEditor) {
                this.kendoEditor.value(this.form.body || '');
            } else {
                this.initKendoEditor();
            }
        },

    })
})