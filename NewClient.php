<?php


$db = "webprojet";//Nom de la base de données
$site ="localhost";
$db_id = "root"; //ID pour accéder mysql
$db_mdp ="root";

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);


if($db_found)
{
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];
    $tel = $_POST["tel"];
    $age = $_POST["age"];

    if (empty($id)  || empty($nom) || empty($prenom)||empty($email)||empty($mdp)||empty($tel)|| empty($age))
    {
        echo '<script type="text/javascript">
        alert("Un champ est vide , reesayer ");
        location="NosServices.html";
        </script>';
    }
    else{
    
    $sql =  "INSERT INTO client(id,Nom,Prenom,Email,Mdp,Tel,Age)
             VALUES('$id','$nom','$prenom','$email','$mdp','$tel','$age')";
    $res = mysqli_query($db_handle,$sql);

    if($res) { 
        echo '<script type="text/javascript">
        alert("Bienvenue chez Omnes Sport!");
        location="client.html";
        </script>';
    }
    else {
        echo "Insert unsuccessful";
    }
    }
  
}


?>