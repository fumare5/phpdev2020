<?php

/* 
 * 1. Napišite funkciju koja vraća hrvatski naziv za trenutačni mjesec.
 * Parametar koji prosljeđujete funkciji je rezultat funkcije date('n').
 */
echo 'Riješenje za zadatak 7.8.1'; 
echo "<br>";
echo "<br>";

function hr_mjesec($mj)
{
    $mj_array = array();
    $mj_array[1] = "Sječanj";
    $mj_array[2] = "Veljača";
    $mj_array[3] = "Ožujak";
    $mj_array[4] = "Travanj";
    $mj_array[5] = "Svibanj";
    $mj_array[6] = "Lipanj";
    $mj_array[7] = "Srpanj";
    $mj_array[8] = "Kolovoz";
    $mj_array[9] = "Rujan";
    $mj_array[10] = "Listopad";
    $mj_array[11] = "Studeni";
    $mj_array[12] = "Prosinac";
    
    return $mj_array[$mj];
}
$mj = date('n');
echo hr_mjesec($mj);

echo "<hr>";


/* 
 * 2. Napišite funkciju koja ispisuje HTML tablicu imena i prezimena učenika.
 * Kao parametar joj se prosljeđuje polje s imenima i prezimenima.
 */
echo 'Riješenje za zadatak 7.8.2'; 
echo "<br>";
echo "<br>";

function tablica_ispis($imena_tablica)
{
    echo '<table>'
    . '<thead><tr>
        <th style="width:70px"> Ime </th>
        <th style="width:70px"> Prezime </th>
        </tr></thead><tbody>';
        
 foreach ($imena_tablica as $key => $ucenik){
           // echo '<table>'
            echo '<tr>
                <td style="width:70px">'.$ucenik["ime"].'</td>
                <td style="width:70px">'.$ucenik["prezime"].'</td>
                </tr>';
 }
            echo '</tbody></table>';
        }
 $ucenici=array();    
        
$ucenici[1]["ime"]='Hrvoja';
$ucenici[1]["prezime"]='Srsić';
        
$ucenici[2]["ime"]='Ivan';
$ucenici[2]["prezime"]='Novoselić';
        
$ucenici[3]["ime"]='Ana';
$ucenici[3]["prezime"]='Špoljarić';
        
$ucenici[4]["ime"]='Ines';
$ucenici[4]["prezime"]='Poljak';
        
$ucenici[5]["ime"]='Luka';
$ucenici[5]["prezime"]='Ižaković';

tablica_ispis($ucenici);


echo "<hr>";


/* 
 * 3. Napišite funkciju za zbrajanje, razliku, umnožak i dijeljenje dva broja.
 * Zatim napišite funkciju koja će pozivati sve funkcije odjednom.
 */
echo 'Riješenje za zadatak 7.8.3'; 
echo "<br>";
echo "<br>";

function sum($a,$b)
{
    return $a+$b;
}
function raz($a,$b)
{
    return $a-$b;
}
function mnoz($a,$b)
{
    return $a*$b;
}
function djel($a,$b)
{
    return $a/$b;
}
function sve($a,$b)
{
    echo "zbroj:".$a." + ".$b." = ".sum($a,$b)."<br>";
    printf("razlika:%d - %d = %d<br>",$a,$b,raz($a,$b)) ;
    echo mnoz($a,$b);
    echo djel($a,$b);
}

$prvi_broj = 5;
$drugi_broj = 9;
sve($prvi_broj,$drugi_broj);


/* 
 * 4. Napišite funkciju koja prima varijabilni broj parametra. Parametri su kombinirani
 * brojevi i stringovi. Za svaki parametar ispišite kojeg je tipa.
 */

