<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * @param string $varijablaaa Naziv skole
 */

$varijabla = "Algebra"; // postaje string

echo $varijabla;
$varijabla = 35;
echo $varijabla;  // sad je cjelobrojna

$varijabla = array('RTL', 'Nova', 'National Geographic', 2, 44, 'neki text');
// echo $varijablaaa;  // ovako se ne ispisuju polja     

echo '<br>';  // HORIZONTAL RULER
foreach ($varijabla as $x) {
    echo $x;
    echo " ";
    
}

echo "<hr>";  // HORIZONTAL RULER // ispis u obliku liste
echo "<ul>";
foreach ($varijabla as $x) {
    echo "<li>" . $x . "</li>";
}
echo "</ul>";


// Ovo dolje se može, ali se ne preporučuje
$naziv_var = "iznos";
$$naziv_var = 55;  // isto kao da smo napisali '$iznos'
echo $iznos;

define('SRIJEDA', 3);
define('UTORAK', 2);
define('PI', 3.14);
echo '<br>utorak je ' . UTORAK . ' dan u tjednu';
echo '<br>Ludolfov broj je: ' . PI;

unset($iznos);
//echo $iznos; // ne mogu ispisati ako je nedefinirana




$x = 123;
if (is_float($naziv_var)) {
    echo '<br>varijabla x je broj sa pomičnim zarezom';
}
if (is_int($x)) {
    echo '<br>varijabla $x je cjelobrojna';
    echo "<br>varijabla $x je cjelobrojna";
    echo "<br>varijabla " . $x . ' je cjelobrojna';
    echo "<br>varijabla "
    . $x
    . ' je cjelobrojna';
}
$x = NULL;
unset($x);  // OVO NIJE ISTO


$x = 55;
$y = 33;
echo "<br>zbroj "
 . $x
 . ' plus'
 . $y
 . ' jednako je '
 . ($x + $y);