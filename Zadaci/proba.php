<?php


/* 
1. U datoteci data.php nalazi se polje sa podacima ljudi koji su se prijavili na neku
konferenciju. Sadrži datum prijave te da li je izvršena uplata kotizacije.
2. Uključiti data.php unutar index.php stranice (include)
3. Koristiti jednu od petlji za ispis redaka tablice.
4. Kod stvaranja padajudeg izbornika, opcija koja piše u polju pod ključem „placeno“
mora biti odabrana (selected). Dakle ako pod placeno pise Ne onda u padajudem
izborniku treba biti isto odabran Ne, a za opciju Da pod placeno ispisuje se Da.
5. Napisati funkciju date_trans() kojoj se kao parametar predaje vrijednost elementa sa
ključem „datum“ koji je oblika YYYY-MM-DD. Funkcija mora vratiti transformirani
datum oblika DD.MM.YYYY. Npr: Ako se funkciji preda datum 2011-03-01, funkcija
kao rezultat izvršavanja mora vratiti 01.03.2011.
Za razdvajanje vrijednosti datuma po godini, mjesecu i danu razdvojenih znakom „-“
koristite ugrađenu PHP funkciju explode ($razdvojnik , $string_za_razdvajanje) koja
vrada polje sa razdvojenim elementima.
Npr: Za $datum_polje = explode ('-', '2011-03-01') rezultat je polje $datum_polje sa
elementima [0] => '2011', [1] => '03', [2] => '01'.
Za spajanje vrijednosti datuma po godini, mjesecu i danu iz dobivenog polja koristite
uobičajeni način za spajanje stringova u PHP-u.
 */

echo "<strong>Uvod u PHP i objektno orijentirano programiranje</strong>";
echo '<h3>';


function tablica_ispis($imena_tablica)
{
    echo '<table border>'
    . '<thead><tr bgcolor="#CCD1D1">
        <th style="width:10px"> Rbr </th>
        <th style="width:70px"> Prezime </th>
        <th style="width:70px"> Ime </th>
        <th style="width:80px"> Datum prijave </th>
        <th style="width:70px"> Placeno </th>
        </tr></thead><tbody>';
        
 foreach ($imena_tablica as $key => $data){
           
            echo '<tr>
                <td style="text-align: center">'.$data["rbr"].'</td>
                <td style="width:70px">'.$data["prezime"].'</td>
                <td style="width:70px">'.$data["ime"].'</td>
                <td style="text-align: center">'.$data["datum"].'</td>
                <td style="text-align: center">'.$data["placeno"].'</td>
                </tr>';
 }
            echo '</tbody></table>';
        }
 $data=array();    
        

$data[1]["rbr"]='1.';
$data[1]["ime"]='Iva';
$data[1]["prezime"]='Ivic';

$data[1]["datum"]="2011-03-01";
$timestamp1 = strtotime($data[1]["datum"]);
$new_date1 = date("d.m.Y.", $timestamp1);
$data[1]["datum"]=$new_date1;

$data[1]["placeno"]=
        '<select>
        <option value="Da">Da</option>
        <option value="Ne">Ne</option>
        </select>';


$data[2]["rbr"]='2.';
$data[2]["ime"]='Petar';
$data[2]["prezime"]='Peric';

$data[2]["datum"]="2011-03-05";
$timestamp2 = strtotime($data[2]["datum"]);
$new_date2 = date("d.m.Y.", $timestamp2);
$data[2]["datum"]=$new_date2;

$data[2]["placeno"]=
        '<select>
        <option value="Ne">Ne</option>
        <option value="Da">Da</option>
        </select>';
        

$data[3]["rbr"]='3.';
$data[3]["ime"]='Marko';
$data[3]["prezime"]='Maric';

$data[3]["datum"]="2011-03-06";
$timestamp3 = strtotime($data[3]["datum"]);
$new_date3 = date("d.m.Y.", $timestamp3);
$data[3]["datum"]=$new_date3;

$data[3]["placeno"]=
        '<select>
        <option value="Ne">Ne</option>
        <option value="Da">Da</option>
        </select>';
        

$data[4]["rbr"]='4.';
$data[4]["ime"]='Ana';
$data[4]["prezime"]='Anic';

$data[4]["datum"]="2011-03-08";
$timestamp4 = strtotime($data[4]["datum"]);
$new_date4 = date("d.m.Y.", $timestamp4);
$data[4]["datum"]=$new_date4;

$data[4]["placeno"]=
        '<select>
        <option value="Da">Da</option>
        <option value="Ne">Ne</option>
        </select>';
        

$data[5]["rbr"]='5.';
$data[5]["ime"]='Marko';
$data[5]["prezime"]='Maric';

$data[5]["datum"]="2011-03-08";
$timestamp5 = strtotime($data[5]["datum"]);
$new_date5 = date("d.m.Y.", $timestamp5);
$data[5]["datum"]=$new_date5;

$data[5]["placeno"]=
        '<select>
        <option value="Ne">Ne</option>
        <option value="Da">Da</option>
        </select>';


$data[6]["rbr"]='6.';
$data[6]["ime"]='Jure';
$data[6]["prezime"]='Juric';

$data[6]["datum"]="2011-03-12";
$timestamp6 = strtotime($data[6]["datum"]);
$new_date6 = date("d.m.Y.", $timestamp6);
$data[6]["datum"]=$new_date6;

$data[6]["placeno"]=
        '<select>
        <option value="Ne">Ne</option>
        <option value="Da">Da</option>
        </select>';


$data[7]["rbr"]='7.';
$data[7]["ime"]='Antoia';
$data[7]["prezime"]='Antic';

$data[7]["datum"]="2011-03-15";
$timestamp7 = strtotime($data[7]["datum"]);
$new_date7 = date("d.m.Y.", $timestamp7);
$data[7]["datum"]=$new_date7;

$data[7]["placeno"]=
        '<select>
        <option value="Da">Da</option>
        <option value="Ne">Ne</option>
        </select>';


$data[8]["rbr"]='8.';
$data[8]["ime"]='Zvonko';
$data[8]["prezime"]='Zvonkic';

$data[8]["datum"]="2011-03-16";
$timestamp8 = strtotime($data[8]["datum"]);
$new_date8 = date("d.m.Y.", $timestamp8);
$data[8]["datum"]=$new_date8;

$data[8]["placeno"]=
        '<select>
        <option value="Da">Da</option>
        <option value="Ne">Ne</option>
        </select>';


$data[9]["rbr"]='9.';
$data[9]["ime"]='Mario';
$data[9]["prezime"]='Marijovic';

$data[9]["datum"]="2011-03-16";
$timestamp9 = strtotime($data[9]["datum"]);
$new_date9 = date("d.m.Y.", $timestamp9);
$data[9]["datum"]=$new_date9;

$data[9]["placeno"]=
        '<select>
        <option value="Ne">Ne</option>
        <option value="Da">Da</option>
        </select>';


$data[10]["rbr"]='10.';
$data[10]["ime"]='Zlatan';
$data[10]["prezime"]='Zlatic';

$data[10]["datum"] = "2011-03-16";
 $timestamp10 = strtotime($data[10]["datum"]);
 $new_date10 = date("d.m.Y.", $timestamp10);
$data[10]["datum"]=$new_date10;

$data[10]["placeno"]=
        '<select>
        <option value="Da">Da</option>
        <option value="Ne">Ne</option>
        </select>';


tablica_ispis($data);


?>
