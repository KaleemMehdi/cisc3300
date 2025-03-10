<?php

namespace cisc3300\inclass16\controllers;

use Exception;
use Error;

class ErrorController {

    public function errorFunction() {
        $price = 7;
        $quantity = 'five';
        $price * $quantity;
    }
    public function viewErrors() {
        try {
          $this->errorFunction();
            if (true) {
                throw new Exception('Custom error message!');
            }
        } catch (Error $e) {
            echo 'Caught error!';
        }

    }
}