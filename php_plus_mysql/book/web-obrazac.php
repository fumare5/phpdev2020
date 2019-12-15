<!DOCTYPE html>
<html>
<head>
<title>Web obrazac - POST</title>
</head>
<body>

    <form method="POST" action="">
        Ime:<br/><input type="text"  name="ime" value=""/><br/>
        Prezime:<br/><input type="text"  name="prezime" value=""/><br/>
        <br/>
        Spol:<br/>
        Muškarac<input type="radio" name="spol" value="M" checked="true"><br>
        Žena<input type="radio" name="spol" value="Ž"><br>
        <br/>
        Županija:<br/>
        <select name="zupanija">
            <option value="1">Zagrebačka županija</option>
            <option value="2">Krapinsko-zagorska županija</option>
            <option value="3">Sisačko-moslavačka županija</option>
            <option value="4">Karlovačka županija</option>
            <option value="5">Varaždinska županija</option>
            <option value="6">Koprivničko-križevačka županija</option>
            <option value="7">Bjelovarsko-bilogorska županija</option>
            <option value="8">Primorsko-goranska županija</option>
            <option value="9">Ličko-senjska županija</option>
            <option value="10">Virovitičko-podravska županija</option>
            <option value="11">Požeško-slavonska županija</option>
            <option value="12">Brodsko-posavska županija</option>
            <option value="13">Zadarska županija</option>
            <option value="14">Osječko-baranjska županija</option>
            <option value="15">Šibensko-kninska županija</option>
            <option value="16">Vukovarsko-srijemska županija</option>
            <option value="17">Splitsko-dalmatinska županija</option>
            <option value="18">Istarska županija</option>
            <option value="19">Dubrovačko-neretvanska županija</option>
            <option value="20">Međimurska županija</option>
            <option value="21">Grad Zagreb</option>
        </select>
        <br/>
        <br/>
        Interesi:<br/>
        <input type="checkbox" name="interesi[]" value="1" <?=(isset($_POST['interesi'][0])&& $_POST['interesi'][0]==1)?'checked':'' ?>> sport<br>
        <input type="checkbox" name="interesi[]" value="2"<?=(isset($_POST['interesi'][1])&& $_POST['interesi'][1]==2)?'checked':'' ?>> muzika<br> 
        <input type="checkbox" name="interesi[]" value="3"<?=(isset($_POST['interesi'][2])&& $_POST['interesi'][2]==3)?'checked':'' ?>> racunala<br>
        <input type="checkbox" name="interesi[]" value="4"<?=(isset($_POST['interesi'][3])&& $_POST['interesi'][3]==4)?'checked':'' ?>> automobili<br>
        <br/>
        Omiljena_boja:
        <input type="color" name="omiljena_boja" value="<?=$_POST['omiljena_boja']?>">
        <br/>
        Napomene:<br/>
        <textarea name="napomena" cols="50"></textarea>
        <br/>
        <br/>
        <input type="submit" name="submit_btn" value="Obrada"/>
    </form>
    
    <div>
            <?php
            if(isset($_POST['submit_btn'])){
              echo "<h3>Primljeni podaci:</h3>";  
              echo "<pre>";
              print_r($_POST);
              echo "</pre>";
              switch ($_POST['spol']) {
                  case 'M':$spol='Muški';break;
                  default:$spol='Ženski';break;
                      break;
              }
              
              $interesi="<ol>";
              if(isset($_POST['interesi'])){
              foreach ($_POST['interesi'] as $i){
                  switch ($i) {
                      case 1: $interesi.='<li>Sport</li>'; break;
                      case 2: $interesi.='<li>Muzika</li>'; break;
                      case 3: $interesi.='<li>Računala</li>'; break;   
                      case 4: $interesi.='<li>Automobili</li>'; break; 
                  }
              
              }}
              $interesi.="</ol>";
              
              printf("Ime:<span style='color:%s'> %s %s</span><br> Spol: %s<br>"
                   ,$_POST['omiljena_boja']
                      ,$_POST['ime']
                      ,$_POST['prezime']
                      ,$spol
                      );
               printf("Interesi:<span style='color:blue'> %s</span><br>"
                                    ,$interesi);
               printf("Napomena:<span style='color:blue'> %s</span><br>"
                                    ,$_POST['napomena']);
                 
              
            }
            
            ?>
           
            
    </div>
  
   
    
    
    
    
    
    
    
    
    
</body>
</html>