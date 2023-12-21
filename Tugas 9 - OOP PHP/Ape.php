<?php

require_once 'Animal.php';

class Ape extends Animal {
    public $legs = 2; // Mengubah properti legs menjadi 2 pada class Ape

    public function yell() {
        echo "Yell : Auooo" . PHP_EOL;
    }
}

?>