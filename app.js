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
            console.log(this.newTodo);
        }
    },
    created() {
        this.fetchData();
    }
}).mount('#app')