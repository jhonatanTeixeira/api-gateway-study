<?php

$usuarios = [];

for ($i=1; $i<=30; $i++) {
    $usuarios[] = [
        'name' => rand(1000, 100000),
        'email' => rand(1000, 100000),
        'pass' => rand(1000, 100000),
    ];
}

header('Content-type: application/json');

echo json_encode($usuarios);