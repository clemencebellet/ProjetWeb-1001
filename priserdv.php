<?php


session_start();
$id_session = session_id();
$db = "webprojet";//Nom de la base de données
$site ="localhost";
$db_id = "root"; //ID pour accéder mysql
$db_mdp =""; //pour mac

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);

$Email = isset($_POST["Email"])? $_POST["Email"] : "";
$Mdp = isset($_POST["Mdp"])? $_POST["Mdp"] : "";

$_SESSION['EmailCompte'] =$Email;
$_SESSION['MdpCompte'] =$Mdp;


if($db_found)
{   
    if (isset($_POST["Connexion"]))
    {
        $sql = "SELECT * FROM coach, dispo WHERE id_coach=id_pro and jour='lundi' and creneau='matin' and sport='7'";
        $sql2 ="SELECT * FROM client WHERE EXISTS ( SELECT * WHERE Email = '$Email' AND Mdp ='$Mdp' )";
        $res = mysqli_query($db_handle,$sql);
        $res2 = mysqli_query($db_handle,$sql2);
        
        if($data = mysqli_fetch_assoc($res) && $data2 = mysqli_fetch_assoc($res2) )
        {

            $id_coach=$data["id_coach"];
            $id_client=$data2["id"];
            echo $id_coach;
            $sql3= "INSERT INTO rdv (heure,client_id, coach_id,jour,date,adresse,doc,dogicode)
                    VALUES('10:30:00','2','2','lundi','13 avril','23 rue du loup','ordonnace','12B')";
            $res3 = mysqli_query($db_handle,$sql3);
            echo"tout est ok pd";
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
