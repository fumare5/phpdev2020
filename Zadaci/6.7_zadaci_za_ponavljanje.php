<?php

/* 
 * 1. Napišite program koji upisuje pet imena u polje $imena i ispišite ih s pomoću petlje foreach.
 */
echo 'Riješenje za zadatak 6.7.1'; 
echo "<br>";
echo "<br>";

$polje_imena = array("Tajana", "Jelena", "Dino", "Ognjen", "Ines");
foreach ($polje_imena as $ime)
{
    echo '<li>'.$ime.'</li>';
}


echo "<hr>";
/* 
 * 2. Polju iz prethodnog zadatka promijenite ključeve tako da umjesto ključa 1 piše ime5,
 * umjesto ključa 2 ime4 itd.
 */
echo 'Riješenje za zadatak 6.7.2';
echo "<br>";
echo "<br>";

$polje_imena = array();       
$polje_imena["ime5"] = "Tajana";
$polje_imena["ime4"] = "Jelena";
$polje_imena["ime3"] = "Dino";
$polje_imena["ime2"] = "Ognjen";
$polje_imena["ime1"] = "Ines";

foreach ($polje_imena as $key => $ime) 
{
    echo $key." => ".$ime."<br/>";
}
        
        
echo "<br>";
echo "<hr>";

/* 
 * 3. Posložite imena u polju iz prvog zadatka abecednim redom i ispišite vrijednosti
 * elemenata uz pomoć petlje for.
 */
echo 'Riješenje za zadatak 6.7.3';
echo "<br>";
echo "<br>";

$polje_imena = array();       
$polje_imena[] = "Tajana";
$polje_imena[] = "Jelena";
$polje_imena[] = "Dino";
$polje_imena[] = "Ognjen";
$polje_imena[] = "Ines";

sort($polje_imena);
for($a=0; $a<count($polje_imena); $a++)
{
    echo $polje_imena[$a]."<br/>";
}

echo "<br>";
echo "<hr>";
/* 
 * 4. Posložite ključeve u polju abecednim redom i ispišite vrijednosti elemenata zajedno s
 * pripadajućim ključevima s pomoću petlje foreach.
 */
echo 'Riješenje za zadatak 6.7.4';
echo "<br>";
echo "<br>";

$polje_imena = array();       
$polje_imena["ime5"] = "Tajana";
$polje_imena["ime4"] = "Jelena";
$polje_imena["ime3"] = "Dino";
$polje_imena["ime2"] = "Ognjen";
$polje_imena["ime1"] = "Ines";

ksort($polje_imena);
foreach ($polje_imena as $key => $ime) 
{
    echo $key. " => ". $ime."<br/>";
}



echo "<br>";
echo "<hr>";
/* 
 * 5. Napoišite program koji će s pomoću petlje for automatski stvoriti polje brojeva od 1 
 * do 100 te s petljom foreach ispisati sadržaj polja.
 */
echo 'Riješenje za zadatak 6.7.5';
echo "<br>";
echo "<br>";

$polje_brojeva = array();
for($a=1; $a<=100; $a++)
{
    $polje_brojeva[] = $a;
}
foreach ($polje_brojeva as $value) {
    echo $value. "<br/>";
}
echo "<br>";
echo "<hr>";
echo 'The end!';