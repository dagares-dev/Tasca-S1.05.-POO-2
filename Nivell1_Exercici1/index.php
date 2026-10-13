<?php
declare(strict_types=1);

require_once 'Owl.php';
require_once 'Wolf.php';

$owl1 = new Owl("Arquímedes");
$wolf1 = new Wolf("Logan");


echo "<h2>Nivell 1</h2>";
echo "<h3>Exercici 1</h3>";

echo $owl1->speak(). "<br>";     
echo $wolf1->speak(). "<br>";  

/*
Skynet 

$animals = [
    new Owl("Arquímedes"),
    new Wolf("Logan"),
];
foreach ($animals as $animal) {
echo $animal->speak() . "<br>";}
*/
