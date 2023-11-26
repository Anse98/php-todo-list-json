const { createApp } = Vue

createApp({
    data() {
        return {
            title: 'To Do List!',
            todos: [],
            newTodo: '',
        }
    },
    methods: {
        fetchData() {
            axios.get('server.php').then((res) => {
                this.todos = res.data;
            });
        },

        storeToDo() {

            const data = {
                todo: this.newTodo,
            }

            axios.post('store.php', data, {
                headers: { 'Content-type': 'multipart/form-data' }
            }).then((res) => {
                this.todos = res.data;
            })

            this.newTodo = '';
        }
    },
    created() {
        this.fetchData();
    }
}).mount('#app')