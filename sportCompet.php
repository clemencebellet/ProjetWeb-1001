<?php

session_start();
$id_session = session_id();
$db = "webprojet";
$site ="localhost";
$db_id = "root"; 
$db_mdp ="";

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);

if($db_found)
{
    if(isset($_POST["Basket"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =1 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);

       

        if($data = mysqli_fetch_assoc($resbasket)) 
        {
            echo $data["Nom"];
            echo $data["Prenom"];
            echo $data["Dispo"];


        }
    }
    

    else if(isset($_POST["Football"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =2 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);

        if($data = mysqli_fetch_assoc($resbasket)) 
        {
            echo $data["Nom"];
            echo $data["Prenom"];
            echo $data["Dispo"];


        }
    }

    else if(isset($_POST["Rugby"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =3 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);

        if($data = mysqli_fetch_assoc($resbasket)) 
        {
            echo $data["Nom"];
            echo $data["Prenom"];
            echo $data["Dispo"];


        }
    }
    else if(isset($_POST["Tennis"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =4 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);

        


        if($data = mysqli_fetch_assoc($resbasket)) 
        {
            echo $data["Nom"];
            echo $data["Prenom"];
            echo $data["Dispo"];


        }
    }
    else if(isset($_POST["Natation"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =5 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);

        if($data = mysqli_fetch_assoc($resbasket)) 
        {
            echo $data["Nom"];
            echo $data["Prenom"];
            echo $data["Dispo"];


        }
    }
    else if(isset($_POST["Plongeon"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =6 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);

        if($data = mysqli_fetch_assoc($resbasket)) 
        {
            echo $data["Nom"];
            echo " ";
            echo $data["Prenom"];
            echo $data["Dispo"];


        }
    }
}

?>
