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

            if (this.newTodo === '') {
                return
            } else {
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

        deleteTodo(index) {

            const todoIndex = {
                id: index,
            }

            axios.post('./deleteTodo.php', todoIndex, {
                headers: { 'Content-type': 'multipart/form-data' }
            }).then(res => {
                this.todos = res.data;
            })

        },

        toggleDone(index) {
            const todoIndex = {
                index: index
            }

            axios.post('./toggleDone.php', todoIndex, {
                headers: { 'Content-type': 'multipart/form-data' }
            }).then(res => {
                this.todos = res.data;
            })
        }
    },
    created() {
        this.fetchData();
    }
}).mount('#app')