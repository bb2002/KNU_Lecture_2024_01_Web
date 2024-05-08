<?php
    class Fruit {
        var $fruit_name;
        var $price;
        var $color;

        function __construct($name, $price, $color) {
            $this->fruit_name = $name;
            $this->price = $price;
            $this->color = $color;
        }

        function print_fruit() {
            print "Fruit name: $this->fruit_name <br />";
            print "Fruit price: $this->price <br />";
            print "Fruit color: $this->color <br /><br />";
        }
    }

    $apple = new Fruit("Apple", 1000, "red");
    $orange = new Fruit('Orange', 2000, "orange");
    $banana = new Fruit("Banana", 500, "yellow");
    $pear = new Fruit("Pear", 3000, "gray");

    $apple->print_fruit();
    $orange->print_fruit();
    $banana->print_fruit();
    $pear->print_fruit();
?>