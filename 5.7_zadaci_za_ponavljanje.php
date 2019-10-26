<?php

/* 
 * 1. Koristeći se operatorima usporedbe veće od i manje od i iskazom if-else provjerite
 * odnos varijabli $a=4 i $b=2 i ispišite prikladnu poruku.
 */
echo 'Riješenje za zadatak 5.7.1';
echo "<br>";
echo "<br>";

$a = 4;
$b = 2;

if($a < $b)
    echo $a." je manji od ".$b;

if($a > $b)
    echo $a." je veći od ".$b;
echo "<br>";
echo "<hr>";

/* 
 * 2. Napišite program koji rabi dvije varijable $a i $b. Definirajte im proizvodnje brojčane vrijednosti.
 * Ako je $a veće od $b, onda uvećajte vrijednost $a za jedan, a ako je veća varijabla $b, onda je umanjite za jedan
 * koristeći se operatorima automatskog povećavanja ili smanjivanja.
 * Ispišite na kraju vrijednosti varijabli.
 */

unset($a,$b);

$a = 8;
$b = 10;

echo 'Riješenje za zadatak 5.7.2';
echo "<br>";
echo "<br>";

if ($a > $b) $a++;
else { $a--;
}
echo $a."  ".$b;

echo "<br>";
echo "<hr>";

/* 
 * 3. Pomoću petlje while ispišite od 1 do 50 na ekranu, jedan ispod drugog.
 */

unset($a,);

echo 'Riješenje za zadatak 5.7.3';
echo "<br>";
echo "<br>";

$a = 1;
while ($a <= 50)
{
    echo $a."<br/>";
    $a ++;
}

echo "<br>";
echo "<hr>";

/* 
 * 4. S pomoću petlje for zbrojite brojeve od 20 do 30 te zbroj ispišite na ekranu.
 */

echo 'Riješenje za zadatak 5.7.4';
echo "<br>";
echo "<br>";

$zbroj=0;
for($x=20; $x<=30; $x++)
{
    $zbroj +=$x;
}
echo "$zbroj";

echo "<br>";
echo "<hr>";
echo 'The end!';