<?php

require_once './Crew.php';
require_once './Race.php';
require_once './Rang_list.php';

$crew1=new Crew("Aprilia");
$crew2=new Crew("BMW");
$crew3=new Crew("Ducati");
$crew4=new Crew("KTM");
$crew5=new Crew("Honda");
$crew6=new Crew("Yamaha");
$crew7=new Crew("Kawasaki");
$crew8=new Crew("Suzuki");


$race= new Race($crew1, $crew2, $crew3, $crew4, $crew5, $crew6, $crew7, $crew8);
$race->drive (new DateTime("now"));

$rang=new Rang_list();
$rang->add ($race);
$rang->ispisi_tablicu();
        






echo "Team Aprilia drove ".$race->no_laps1()," laps in 24 hours","<br>";

echo "Team BMW drove ".$race->no_laps2()," laps in 24 hours","<br>";

echo "Team Ducati drove ".$race->no_laps3()," laps in 24 hours","<br>";

echo "Team KTM drove ".$race->no_laps4()," laps in 24 hours","<br>";

echo "Team Honda drove ".$race->no_laps5()," laps in 24 hours","<br>";

echo "Team Yamaha drove ".$race->no_laps6()," laps in 24 hours","<br>";

echo "Team Kawasaki drove ".$race->no_laps7()," laps in 24 hours","<br>";

echo "Team Suzuki drove ".$race->no_laps8()," laps in 24 hours","<br>";

