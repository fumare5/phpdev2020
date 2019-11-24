<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           try{
               $ime = $prezime = "";
               if ($_SERVER["REQUEST_METHOD"] == "POST"){
                   if(isset($_POST["ime"]) && isset($_POST["prezime"])){
                       $ime = $_POST["ime"];
                       $prezime = $_POST["prezime"];
                       
                       
                       $user = "root";
                       $pass = "";
                       $dbh = new PDO('mysql:host=localhost;dbname=razred', $user, $pass);
                       $dbh->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                       
                       
                       $sql = "INSERT INTO ucenici (ime, prezime) VALUES ('$ime' , '$prezime')";
                       
                       $dbh->exec ($sql);
                       echo "Uspjesno";
                   }
               }
               
           } catch (PDOException $e){
               print "Error!: " .$e->getMessage() . "<br/>";
               die();
           }
        
        ?>
        
        <h1>Upisi svoje podatke</h1>
        <form method="post" action="<?php echo htmlspecialchars($_POST["PHP_SELF"]);  ?>">
              Ime: <input type="text" name="ime">
              Prezime : <input type="text" name="prezime">
              <input type="submit" name="submit" value="submit">
                             
        </form>
    </body>
</html>