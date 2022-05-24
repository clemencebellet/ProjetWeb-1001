<?php

$db = "webprojetBDD2";//Nom de la base de données
$site ="localhost";
$db_id = "root"; //ID pour accéder mysql
$db_mdp =""; //pour mac

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);


if($db_found)
{
    
if (isset($_POST["musculation"]))
{

    $sql = "SELECT * FROM coach WHERE Sport = 7";
    $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=7";
    $res = mysqli_query($db_handle,$sql);
    $res2 = mysqli_query($db_handle,$sql2);

    echo "Voici notre coach référent". "<br>";
    
    while($data = mysqli_fetch_assoc($res))
    { 
      
        echo "Prenom : " . $data["Prenom"] . "<br>";
        echo "Nom : " . $data["Nom"] . "<br>";
        echo "Bureau : " . $data["Bureau"] . "<br>";
        echo "Numero : " . $data["NumeroTel"] . "<br>";
    
        
    }
    echo "Vous souhaitez prendre un rendez-vous avec lui ? ". "<br>";
    echo "Cliquez sur la disponibilité qui vous interesse ". "<br>";
   
    while($data = mysqli_fetch_assoc($res2))
    { 
        echo'<a href="accueil.html" > ICI  </a>';
        echo " " . $data["date_heure"] . "<br>";
        
        
    }
   


}

else if (isset($_POST["fitness"]))
{

    $sql = "SELECT * FROM coach WHERE Sport = 8";
    $res = mysqli_query($db_handle,$sql);
    $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=8";
    $res2 = mysqli_query($db_handle,$sql2);


    echo "Voici notre coach référent". "<br>";

    while($data = mysqli_fetch_assoc($res))
    { 
        echo "notre coach référent". "<br>";
        echo "Prenom : " . $data["Prenom"] . "<br>";
        echo "Nom : " . $data["Nom"] . "<br>";
        echo "Bureau : " . $data["Bureau"] . "<br>";
        echo "Numero : " . $data["NumeroTel"] . "<br>";
        echo "Disponibilité : " . $data["Dispo"] . "<br>";
        
    }
    echo "Vous souhaitez prendre un rendez-vous avec lui ? ". "<br>";
    echo "Cliquez sur la disponibilité qui vous interesse ". "<br>";
   
    while($data = mysqli_fetch_assoc($res2))
    { 
        echo'<a href="accueil.html" > ICI  </a>';
        echo " " . $data["date_heure"] . "<br>";
        
        
    }


}
else if (isset($_POST["biking"]))
{

    $sql = "SELECT * FROM coach WHERE Sport = 9";
    $res = mysqli_query($db_handle,$sql);
    $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=9";
    $res2 = mysqli_query($db_handle,$sql2);

    echo "Voici notre coach référent". "<br>";

    while($data = mysqli_fetch_assoc($res))
    { 
        echo "Prenom : " . $data["Prenom"] . "<br>";
        echo "Nom : " . $data["Nom"] . "<br>";
        echo "Bureau : " . $data["Bureau"] . "<br>";
        echo "Numero : " . $data["NumeroTel"] . "<br>";
        echo "Disponibilité : " . $data["Dispo"] . "<br>";
        
    }
    echo "Vous souhaitez prendre un rendez-vous avec lui ? ". "<br>";
    echo "Cliquez sur la disponibilité qui vous interesse ". "<br>";
   
    while($data = mysqli_fetch_assoc($res2))
    { 
        echo'<a href="accueil.html" > ICI  </a>';
        echo " " . $data["date_heure"] . "<br>";
        
        
    }


}
else if (isset($_POST["cardio"]))
{

    $sql = "SELECT * FROM coach WHERE Sport = 10";
    $res = mysqli_query($db_handle,$sql);
    $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=10";
    $res2 = mysqli_query($db_handle,$sql2);

    echo "Voici notre coach référent". "<br>";

    while($data = mysqli_fetch_assoc($res))
    { 
        echo "notre coach référent". "<br>";
        echo "Prenom : " . $data["Prenom"] . "<br>";
        echo "Nom : " . $data["Nom"] . "<br>";
        echo "Bureau : " . $data["Bureau"] . "<br>";
        echo "Numero : " . $data["NumeroTel"] . "<br>";
        echo "Disponibilité : " . $data["Dispo"] . "<br>";
        
    }
    echo "Vous souhaitez prendre un rendez-vous avec lui ? ". "<br>";
    echo "Cliquez sur la disponibilité qui vous interesse ". "<br>";
   
    while($data = mysqli_fetch_assoc($res2))
    { 
        echo'<a href="accueil.html" > ICI  </a>';
        echo " " . $data["date_heure"] . "<br>";
        
        
    }


}
else if (isset($_POST["coursCO"]))
{

    $sql = "SELECT * FROM coach WHERE Sport = 11";
    $res = mysqli_query($db_handle,$sql);
    $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=11";
    $res2 = mysqli_query($db_handle,$sql2);

    echo "Voici notre coach référent". "<br>";

    while($data = mysqli_fetch_assoc($res))
    { 
        echo "notre coach référent". "<br>";
        echo "Prenom : " . $data["Prenom"] . "<br>";
        echo "Nom : " . $data["Nom"] . "<br>";
        echo "Bureau : " . $data["Bureau"] . "<br>";
        echo "Numero : " . $data["NumeroTel"] . "<br>";
        echo "Disponibilité : " . $data["Dispo"] . "<br>";
        
    }
    echo "Vous souhaitez prendre un rendez-vous avec lui ? ". "<br>";
    echo "Cliquez sur la disponibilité qui vous interesse ". "<br>";
   
    while($data = mysqli_fetch_assoc($res2))
    { 
        echo'<a href="accueil.html" > ICI  </a>';
        echo " " . $data["date_heure"] . "<br>";
        
        
    }


}



 }

?>
