<?php


$db = "webprojet";//Nom de la base de données
$site ="localhost";
$db_id = "root"; //ID pour accéder mysql
$db_mdp ="";

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);


if($db_found)
{
    

$sql ="SELECT * 
        FROM coach";
        $res = mysqli_query($db_handle,$sql);

        while($data = mysqli_fetch_assoc($res))
        { 
            // 1 ligne de donnée
            

        echo "Nom : " . $data["Nom"] . "<br>";
        echo "Prenom : " . $data["Prenom"] . "<br>";
        echo "Bureau : " . $data["Bureau"] . "<br>";
        echo "Dispo : " . $data["Dispo"] . "<br>";
        echo "NumeroTel : " . $data["NumeroTel"] . "<br>";
        echo "Email : " . $data["Email"] . "<br>";
        echo "Sport : " . $data["Sport"] . "<br>";
        echo "<br>";

    
}

    
}

    




?>