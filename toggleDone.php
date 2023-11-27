<?php

$index = $_POST['index'] ?? -1;

$json = file_get_contents('./todos.json');

$todos = json_decode($json, true);

$todos[$index]['done'] = !$todos[$index]['done'];

$json = json_encode($todos);

file_put_contents('./todos.json', $json);

header('Content-Type: application/json');

echo $json;
