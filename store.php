<?php

// $todos = [
//     [
//         'text' => 'PHP',
//         'done' => false
//     ],
//     [
//         'text' => 'JavaScript',
//         'done' => false
//     ],
//     [
//         'text' => 'HTML',
//         'done' => true
//     ],
//     [
//         'text' => 'CSS',
//         'done' => true
//     ]
// ];

$new_todo = $_POST['todo'] ?? '';

$new_todo_arr = [
    'text' => $new_todo,
    'done' => false
];

$json = file_get_contents('./todos.json');

$todos = json_decode($json, true);

$todos[] = $new_todo_arr;

$json = json_encode($todos);

file_put_contents('./todos.json', $json);

header('Content-Type: application/json');

echo $json;
