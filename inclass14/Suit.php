<?php

namespace cisc3300\inclass14;

class Suit {

    public string $coat;
//    public string $tie;
//    public string $shirt;
//    public string $shoes;



    public function getItems()
    {
       return json_encode([
           'coat' => 'coat',
           'tie' => 'tie',
           'shirt' => 'shirt',
           'shoes' => 'shoes'
       ]);
    }
}
?>