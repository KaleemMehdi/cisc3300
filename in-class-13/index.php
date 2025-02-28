<?php

$request_uri = $_SERVER["REQUEST_URI"];
$uri = strtok($_SERVER["REQUEST_URI"], '?');

$uriArray = explode("/", $uri);



if ($uriArray[1] === 'index' && $_SERVER['REQUEST_METHOD'] === 'GET')
{
    $response =
        [
            [
                'name' => 'Java'
            ],
            [
                'name' => 'Script'
            ]
        ];

    echo json_encode($response);
    exit();
}


if($uriArray[1] === '' && $_SERVER['REQUEST_METHOD'] === 'GET')
{
        include 'problem6.html';
        exit();
}

?>