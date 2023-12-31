<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="./style.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://kit.fontawesome.com/f1f0c66429.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <main>
            <section>
                <div class="container head">
                    <h1 class="title">{{ title }}</h1>
                    <input class="input-todo" type="text" v-model.trim="newTodo" @keyup.enter=storeToDo() placeholder="Nuova To do..">
                </div>
            </section>

            <section>
                <div class="container body">
                    <ul>
                        <li v-for="(todo, i) in todos" :key="i" :class="{done : todo.done}">
                            <span class="todo">{{todo.text}}</span>
                            <div class="icons">
                                <span class="check" @click="toggleDone(i)"><i class="fa-solid fa-circle-check"></i></span>
                                <span class="delete" @click="deleteTodo(i)"><i class="fa-solid fa-trash"></i></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </main>
    </div>

    <script src="./app.js"></script>
</body>

</html>