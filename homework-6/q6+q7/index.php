<?php

$request_uri = $_SERVER["REQUEST_URI"];
$uri = strtok($_SERVER["REQUEST_URI"], '?');

$uriArray = explode("/", $uri);

$associativeArray = [
    'key1' => 1,
    'key2' => 2,
    'key3' => 3,
];

echo "Question 6:";
echo "<br>";
echo "<br>";

if($uriArray[1] === '' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    foreach ($associativeArray as $key => $value) {
        echo "{$key}: {$value}";
        echo "<br>";
    }
}

echo "<br>";
echo "Question 7:";
echo "<br>";
echo "<br>";

function calculateCost(int $cost, int $quantity, $discount = 0): int {
    $cost = $cost * $quantity;
    return $cost - $discount;
}

$output = calculateCost(5, 10,5);

if($uriArray[1] === '' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "The total cost is: {$output} dollars";
}
?>