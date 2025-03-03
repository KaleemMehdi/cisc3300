<?php

require 'Suit.php';

use cisc3300\inclass14\Suit;

$item = new Suit('blue coat', 'pink tie', 'white dress shirt', 'black dress shoes');

echo $item->getItems();

?>