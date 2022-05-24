<?php

$db = "webprojetBDD2";//Nom de la base de données
$site ="localhost";
$db_id = "root"; //ID pour accéder mysql
$db_mdp ="root"; //pour mac

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);

$nom=$_POST["Nom"];
$prenom=$_POST["Prenom"];
$numero=$_POST["Numero"];
$bureau=$_POST["Bureau"];
$dispo=$_POST["Dispo"];

if($db_found)
{
    
if (isset($_POST["musculation"]))
{

    $sql = "SELECT Nom, Prenom,Bureau,NumeroTel,Dispo FROM coach WHERE Sport = '7'";
    $res = mysqli_query($db_handle,$sql);

    while($data = mysqli_fetch_assoc($res))
    { 
        echo "notre coach référent". "<br>";
        echo "Prenom : " . $data["Prenom"] . "<br>";
        echo "Nom : " . $data["Nom"] . "<br>";
        echo "Bureau : " . $data["Bureau"] . "<br>";
        echo "Numero : " . $data["NumeroTel"] . "<br>";
        echo "Disponibilité : " . $data["Dispo"] . "<br>";
        
    }


}

else if (isset($_POST["fitness"]))
{

    $sql = "SELECT Nom, Prenom,Bureau,NumeroTel,Dispo FROM coach WHERE Sport = '8'";
    $res = mysqli_query($db_handle,$sql);

    while($data = mysqli_fetch_assoc($res))
    { 
        echo "notre coach référent". "<br>";
        echo "Prenom : " . $data["Prenom"] . "<br>";
        echo "Nom : " . $data["Nom"] . "<br>";
        echo "Bureau : " . $data["Bureau"] . "<br>";
        echo "Numero : " . $data["NumeroTel"] . "<br>";
        echo "Disponibilité : " . $data["Dispo"] . "<br>";
        
    }


}
else if (isset($_POST["biking"]))
{

    $sql = "SELECT Nom, Prenom,Bureau,NumeroTel,Dispo FROM coach WHERE Sport = '9'";
    $res = mysqli_query($db_handle,$sql);

    while($data = mysqli_fetch_assoc($res))
    { 
        echo "notre coach référent". "<br>";
        echo "Prenom : " . $data["Prenom"] . "<br>";
        echo "Nom : " . $data["Nom"] . "<br>";
        echo "Bureau : " . $data["Bureau"] . "<br>";
        echo "Numero : " . $data["NumeroTel"] . "<br>";
        echo "Disponibilité : " . $data["Dispo"] . "<br>";
        
    }


}
else if (isset($_POST["cardio"]))
{

    $sql = "SELECT Nom, Prenom,Bureau,NumeroTel,Dispo FROM coach WHERE Sport = '10'";
    $res = mysqli_query($db_handle,$sql);

    while($data = mysqli_fetch_assoc($res))
    { 
        echo "notre coach référent". "<br>";
        echo "Prenom : " . $data["Prenom"] . "<br>";
        echo "Nom : " . $data["Nom"] . "<br>";
        echo "Bureau : " . $data["Bureau"] . "<br>";
        echo "Numero : " . $data["NumeroTel"] . "<br>";
        echo "Disponibilité : " . $data["Dispo"] . "<br>";
        
    }


}
else if (isset($_POST["coursCO"]))
{

    $sql = "SELECT Nom, Prenom,Bureau,NumeroTel,Dispo FROM coach WHERE Sport = '11'";
    $res = mysqli_query($db_handle,$sql);

    while($data = mysqli_fetch_assoc($res))
    { 
        echo "notre coach référent". "<br>";
        echo "Prenom : " . $data["Prenom"] . "<br>";
        echo "Nom : " . $data["Nom"] . "<br>";
        echo "Bureau : " . $data["Bureau"] . "<br>";
        echo "Numero : " . $data["NumeroTel"] . "<br>";
        echo "Disponibilité : " . $data["Dispo"] . "<br>";
        
    }


}



 }

?>
