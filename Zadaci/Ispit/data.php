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
        
 foreach ($imena_tablica as $key => $poduzetnik){
           
            echo '<tr>
                <td style="text-align: center">'.$poduzetnik["rbr"].'</td>
                <td style="width:70px">'.$poduzetnik["prezime"].'</td>
                <td style="width:70px">'.$poduzetnik["ime"].'</td>
                <td style="text-align: center">'.$poduzetnik["datum"].'</td>
                <td style="text-align: center">'.$poduzetnik["placeno"].'</td>
                </tr>';
 }
            echo '</tbody></table>';
        }
 $poduzetnik=array();    
        

$poduzetnik[1]["rbr"]='1.';
$poduzetnik[1]["ime"]='Iva';
$poduzetnik[1]["prezime"]='Ivic';
$poduzetnik[1]["datum"]='01.03.2011';
$poduzetnik[1]["placeno"]=
        '<select>
        <option value="Da">Da</option>
        <option value="Ne">Ne</option>
        </select>';

$poduzetnik[2]["rbr"]='2.';
$poduzetnik[2]["ime"]='Petar';
$poduzetnik[2]["prezime"]='Peric';
$poduzetnik[2]["datum"]='05.03.2011';
$poduzetnik[2]["placeno"]=
        '<select>
        <option value="Ne">Ne</option>
        <option value="Da">Da</option>
        </select>';
        
$poduzetnik[3]["rbr"]='3.';
$poduzetnik[3]["ime"]='Marko';
$poduzetnik[3]["prezime"]='Maric';
$poduzetnik[3]["datum"]='06.03.2011';
$poduzetnik[3]["placeno"]=
        '<select>
        <option value="Ne">Ne</option>
        <option value="Da">Da</option>
        </select>';
        
$poduzetnik[4]["rbr"]='4.';
$poduzetnik[4]["ime"]='Ana';
$poduzetnik[4]["prezime"]='Anic';
$poduzetnik[4]["datum"]='08.03.2011';
$poduzetnik[4]["placeno"]=
        '<select>
        <option value="Da">Da</option>
        <option value="Ne">Ne</option>
        </select>';
        
$poduzetnik[5]["rbr"]='5.';
$poduzetnik[5]["ime"]='Marko';
$poduzetnik[5]["prezime"]='Maric';
$poduzetnik[5]["datum"]='08.03.2011';
$poduzetnik[5]["placeno"]=
        '<select>
        <option value="Ne">Ne</option>
        <option value="Da">Da</option>
        </select>';

$poduzetnik[6]["rbr"]='6.';
$poduzetnik[6]["ime"]='Jure';
$poduzetnik[6]["prezime"]='Juric';
$poduzetnik[6]["datum"]='12.03.2011';
$poduzetnik[6]["placeno"]=
        '<select>
        <option value="Ne">Ne</option>
        <option value="Da">Da</option>
        </select>';

$poduzetnik[7]["rbr"]='7.';
$poduzetnik[7]["ime"]='Antoia';
$poduzetnik[7]["prezime"]='Antic';
$poduzetnik[7]["datum"]='15.03.2011';
$poduzetnik[7]["placeno"]=
        '<select>
        <option value="Da">Da</option>
        <option value="Ne">Ne</option>
        </select>';

$poduzetnik[8]["rbr"]='8.';
$poduzetnik[8]["ime"]='Zvonko';
$poduzetnik[8]["prezime"]='Zvonkic';
$poduzetnik[8]["datum"]='16.03.2011';
$poduzetnik[8]["placeno"]=
        '<select>
        <option value="Da">Da</option>
        <option value="Ne">Ne</option>
        </select>';

$poduzetnik[9]["rbr"]='9.';
$poduzetnik[9]["ime"]='Mario';
$poduzetnik[9]["prezime"]='Marijovic';
$poduzetnik[9]["datum"]='16.03.2011';
$poduzetnik[9]["placeno"]=
        '<select>
        <option value="Ne">Ne</option>
        <option value="Da">Da</option>
        </select>';

$poduzetnik[10]["rbr"]='10.';
$poduzetnik[10]["ime"]='Zlatan';
$poduzetnik[10]["prezime"]='Zlatic';
$poduzetnik[10]["datum"]='16.03.2011';
$poduzetnik[10]["placeno"]=
        '<select>
        <option value="Da">Da</option>
        <option value="Ne">Ne</option>
        </select>';


tablica_ispis($poduzetnik);

?>

        
        

