<?php

require_once 'animal.php';
require_once 'Ape.php';
require_once 'Frog.php';


$sheep = new Animal('shaun');
$frog = new Frog('buduk');
$ape = new Ape('kera sakti');


echo "Name: " . $sheep->name;
echo "<br/>";
echo "Legs: " . $sheep->legs;
echo "<br/>";
echo "Cold Blooded: " . $sheep->cold_blooded;
echo "<br/>";
echo "<br/>";

echo "Name: " . $frog->name;
echo "<br/>";
echo "Legs: " . $frog->legs;
echo "<br/>";
echo "Cold Blooded: " . $frog->cold_blooded;
echo "<br/>";
$frog->jump();
echo "<br/>";
echo "<br/>";

echo "Name: " . $ape->name;
echo "<br/>";
echo "Legs: " . $ape->legs;
echo "<br/>";
echo "Cold Blooded: " . $ape->cold_blooded;
echo "<br/>";
$ape->yell();



?>