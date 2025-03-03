<?php

require 'Suit.php';

use cisc3300\inclass14\Suit;

$suit = new Suit('coat', 'tie', 'shirt', 'shoes');
echo Suit::getItems();


?>