<?php

require_once 'animal.php';
require_once 'ape.php';
require_once 'frog.php';

$sheep = new Animal("Shaun");
echo "Name : " . $sheep->get_name() . "<br/>";
echo "legs : " . $sheep->get_legs() . "<br/>";
echo "clod blooded : " . $sheep->get_cold_blooded() . "<br/><br/>\n";

$kodok = new Frog("Buduk");
echo "Name : " . $kodok->get_name() . "<br/>";
echo "legs : " . $kodok->get_legs() . "<br/>";
echo "clod blooded : " . $kodok->get_cold_blooded() . "<br/>";
echo "Jump : " . $kodok->jump() . "<br/><br/>\n";

$sungokong = new Ape("Kera Sakti");
echo "Name : " . $sungokong->get_name() . "<br/>";
echo "legs : " . $sungokong->get_legs() . "<br/>";
echo "clod blooded : " . $sungokong->get_cold_blooded() . "<br/>";
echo "Yell : " . $sungokong->yell() . "<br/>\n";

?>
