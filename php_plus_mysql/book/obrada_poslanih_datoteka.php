<!DOCTYPE html>
<html>
<head>
<title>Obrada poslanih datoteka</title>
</head>
<body>

    <form method="POST" action="" enctype="multipart/form-data">
        Datoteka za upload:<br/>
        <input type="file" name="datoteka" value=""/><br/>
        <input type="submit" name="upload_btn" value="Upload"/>
    </form>
    
<?php
if (isset($_POST['upload_btn'])) {
            print_r($_FILES);


            $target_dir = "uploads/";
            $target_file = $target_dir .basename($_FILES["datoteka"]["name"]);
            
            if(move_uploaded_file($_FILES["datoteka"]["tmp_name"], $target_dir)){
                
            }

        }
    
    
    
    
 ?>   
    
</body>
</html>
  
   