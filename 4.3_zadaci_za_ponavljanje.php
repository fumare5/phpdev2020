<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//* 1. Koji je od navedenih operatora aritmetički operator?
//a. %
//b. &&
//c. .

echo 'Riješenje za zadatak 4.3.1';
echo "<br>";
echo "Aritmetički operator je % Modulo";
echo "<br>";
echo "<hr>";


// 2. Definirajte dvije varijable $Ime i $Prezime u koje ćete upisati vaše ime i prezime.
//Ispišite te dvije varijable koristeći se operatorom za nastavlajnje nizova.
 
$ime= "Danijel";
$prezime= "Fumić";

echo 'Riješenje za zadatak 4.3.2';
echo "<br>";
echo "Moje ime je ".$ime." ".$prezime.".";
echo "<br>";
echo "<hr>";


//3. Postavite vrijednost varijable $a na 5.
// Korištenjem operatora automatskog povećavanja i smanjivanja najprije povećajte vrijednost varijable $a 
//te ispišite, a nakon toga smanjite vrijednost i ispišite.

$a=5;
echo 'Riješenje za zadatak 4.3.3';
echo "<br>";
echo "Varijabla a je: ".(++$a)."<br>";
echo "Varijabla a je: ".(--$a)."<br>";
echo "<br>";
echo "<hr>";


//4. Varijablu $a iz prethodnog zadatka operatorom pretvorbe pretvorite u broj s pomočnim
//zarezom (float) i ispišite na ekran.

echo 'Riješenje za zadatak 4.3.4';
echo "<br>";
$a =(float)$a;
echo $a;
echo "<br>";
echo "<hr>";



//5. Varijablu $a iz prethodnog zadatka operatorom dodjeljivanja s operacijom
//uvećavajte za 5.
echo 'Riješenje za zadatak 4.3.5';
echo "<br>";
echo ($a+= 5);
echo "<br>";
echo "<hr>";


//6. Napravite PHP stranicu sa dvije varijable $a = 7 i $b = 3.
//Zatim na ekranu ispišite rezultate aritmetičkih operacija na sljedeći način:
//a. 7+3=10
//b. 7-3=4
//c. 7*3=21
//d. 7/3=2,3333
//e. 7%3=1
  
unset($a);
$a = 7;
$b = 3;

echo 'Riješenje za zadatak 4.3.6';
echo "<br>";
echo "a. ".$a." + ".$b." = ".($a + $b)."<br>";
echo "b. ".$a." - ".$b." = ".($a - $b)."<br>";
echo "c. ".$a." * ".$b." = ".($a * $b)."<br>";
echo "d. ".$a." / ".$b." = ".($a / $b)."<br>";
echo "e. ".$a." % ".$b." = ".($a % $b)."<br>";
echo "<br>";
echo "<hr>";

//7. Postavite sada vrijednosti varijabli $a i $b iz prethodnog zadatka na vrijednosti
//4 i 2 i ponovno učitajte stranicu.

unset($a);
$a = 4;
$b = 2;

echo 'Riješenje za zadatak 4.3.7';
echo "<br>";
echo "a. ".$a." + ".$b." = ".($a + $b)."<br>";
echo "b. ".$a." - ".$b." = ".($a - $b)."<br>";
echo "c. ".$a." * ".$b." = ".($a * $b)."<br>";
echo "d. ".$a." / ".$b." = ".($a / $b)."<br>";
echo "e. ".$a." % ".$b." = ".($a % $b)."<br>";
echo "<br>";
echo "<hr>";


?>