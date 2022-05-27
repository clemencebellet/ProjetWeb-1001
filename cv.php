<?php

header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='utf-8'?>";
$db = "webprojet";//Nom de la base de données
$site ="localhost";
$db_id = "root"; //ID pour accéder mysql
$db_mdp ="";
echo"<cirv>";

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);



 //connect to BDD

 if($db_found)
 { if(isset($_POST["cvf"]))
 
    {
   
        $sql =  "SELECT * FROM coach WHERE id_coach=12"; 
        $res = mysqli_query($db_handle,$sql);
        while($data = mysqli_fetch_assoc($resinfo)) 
        
                {   echo"<cv>"; 
                    echo"<etatcivil>";
                    echo'<nom>'.$data['Nom'].'</nom>';
                    echo"</etatcivil>";
                    echo"</cv>";
                
                } 
   
    }
  

 }
 echo"</cirv>";

?>
