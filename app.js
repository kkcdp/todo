
const app = new Vue({
    el: '#app',

    data() {
        return {
            myInput: '',
            radioInput: null,
            tasks: [
                {   
                    title: 'Virsraksts no app lapas',
                    body: 'Kaut kāds paraugs no app lapas',
                    radioInput: 'Svarīgs',
                    isDone: false,
                    checked: false,

                },
            ],

            isModalOpen: false,
            isOpenClass: false,
          
            modaltasks: [
                {
                    title: '',
                    body: '',
                    radioInput: '',
                    isDone: false,
                }
            ],          

        }
        
    },

    methods: {
        onClicked() {
            this.tasks.push({
                title: this.myInput,
                body: '',
                isDone: false,
                radioInput: ''
            });

            this.myInput = null;
        },

        onInput(event) {
            if (event.keyCode === 13) {
                this.onClicked();
            }
        },

        makeDone(task) {
            task.isDone = true;
            task.checked = true;

        },

        onDelete(index) {
            this.tasks.splice(index, 1);
        },

        onClickedMod() {
            this.tasks.push({
                title: this.title,
                body: this.body,
                isDone: false,              
                radioInput: this.radioInput
            });

            this.title = null;
            this.body = null;
            this.radioInput = null;
            
            this.closeModal();
            
        },
        
        openModal() {
            this.isModalOpen = true;
            this.isOpenClass = true;
            
        },

        closeModal() {
            this.isModalOpen = false;
        },

        onInputModal(event) {
            if (event.keyCode === 13) {
                this.onClickedMod();
            }
        }


    },

    computed: {
        fullMessage() {
            return `${this.message} ${this.message2}`;
        }

    }
})

