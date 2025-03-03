<?php


$request_uri = $_SERVER["REQUEST_URI"];
$uri = strtok($_SERVER["REQUEST_URI"], '?');

$uriArray = explode("/", $uri);

if($uriArray[1] === '' && $_SERVER['REQUEST_METHOD'] === 'GET')
{
    include 'resources/image.html';
    exit();
}

?>