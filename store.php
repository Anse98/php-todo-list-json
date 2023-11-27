<?php

$new_todo = $_POST['todo'] ?? '';

$response = [
    'success' => true
];

if ($new_todo) {

    $new_todo_arr = [
        'text' => $new_todo,
        'done' => false,
    ];

    $json = file_get_contents('./todos.json');

    $todos = json_decode($json, true);

    $todos[] = $new_todo_arr;

    $response['todos'] = $todos;

    $json = json_encode($todos);

    file_put_contents('./todos.json', $json);
} else {
    $response['success'] = false;
    $response['message'] = "Valore task non valido";
}


header('Content-Type: application/json');
echo json_encode($response);
