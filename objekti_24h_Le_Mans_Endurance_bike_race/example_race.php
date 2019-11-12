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

$crew_name1= "WOJCIK RACING TEAM";
$crew_name2= "TEAM ERC ENDURANCE";
$crew_name3= "HRT 100 - HERTRAMPF RACING ENDURANCE";
$crew_name4= "MOTOBOX KREMER RACING";
$crew_name5= "F.C.C. TSR HONDA FRANCE";
$crew_name6= "YART YAMAHA";
$crew_name7= "WEBIKE SRC KAWASAKI FRANCE";
$crew_name8= "SUZUKI ENDURANCE RACING TEAM";
        

$race= new Race($crew1, $crew2, $crew3, $crew4, $crew5, $crew6, $crew7, $crew8);
$race->drive (new DateTime("now"));




echo "<strong>24 Heures Motos 2019 - FIM EWC</strong>";
echo "<h3>";
//ispis odveženih krugova u 24h
echo "<table  border='1' width='400'>";
echo "<tr><th>No.</th><th>Team :</th><th>No. of laps in 24 hours:</th></tr>";
echo "<tr><td> 1 </td><td> $crew_name1 </td><td> ".$race->no_laps1()," </td>";
echo "<tr><td> 2 </td><td> $crew_name2 </td><td> ".$race->no_laps2()," </td>";
echo "<tr><td> 3 </td><td> $crew_name3 </td><td> ".$race->no_laps3()," </td>";
echo "<tr><td> 4 </td><td> $crew_name4 </td><td> ".$race->no_laps4()," </td>";
echo "<tr><td> 5 </td><td> $crew_name5 </td><td> ".$race->no_laps5()," </td>";
echo "<tr><td> 6 </td><td> $crew_name6 </td><td> ".$race->no_laps6()," </td>";
echo "<tr><td> 7 </td><td> $crew_name7 </td><td> ".$race->no_laps7()," </td>";
echo "<tr><td> 8 </td><td> $crew_name8 </td><td> ".$race->no_laps8()," </td></tr>";




