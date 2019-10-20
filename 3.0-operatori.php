<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// arutmetički operatori

$a=34;
$b=8;

echo 'varijable a i b:'.$a.' '.$b; 
echo '<br> zbroj:'.($a+$b);
echo '<br> razlika:'.($a-$b);
echo '<br> umnožak:'.($a*$b);
echo '<br> kvocijent:'.($a/$b);
echo '<br> modulo:'.($a%$b);

// nastavak nizova

// .

//automatsko povečavanje i smanjivanje

$a++;
echo 'varijable a i b:'.$a.' '.$b; 
echo "<hr>";
echo "<br>".$b++;
echo $b;

echo "<hr>";
echo "<br>".++$b;
echo $b;

echo "<hr>";
echo "<br>".$b--;
echo $b;

echo "<hr>";
echo "<br>".--$b;
echo $b;

// operatori usporedbe
unset($a,$b);
$a=34;
$b=33.;

echo '<br>$a is '.gettype($a);
echo '<br>$b is '.gettype($b);

if($a==$b){ //usporedba po vrijednosti  ISTO
    echo '<br> varijable su jednake vrijednosti';
}
 else {
    echo '<br> varijable su različite vrijednosti';
}
if($a===$b){ // usporedba po tipu i vrijednosti INDENTICNO
    echo '<br> varijable su jednake vrijednosti';
}
 else {
    echo '<br> varijable su različite vrijednosti';
}
if($a!==$b){  // NEJEDNAKO // NEINDENTICNOST
    echo '<br>varijable su razlicite!!';
}
else{
    echo '<br>varijable su jednake ';
}
///  VECI ili MANJI
if($a < $b){
    echo '<br>a je manji od b';
}
elseif ($a > $b) {
echo '<br>a je veci od b';
}
else{
    echo '<br>varijable su jednake vrijednosti';
}