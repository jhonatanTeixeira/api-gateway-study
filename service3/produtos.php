<?php

$usuarios = [];

for ($i=1; $i<=30; $i++) {
    $usuarios[] = [
        'name' => rand(1000, 100000),
        'value' => rand(1000, 100000),
        'type' => rand(1000, 100000),
        'quantity' => rand(1000, 100000),
    ];
}

header('Content-type: application/json');

echo json_encode($usuarios);