<?php


session_start();
$id_session = session_id();
$db = "webprojet";//Nom de la base de données
$site ="localhost";
$db_id = "root"; //ID pour accéder mysql
$db_mdp =""; //pour mac

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);



if($db_found)
{   
    if (isset($_POST["coach1"]))
    {
        $sql = "SELECT * FROM coach, dispo WHERE id_coach=id_pro and jour='lundi' and creneau='matin' and sport='7'";
        $sql2 ="SELECT * FROM client WHERE EXISTS ( SELECT * WHERE Email = '$Email' AND Mdp ='$Mdp' )";
        $res = mysqli_query($db_handle,$sql);
        $res2 = mysqli_query($db_handle,$sql2);
        
        while($data = mysqli_fetch_assoc($res) && $data2 = mysqli_fetch_assoc($res2) )
        {
            echo"tout est ok pd";
        }

        if($res == 0) 
        {

            echo "Rendez-vous impossible"; 
        }

   

    }



 }  

?>

<style type="text/css">
.affichagecoach{ 
    
    text-align: center ;
    font-size : 80px;

 }
.img{
    float : left;
    position: relative;
    top : 100px;
    padding-left: 10 px ;
    text-align: center ;
    

}

.affichagenom{ 
    
    position: relative;
    top : 80px;
    left : 110px;
    font-size :25px;
    
 }

 .affichagedispoT{ 
    
    position: relative;
    top : 160px;
    left : 110px;
    font-size :20px;
    
 }

 .affichagedispo{ 
    
    position: relative;
    top : 170px;
    left : 110px;
    font-size :20px;
    
 }
 
 
</style>
