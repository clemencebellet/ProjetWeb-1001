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
$info = isset($_POST["info"])? $_POST["info"] : "";

$_SESSION['EmailCompte'] =$Email;
$_SESSION['MdpCompte'] =$Mdp;
$_SESSION['info'] =$info;






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
                alert("Authentification réussie ' .$Email .'");
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
                location="admin.php";
                </script>';
            }
            elseif($data2 = mysqli_fetch_assoc($res2))
            {
                echo'<script type="text/javascript">
                alert("Authentification réussie");
                location="coach.php";
                </script>';
                
                $_SESSION['idcoach'] =$data2["id_coach"];
                $_SESSION['NomCoach'] =$data2["Nom"];
                $_SESSION['Email'] =$data2["Email"];
                
            }
            else
            
            {echo'<script type="text/javascript">
                alert("Ratée");
                location="compte.html";
                </script>';}
    }

    else if(isset($_POST["ValRDV"])) {
        

        $mail = isset($_POST["Email"])? $_POST["Email"] : "";
        $mdp = isset($_POST["Mdp"])? $_POST["Mdp"] : "";
        $date = isset($_POST["date"])? $_POST["date"] : "";
    
        $id_rdv = rand(1, 30);
        
        if (empty($_POST["doc"]))
        {
            $doc = "Aucun";
        }
        else {
            $doc = "images/".$_POST["doc"];
        }
        
        $idcoach=$_SESSION['idcoach'];
        $sql1 ="SELECT * FROM dispo WHERE EXISTS ( SELECT * WHERE date = '$date'  )";
        $sql ="SELECT * FROM client WHERE EXISTS ( SELECT * WHERE Email = '$Email' AND Mdp ='$Mdp' )";
        $res1 = mysqli_query($db_handle,$sql1);
        $res = mysqli_query($db_handle,$sql);
        $sql2 ="SELECT * FROM coach WHERE id_coach = '$idcoach'  ";
        $res2 = mysqli_query($db_handle,$sql2);

        while($data1 = mysqli_fetch_assoc($res1)) 
        {
            $jour=$data1["jour"] ;
            $creneau=$data1["creneau"] ;
        }
        
        while($data = mysqli_fetch_assoc($res)) 
        {
            $idclient=$data["id"];
        }
        while($data2 = mysqli_fetch_assoc($res2)) 
        {
            $bureau = $data2["Bureau"];
        }
        
       $sqlrdv =  "INSERT INTO rdv(id_rdv,heure,client_id,coach_id,jour,daterdv,adresse,doc,dogicode,bool_rdv)
        VALUES('$id_rdv','$creneau','$idclient','$idcoach','$jour','$date','$bureau','$doc','32B','1')";
        $resrdv = mysqli_query($db_handle,$sqlrdv);
        $sqlsupr =  "DELETE FROM dispo WHERE date
         = '$date'"; 

         ## Définitions des deux constantes
         define('ADRESSE_WEBMASTER','martinrose632@gmail.com'); // Votre adresse qui apparaitra en tant qu'expéditeur des E-mails
         define('SUJET','Confirmation de votre rendez-vous'); // Sujet commun aux deux E-mail
         
         ## Message envoyé au visiteur
         $message = "Bonjour,\n Ceci est un mail de confirmation pour votre rendez-vous n°.".$id_rdv."
         RDV le ". $jour . " ". $date. " le " .$creneau. 
         "\nLieu : " .$bureau . " Docs à amener : " .$doc ."       
        \n\nCeci est un mail automatique, Merci de ne pas y répondre.
          \nL'équipe Omnes Sport";
         
         ## Second appel de la fonction mail() : le visiteur reçoit cet E-mail
         ini_set('SMTP','smtp.orange.fr'); //il faut mettre le stmp qui correspond à son serveur, le lien suivant nous le donne : http://check414.free.fr/detection-smtp/
         ini_set("sendmail_from","martinrose632@gmail.com"); //donne l'expéditeur (il faut mettre une vrai addresse mail)
         mail($mail,SUJET,$message,'From: '.ADRESSE_WEBMASTER); //on envoie le mail

        if($resrdv) { 

            echo'<script type="text/javascript">
            alert("email de validation du rendez-vous envoyé à '.$mail .'");
            location="accueil.html";
            </script>';
            $ressupr = mysqli_query($db_handle,$sqlsupr);
          
        }
        else {
            echo "Insert unsuccessful";
        }   
            
                
    }

    else if(isset($_POST["ValRDVSalle"])) {
        

        $mail = isset($_POST["Email"])? $_POST["Email"] : "";
        $mdp = isset($_POST["Mdp"])? $_POST["Mdp"] : "";
        $date= isset($_POST["date"])? $_POST["date"] : "";
    
        $id_rdv = rand(1, 30);
        
        if (empty($_POST["doc"]))
        {
            $doc = "Aucun";
        }
        else {
            $doc = "images/".$_POST["doc"];
        }
        
        $idcoach=15;
        $sql1 ="SELECT * FROM disposalle WHERE EXISTS ( SELECT * WHERE date = '$date'  )";
        $sql ="SELECT * FROM client WHERE EXISTS ( SELECT * WHERE Email = '$Email' AND Mdp ='$Mdp' )";
        $res1 = mysqli_query($db_handle,$sql1);
        $res = mysqli_query($db_handle,$sql);
        $sql2 ="SELECT * FROM coach WHERE id_coach = 15  ";
        $res2 = mysqli_query($db_handle,$sql2);

        while($data1 = mysqli_fetch_assoc($res1)) 
        {
            $jour=$data1["jour"] ;
            $creneau=$data1["creneau"] ;
            
        }
        
        while($data = mysqli_fetch_assoc($res)) 
        {
            $idclient=$data["id"];
        }
        while($data2 = mysqli_fetch_assoc($res2)) 
        {
            $idcoach = $data2["id_coach"];
            $bureau = $data2["Bureau"];
        }
                
        $sqlrdv =  "INSERT INTO rdv(id_rdv,heure,client_id,coach_id,jour,daterdv,adresse,doc,dogicode,bool_rdv)
        VALUES('$id_rdv','$creneau','$idclient','$idcoach','$jour','$date','$bureau','$doc','32B','1')";
        $resrdv = mysqli_query($db_handle,$sqlrdv);
        $sqlsupr =  "DELETE FROM disposalle WHERE date = '$date'"; 

         ## Définitions des deux constantes
         define('ADRESSE_WEBMASTER','martinrose632@gmail.com'); // Votre adresse qui apparaitra en tant qu'expéditeur des E-mails
         define('SUJET','Confirmation visite salle de sport OMNES'); // Sujet commun aux deux E-mail
         
         ## Message envoyé au visiteur
         $message = "Bonjour,\n Ceci est un mail confirmant la visite de notre salle de sport 
         prévue le ". $jour . " ". $date. " le " .$creneau. 
         "\nLieu : " .$bureau . " Docs à amener : " .$doc ."       
        \n\nCeci est un mail automatique, Merci de ne pas y répondre.
          \nL'équipe Omnes Sport";
         
         ## Second appel de la fonction mail() : le visiteur reçoit cet E-mail
         ini_set('SMTP','smtp.orange.fr'); //il faut mettre le stmp qui correspond à son serveur, le lien suivant nous le donne : http://check414.free.fr/detection-smtp/
         ini_set("sendmail_from","martinrose632@gmail.com"); //donne l'expéditeur (il faut mettre une vrai addresse mail)
         mail($_SESSION['Email'],SUJET,$message,'From: '.ADRESSE_WEBMASTER); //on envoie le mail


        if($resrdv) { 
            echo '<script type="text/javascript">
            alert("Nouveau Rendez-vous ajouté !");
            location="accueil.html";
            </script>';
            $ressupr = mysqli_query($db_handle,$sqlsupr);
          
        }
        else {
            echo "Insert unsuccessful";
        }
        
    
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
        $sqlann =  "UPDATE rdv 
        SET bool_rdv = '0' 
        WHERE rdv.id_rdv =$idrdv AND "; 
        $resann = mysqli_query($db_handle,$sqlann); 

        //verif rdv avec id 
        $sqlc ="SELECT * FROM rdv WHERE EXISTS ( SELECT * WHERE id_rdv = '$idrdv')";
        $resc = mysqli_query($db_handle,$sqlc);

       if($data = mysqli_fetch_assoc($resc)) 
        {
            echo $j=$data["jour"] ;
            echo $cren=$data["heure"] ;
            echo $da=$data["daterdv"] ;
            echo $idcoa=$data["coach_id"] ;
        

        //si rdv salle de sport avec le directeur 
        if($idcoa==15)
        {

            echo "on ajoute la dispo dans salle de sport";
            // //insertion dispo salle et suppr du rdv 
            $instdispo =  "INSERT INTO disposalle (creneau,date, jour) VALUES('$cren','$da','$j')";
            $delrdv =  "DELETE FROM rdv WHERE daterdv = '$da' and coach_id='$idcoa' and id_rdv= '$idrdv' "; 
            $resdispo = mysqli_query($db_handle,$instdispo);

               ## Définitions des deux constantes
                define('ADRESSE_WEBMASTER','martinrose632@gmail.com'); // Votre adresse qui apparaitra en tant qu'expéditeur des E-mails
                define('SUJET','Rendez-vous annulé'); // Sujet commun aux deux E-mail
                
                ## Message envoyé au visiteur
                $message = "Bonjour,\n Ceci est un mail de confirmation d'annulation du rendez-vous n°.".$idrdv."      
               \n\nCeci est un mail automatique, Merci de ne pas y répondre.
                 \nL'équipe Omnes Sport";
                
                ## Second appel de la fonction mail() : le visiteur reçoit cet E-mail
                ini_set('SMTP','smtp.orange.fr'); //il faut mettre le stmp qui correspond à son serveur, le lien suivant nous le donne : http://check414.free.fr/detection-smtp/
                ini_set("sendmail_from","martinrose632@gmail.com"); //donne l'expéditeur (il faut mettre une vrai addresse mail)
                mail($_SESSION['Email'],SUJET,$message,'From: '.ADRESSE_WEBMASTER); //on envoie le mail

                    if($resdispo) 
                    { 
                            echo '<script type="text/javascript">
                            alert("email d annulation envoyé à '.$_SESSION['Email'] .'");
                            location="rendezvous.php";
                            </script>';
                        $resrdv = mysqli_query($db_handle,$delrdv);
                        //echo " insertion dispo normal classique";
                    }
                    else 
                    {
                        echo "Insertion dispo rdv  unsuccessful";
                    }

        }

        else 
        {
             echo "on ajoute la dispo dans dispo coach ";
              //insertion dispo coach et suppr du rdv 
            $instdispocoach =  "INSERT INTO dispo (jour,id_pro,creneau,date) VALUES('$j','$idcoa','$cren','$da')";
            $delrdvcoach =  "DELETE FROM rdv WHERE daterdv = '$da' and coach_id='$idcoa' and id_rdv= '$idrdv' "; 
            $resdispocoach = mysqli_query($db_handle,$instdispocoach);

            
               ## Définitions des deux constantes
               define('ADRESSE_WEBMASTER','martinrose632@gmail.com'); // Votre adresse qui apparaitra en tant qu'expéditeur des E-mails
               define('SUJET','Rendez-vous annulé'); // Sujet commun aux deux E-mail
               
               ## Message envoyé au visiteur
               $message = "Bonjour,\n Ceci est un mail de confirmation d'annulation du rendez-vous n°.".$idrdv."      
              \n\nCeci est un mail automatique, Merci de ne pas y répondre.
                \nL'équipe Omnes Sport";
               
               ## Second appel de la fonction mail() : le visiteur reçoit cet E-mail
               ini_set('SMTP','smtp.orange.fr'); //il faut mettre le stmp qui correspond à son serveur, le lien suivant nous le donne : http://check414.free.fr/detection-smtp/
               ini_set("sendmail_from","martinrose632@gmail.com"); //donne l'expéditeur (il faut mettre une vrai addresse mail)
               mail($_SESSION['Email'],SUJET,$message,'From: '.ADRESSE_WEBMASTER); //on envoie le mail
             
                     if($resdispocoach) 
                     { 
                             echo '<script type="text/javascript">
                             alert("email d annulation envoyé à '.$_SESSION['Email'] .'");
                             location="rendezvous.php";
                             </script>';
                         $resrdvcoach = mysqli_query($db_handle,$delrdvcoach);
                         echo " insertion dispo coach classique et supp rdv ";
                     }
                     else 
                     {
                         echo "Insertion dispo rdv  unsuccessful";
                     }
        }
    }
    else {
        echo '<script type="text/javascript">
        alert("Erreur. Le rendez-vous saisi est incorrect!");
        location="rendezvous.php";
        </script>';
    }
    

       /* ## Définitions des deux constantes
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
        mail($_SESSION['Email'],SUJET,$message,'From: '.ADRESSE_WEBMASTER); //on envoie le mail*/


    }

    elseif (isset($_POST["envoyer"])) {
        $clientemail = isset($_POST["clientemail"])? $_POST["clientemail"] : "";
        $message = isset($_POST["message"])? $_POST["message"] : "";
        $objet = isset($_POST["objet"])? $_POST["objet"] : "";

        $sql4 ="SELECT * FROM client WHERE EXISTS ( SELECT * WHERE Email = '$clientemail')";
        $res4 = mysqli_query($db_handle,$sql4);


        //$sql ="SELECT * FROM client WHERE Nom = '$client'";

       // $res = mysqli_query($db_handle,$sql);

           /* while($data = mysqli_fetch_assoc($res)) 
            {
                $_SESSION['EmailClient'] =$data["Email"];
            }*/

           ## Définitions des deux constantes
          define('ADRESSE_WEBMASTER','martinrose632@gmail.com'); // Votre adresse qui apparaitra en tant qu'expéditeur des E-mails
          define('SUJET',$objet); // Sujet commun aux deux E-mail
          
          ## Second appel de la fonction mail() : le visiteur reçoit cet E-mail
          ini_set('SMTP','smtp.orange.fr'); //il faut mettre le stmp qui correspond à son serveur, le lien suivant nous le donne : http://check414.free.fr/detection-smtp/
          ini_set("sendmail_from","martinrose632@gmail.com"); //donne l'expéditeur (il faut mettre une vrai addresse mail)
          mail($clientemail,SUJET,$message,'From: '.ADRESSE_WEBMASTER); //on envoie le mail
  
          if($datatest=mysqli_fetch_assoc($res4))
          {
              echo'<script type="text/javascript">
              alert("email envoyé à '.$clientemail .'");
              location="coach.php";
              </script>';
          }
          else
          {
              echo'<script type="text/javascript">
              alert("Email non envoyé");
              location="coach.php";
              </script>';
          }


        
    }
    
}

?>


