<?php

$usuarios = [];

for ($i=1; $i<=30; $i++) {
    $usuarios[] = [
        'products' => rand(1000, 100000),
        'customer' => rand(1000, 100000),
        'value' => rand(1000, 100000),
    ];
}

header('Content-type: application/json');

echo json_encode($usuarios);