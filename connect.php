<?php

session_start();
$id_session = session_id();
$db = "webprojetBDD2";
$site ="localhost";
$db_id = "root"; 
$db_mdp ="";

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);

$Email = isset($_POST["Email"])? $_POST["Email"] : "";
$Mdp = isset($_POST["Mdp"])? $_POST["Mdp"] : "";

$_SESSION['EmailCompte'] =$Email;
$_SESSION['MdpCompte'] =$Mdp;



if($db_found)
{
    if(isset($_POST["Connexion"])) {

        $sql ="SELECT * FROM client WHERE EXISTS ( SELECT * WHERE Email = '$Email' AND Mdp ='$Mdp' )";
        $sql1 ="SELECT * FROM administrateur WHERE EXISTS ( SELECT * WHERE Email = '$Email' AND Mdp ='$Mdp' )";
        $sql2 ="SELECT * FROM coach WHERE EXISTS ( SELECT * WHERE Email = '$Email' AND Mdp ='$Mdp' )";

        $res = mysqli_query($db_handle,$sql);
        $res1 = mysqli_query($db_handle,$sql1);
        $res2 = mysqli_query($db_handle,$sql2);

            if($data = mysqli_fetch_assoc($res)) 
            {
                echo'<script type="text/javascript">
                alert("Authetification réussie' .$Email .'");
                location="client.php";
                </script>';

                $_SESSION['Nom'] =$data["Nom"];
                $_SESSION['Prenom'] =$data["Prenom"];
                $_SESSION['Adresse'] =$data["Adresse"];
                $_SESSION['Ville'] =$data["Ville"];
                $_SESSION['CodePostal'] =$data["CodePostal"];
                $_SESSION['Pays'] =$data["Pays"];
                $_SESSION['CarteEtudiante'] =$data["CarteEtudiante"];
                $_SESSION['Tel'] =$data["Tel"];
                
            }
            elseif($data1 = mysqli_fetch_assoc($res1))
            {
                echo'<script type="text/javascript">
                alert("Authentification réussie");
                location="admin.html";
                </script>';
            }
            elseif($data2 = mysqli_fetch_assoc($res2))
            {
                echo'<script type="text/javascript">
                alert("Authentification réussie");
                location="coach.html";
                </script>';
            }
            else
            
            {echo'<script type="text/javascript">
                alert("Ratée");
                location="compte.html";
                </script>';}
    }
    elseif(isset($_POST["btnPaiement"])) {
        
        $Numerocarte= isset($_POST["Numerocarte"])? $_POST["Numerocarte"] : "";
        $dateexp = isset($_POST["dateexp"])? $_POST["datexp"] : "";
        $CVV = isset($_POST["CVV"])? $_POST["CVV"] : "";

        //echo $numcarte. " ". $cvv. " ". $date; 
        $sql4 ="SELECT * FROM client WHERE EXISTS ( SELECT * WHERE NumeroCarte = '$Numerocarte'  AND CVV ='$CVV')";
        $res4 = mysqli_query($db_handle,$sql4);

        if($datatest=mysqli_fetch_assoc($res4))
        {
            echo'<script type="text/javascript">
            alert("Paiement validé");
            location="client.php";
            </script>';
        }
        else
        {
            echo'<script type="text/javascript">
            alert("Paiement refusé");
            location="client.php";
            </script>';
        }
   
    }
    
}

?>


