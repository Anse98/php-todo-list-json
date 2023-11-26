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
//     ],
// ];

$json = file_get_contents('./todos.json');

$todos = json_decode($json, true);

//Per far leggere correttamente i dati a javascript è necessario specificare che le informazioni sono di tipo json
header('Content-Type: application/json');

// trasformo il mio array php in oggetto json
echo json_encode($todos);
