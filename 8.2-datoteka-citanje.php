<?php

/* 
 * citanje datoteke
 */
$filename="ucenici.txt";

$handle= fopen($filename, 'a+');
$contents= fread($handle, filesize($filename));
fclose($handle);

echo $contents;

?>

<?php

$filename="ucenici.txt";

$datoteka = file($filename);

foreach ($datoteka as $line_num => $line) {
    echo 'Linija #<br>'.$line_num.'</b> :'.$line.'<br/>';
}
?>