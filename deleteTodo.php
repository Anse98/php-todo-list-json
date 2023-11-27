<?php

$id = $_POST['id'] ?? null;

$json = file_get_contents('./todos.json');

$todos = json_decode($json, true);

unset($todos[$id]);

$json = json_encode($todos);

file_put_contents('./todos.json', $json);

header('Content-Type: application/json');

echo $json;
