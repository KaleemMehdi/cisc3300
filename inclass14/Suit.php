<?php

namespace cisc3300\inclass14;

class Suit {

    public string $coat;
    public string $tie;
    public string $shirt;
    public string $shoes;

    public function __construct(string $coat, string $tie, string $shirt, string $shoes) {
        $this->coat = $coat;
        $this->tie = $tie;
        $this->shirt = $shirt;
        $this->shoes = $shoes;
    }

    public function getItems() {
        return json_encode([
            'coat' => $this->coat,
            'tie' => $this->tie,
            'shirt' => $this->shirt,
            'shoes' => $this->shoes
        ]);
    }
}
?>