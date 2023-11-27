<?php

$index = $_POST['index'] ?? null;

$json = file_get_contents('./todos.json');

$todos = json_decode($json, true);

if ($todos[$index]['done'] === true) {
    $todos[$index]['done'] = false;
} else {
    $todos[$index]['done'] = true;
};

$json = json_encode($todos);

file_put_contents('./todos.json', $json);

header('Content-Type: application/json');

echo $json;
