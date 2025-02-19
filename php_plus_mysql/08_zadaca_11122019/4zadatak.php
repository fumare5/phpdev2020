<?php
include '../mysql_proc_conn.php';
?>

<style>

    #naslov{
        display: block;
        width: 95%;
        padding: 0.9em 0;
        margin: 0.5em;
        text-align: center;
        background:  #4F7849;
        border-radius: 10pt;
        font-size: 18pt;
        color:white;
    }

    .pitanje{
        display: inline-block;
        width: 95%;
        padding: 0.9em 0;
        margin: 0.5em;
        text-align: left;
        font-weight: bolder;
        border: 1pt black dotted;
    }

    .odgovor{
        display: inline-block;
        width: 95%;
        padding: 0.9em 0;
        margin: 0.5em;
        text-align: left;
        background: lightgray;
        font-weight: normal;
    }



    .kod{
        display: inline-block;
        width: 66%;
        padding: 0.9em 0;
        margin: 0.5em;
        text-align: left;
        background:  #4F7849;
        font: italic;
    }

    .izvod{

        display: inline-block;

        width: 50%;

        padding: 0.9em 0;

        margin: 0.5em;

        text-align: left;

        background: white;

        font: italic;

    }

    .tab { margin-left: 40px; }

    table, th, td {

        border: 1px solid black;

    }
.gumb{
    float:center;
     border: 1pt black solid;
     border-radius: 10pt;
     padding: 1%;
     background-color: lightgray;
     color:#000;}

.button1 {
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 20px;
}


/* mouse over link */
a:hover {
        color: red;
    }

 table {
  font-family: "Comic Sans MS", cursive, sans-serif;
  border: 2px solid #4F7849;
  background-color: #EEEEEE;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table td, table.comicGreen th {
  border: 1px solid #4F7849;
  padding: 3px 2px;
}
table tbody td {
  font-size: 19px;
  font-weight: bold;
  color: #4F7849;
}
table tr:nth-child(even) {
  background: #CEE0CC;
}
table tfoot {
  font-size: 21px;
  font-weight: bold;
  color: #FFFFFF;
  background: #4F7849;
  background: -moz-linear-gradient(top, #7b9a76 0%, #60855b 66%, #4F7849 100%);
  background: -webkit-linear-gradient(top, #7b9a76 0%, #60855b 66%, #4F7849 100%);
  background: linear-gradient(to bottom, #7b9a76 0%, #60855b 66%, #4F7849 100%);
  border-top: 1px solid #444444;
}
table tfoot td {
  font-size: 21px;
}
</style>

<!-- Naslov -->
<html>

<div>
       <a id="vrh"></a>
<div id="naslov">
     Zadaci za ponavljanje - zadaća s predavanja od 11.12.2019.
     <button class='gumb'>
            <a href="01Uvod.php">Povratak na zadatke</a>
        </button>
</div>


     <div class="pitanje">4. Napišite program koji će iz baze fakultet dohvatiti sve studente 
        koji su rođeni u Zagrebu i ispisati njihova imena i prezimena.</div>
       
       <div class="odgovor">
   
    <?php
        $query = "SELECT stud.imeStud AS 'Ime studenta', stud.prezStud AS 'Prezime studenta', mjesto.nazMjesto AS 'Mjesto rođenja studenta'
FROM stud
INNER JOIN mjesto ON stud.pbrRod=mjesto.pbr
WHERE nazMjesto='Zagreb' order by stud.prezStud;";
        $result = mysqli_query($link, $query);
       // var_dump($result);
       
//echo '<hr>';
        mysqli_data_seek($result, 0);  // vrati me opet na početak 

              
           $naslovi_stupaca=$result->fetch_fields();
           // print_r($naslovi_stupaca);
            //echo "<hr>";
            ?>

            <table style="width:50%;">
                <thead>
                    <tr>
<?php
for ($i = 0; $i < $result->field_count; $i++) {
    echo "<th>".$naslovi_stupaca[$i]->name."</th>";
}
?>
                    </tr>
                </thead>


                
                <tbody>
                    <?php
                    //for ($i = 0; $i < $result->num_rows; $i++) {
                    mysqli_data_seek($result, 0);  // vrati me opet na početak 

                    while ($row=mysqli_fetch_array($result)){
                  
                        echo "<tr>";
                        for ($j = 0; $j < $result->field_count; $j++) {
                            echo "<td>".$row[$j]."</td>";
                        }
                        
                        echo "</tr>";
                    }
                    ?>
                </tbody>
                
                <tfoot>
                    <tr>
                    <?php
                    echo "<td>".$naslovi_stupaca[0]->db.".".$naslovi_stupaca[0]->table."</td>";
                    printf("<td colspan=%d>Ukupno: %d</td>"
                        ,$result->field_count-1
                        ,$result->num_rows);
                    
                        
                    
                    ?>
                    </tr>
                </tfoot>
                
            </table>




        </div>
        <br><br>             
        <button class='gumb'>
            <a href="01Uvod.php">Povratak na zadatke</a>
        </button>
           
    </div>
      
    
