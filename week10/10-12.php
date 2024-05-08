<?php
    class Apple {
        private $price;
        var $color;
        var $weight;

        function printApple() {
            $this->printPrivate();
        }

        private function printPrivate() {
            print $this->price . " " . $this->color . " " . $this->weight . "<br />";
        }

        function setPrice($price) {
            $this->price = $price;
        }
    }

    $an_apple = new Apple;
    // $an_apple->setPrice(200);
    $an_apple->price = 200;
    $an_apple->color = "RED";
    $an_apple->weight = "100g";
    $an_apple->printApple();
?>