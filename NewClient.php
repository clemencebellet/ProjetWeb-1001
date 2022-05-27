<?php


$db = "webprojet";//Nom de la base de données
$site ="localhost";
$db_id = "root"; //ID pour accéder mysql
$db_mdp ="";

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);


if($db_found)
{
    $id =  rand(1, 30);
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];
    $tel = $_POST["tel"];
    $age = $_POST["age"];

    $adresse = $_POST["adresse"];
    $ville = $_POST["ville"];
    $cp = $_POST["cp"];
    $pays = $_POST["pays"];
    $ce = $_POST["ce"];
    $numcarte = $_POST["numcarte"];
    $date = $_POST["date"];
    $cvv = $_POST["cvv"];

   

    if (empty($id)  || empty($nom) || empty($prenom)||empty($email)||empty($mdp)||empty($tel)|| empty($age)|| empty($adresse) || empty($cp)|| empty($ville) || empty($pays)|| empty($ce)|| empty($numcarte)|| empty($date)|| empty($cvv))
    {
        echo '<script type="text/javascript">
        alert("Un champ est vide , reesayer ");
        location="NosServices.php";
        </script>';
    }
    else{
    
    $sql =  "INSERT INTO client(id,Nom,Prenom,Email,Mdp,Tel,Age,Adresse,Ville,CodePostal,Pays,CarteEtudiante,NumeroCarte,DateExpiration,CVV)
             VALUES('$id','$nom','$prenom','$email','$mdp','$tel','$age','$adresse','$ville','$cp','$pays','$ce','$numcarte','$date','$cvv')";
    $res = mysqli_query($db_handle,$sql);

    if($res) { 
        echo '<script type="text/javascript">
        alert("Bienvenue chez Omnes Sport!");
        location="client.php";
        </script>';
    }
    else {
        echo "Insert unsuccessful";
    }
    }
  
}


?>