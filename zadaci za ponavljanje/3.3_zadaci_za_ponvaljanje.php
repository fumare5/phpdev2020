<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//1. Definirajte nekoliko različitih brojačanih varijabli i ispišite ih
$a=44;
$b=55;
$c=66;

echo 'Riješenje za zadatak 3.3.1';

echo "<br> $a";
echo "<br> $b";
echo "<br> $c";

echo "<hr>";
//2 Definirajte varijablu $a s vrijednošću 3 i varijablu $b s vrijednošću 5.
//Korištenjem pomočne varijable $pom zamijenite njihove sadržaje
unset($a,$b);

$a=3;
$b=5;
$pom=$a;
$a=$b;
$b=$pom;

echo 'Riješenje za zadatak 3.3.2';
echo "<br>";
echo "a=",$a,", b=",$b,"<br>";

echo "<hr>";
//Kreirajte varijablu s tekstualnom vrijednošću.
//Dodijelite joj vrijednost vašeg imena i prezimena.
//Ispišite vrijednost tih varijabli

$textvarijabla = "Danijel Fumić";
echo 'Riješenje za zadatak 3.3.3';
echo "<br>";
echo $textvarijabla;
?>