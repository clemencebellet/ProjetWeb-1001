<?php

session_start();
$id_session = session_id();
$db = "webprojet";
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

                $_SESSION['id'] =$data["id"];
                $_SESSION['Nom'] =$data["Nom"];
                $_SESSION['Prenom'] =$data["Prenom"];
                $_SESSION['Adresse'] =$data["Adresse"];
                $_SESSION['Ville'] =$data["Ville"];
                $_SESSION['CodePostal'] =$data["CodePostal"];
                $_SESSION['Pays'] =$data["Pays"];
                $_SESSION['CarteEtudiante'] =$data["CarteEtudiante"];
                $_SESSION['Tel'] =$data["Tel"];
                $_SESSION['Email'] =$data["Email"];
                
            }
            elseif($data1 = mysqli_fetch_assoc($res1))
            {
                $_SESSION['Email'] =$data1["Email"];
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

                $_SESSION['Email'] =$data2["Email"];
                $_SESSION['NomCoach'] =$data2["Nom"];
                $_SESSION['idcoach'] =$data2["id_coach"];
            }
            else
            
            {echo'<script type="text/javascript">
                alert("Ratée");
                location="compte.html";
                </script>';}
    }
    elseif(isset($_POST["btnPaiement"])) {
        
        $montant= isset($_POST["montant"])? $_POST["montant"] : "";
        $Numerocarte= isset($_POST["Numerocarte"])? $_POST["Numerocarte"] : "";
        $dateexp = isset($_POST["dateexp"])? $_POST["datexp"] : "";
        $CVV = isset($_POST["CVV"])? $_POST["CVV"] : "";

        //echo $numcarte. " ". $cvv. " ". $date; 
        $sql4 ="SELECT * FROM client WHERE EXISTS ( SELECT * WHERE NumeroCarte = '$Numerocarte'  AND CVV ='$CVV')";
        $res4 = mysqli_query($db_handle,$sql4);

         ## Définitions des deux constantes
        define('ADRESSE_WEBMASTER','martinrose632@gmail.com'); // Votre adresse qui apparaitra en tant qu'expéditeur des E-mails
        define('SUJET','Paiement valide'); // Sujet commun aux deux E-mail
        
        ## Message envoyé au visiteur
        $message = "Bonjour, Vous venez de procéder au paiement de ".$montant." euros.
        \nCeci est un mail automatique, Merci de ne pas y répondre.
         \n\nL'équipe Omnes Sport";
        
        ## Second appel de la fonction mail() : le visiteur reçoit cet E-mail
        ini_set('SMTP','smtp.orange.fr'); //il faut mettre le stmp qui correspond à son serveur, le lien suivant nous le donne : http://check414.free.fr/detection-smtp/
        ini_set("sendmail_from","martinrose632@gmail.com"); //donne l'expéditeur (il faut mettre une vrai addresse mail)
        mail($_SESSION['Email'],SUJET,$message,'From: '.ADRESSE_WEBMASTER); //on envoie le mail

        if($datatest=mysqli_fetch_assoc($res4))
        {
            echo'<script type="text/javascript">
            alert("email de validation de votre paiement envoyé à '.$_SESSION['Email'] .'");
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
    elseif (isset($_POST["AnnulerRDV"])) {
        $idrdv = isset($_POST["idrdv"])? $_POST["idrdv"] : "";
        $sqlann =  "DELETE FROM  rdv
        WHERE id_rdv = $idrdv"; 
        $resann = mysqli_query($db_handle,$sqlann);

        ## Définitions des deux constantes
        define('ADRESSE_WEBMASTER','martinrose632@gmail.com'); // Votre adresse qui apparaitra en tant qu'expéditeur des E-mails
        define('SUJET','Annulation de votre rdv'); // Sujet commun aux deux E-mail

        ## Message envoyé au visiteur
        $message = "Bonjour, Veuillez noter la suppression de votre rendez-vous n°".$idrdv.
        ".\n\nN'hésitez pas à reprendre un rendez vous sur notre site.
        \nCeci est un mail automatique, Merci de ne pas y répondre.
        \n\nL'équipe Omnes Sport";

        ## Second appel de la fonction mail() : le visiteur reçoit cet E-mail
        ini_set('SMTP','smtp.orange.fr'); //il faut mettre le stmp qui correspond à son serveur, le lien suivant nous le donne : http://check414.free.fr/detection-smtp/
        ini_set("sendmail_from","martinrose632@gmail.com"); //donne l'expéditeur (il faut mettre une vrai addresse mail)
        mail($_SESSION['Email'],SUJET,$message,'From: '.ADRESSE_WEBMASTER); //on envoie le mail

        if(($resann)) { 

            echo '<script type="text/javascript">
            alert("email d annulation envoyé à '.$_SESSION['Email'] .'");
            location="rendezvous.php";
            </script>';
        }
        else {
            echo "Delete unsuccessful";
        }

    }
    
}

?>


