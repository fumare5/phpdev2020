<?php

/* 
 * 1. Napisi program koji cita sadrzaj iz neke datoteke
 */

echo 'Riješenje za zadatak 8.5.1'; 
echo "<br>";
echo "<br>";

echo 'Popis ucenika A razreda';
echo "<br>";
echo "<br>";

$filename = 'ucenici_a_razreda.txt';
$datoteka = file($filename);

foreach ($datoteka as $br_linije => $linija) {
    echo 'Redni broj učenika <br>'.$br_linije.'</b> : '.$linija.'<br/>';
    
}

echo "<hr>";
echo "<br>";

/* 
 * 2. Pripremite obrazac (formu) u koji korisnik upisuje neki tekst i nakon predavanja 
 * (engl. submit) podatak tog obrasca zapisite tekst u neku datoteku.
 * Ako datoteka ne postoji, napravite ju.
 */

echo 'Riješenje za zadatak 8.5.2'; 
echo "<br>";
echo "<br>";


echo'
<form method="POST"action="">
 Upiši željeni tekst:<input type="text" name="txt"value=""/><br/>
 <input type="submit" name="btn"value="Spremi"/>
</form>';

if(isset($_POST["btn"]))
{
    $filename='obrazac.txt';
    
    $handle = fopen($filename, 'a+');
    
    fwrite($handle, $_POST["txt"]);
    
    fclose($handle);
}

echo "<hr>";
echo "<br>";

/* 
 * 3. Napisite program preko kojeg korisnik dohvaca sadrzaj neke tekstualne datoteke,
 * ureduje ga i ponovno sprema u istu datoteku.
 */

echo 'Riješenje za zadatak 8.5.3'; 
echo "<br>";
echo "<br>";

$filename ='radna_datoteka.txt';

$datoteka = file($filename);

foreach ($datoteka as $line_num => $line) 
{
    echo $line."\n";
}
       
 echo'
<form method="POST"action="">
 Upiši željeni tekst:
<textarea name="txt">




</textarea>
 <br/>
 <input type="submit"name="btn"value="Spremi"/>
</form>';

if(isset($_POST["btn"]))
{
$handle = fopen($filename, 'a+');
    
    fwrite($handle, $_POST["txt"]);
    
    fclose($handle);
}


?>