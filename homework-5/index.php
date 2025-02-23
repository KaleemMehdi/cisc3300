<?php

//we need this to accept requests from any domain
header("Access-Control-Allow-Origin: *");

$uri = strtok($_SERVER["REQUEST_URI"], '?');

//get uri pieces
$uriArray = explode("/", $uri);
//var_dump($uriArray);
//0
//1 forms

if ($uriArray[1] === '' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $lawyer = [
        [
            'name' => 'Robbery Case:',
            'price' => '$750'
        ],
        [
            'name' => 'Murder Case:',
            'price' => '$1000'
        ],
        [
            'name' => 'Defamation Case:',
            'price' => '$500'
        ],
        [
            'name' => 'Accident Case:',
            'price' => '$500'
        ]
    ];

    echo json_encode($lawyer);
    exit();
}

?>
