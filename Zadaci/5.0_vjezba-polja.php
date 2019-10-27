<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$polje= array('Tesla','Edison','Bell');
$polje[]= 'Penkala';

foreach ($polje as $ime)
{
    echo $ime."<br/>";
}

echo '<hr><br>';

foreach ($polje as $ime):
    echo $ime."<br/>";
endforeach;

echo '<hr><br>';
foreach ($polje as $key => $ime) 
{
    echo 'Element broj '.$key.' ima vrijednost: '.$ime."<br/>";
}
echo '<hr><br>';

$ucenici = array('1' => array('ime' => 'Ivan', 'prezime' => 'Ivanic'),
    '2' => array('ime' => 'Mate', 'prezime' => 'Matić'),
    '3' => array('ime' => 'Ante', 'prezime' => 'Antic'));

foreach ($ucenici as $br_ucenika => $podaci) 
{
    foreach ($podaci as $naziv_podataka => $vrijednost_podataka) 
    {
        echo 'ucenik br.   '.$br_ucenika.' - '.$naziv_podataka.':  '.$vrijednost_podataka."<br/>";    
    }
}