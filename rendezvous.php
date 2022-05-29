<?php
session_start();
$id_session = session_id();
$db = "webprojet";
$site ="localhost";
$db_id = "root"; 
$db_mdp ="";

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);

//$nom_coach =$_SESSION['NomCoach'];
$nom =$_SESSION['Nom'];
$id_client= $_SESSION['id'];

?> 

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Rendez-vous</title>
    <link rel="stylesheet" href="toutparcourir.css">

    <script type="text/javascript">
        
        function getvalue(){
            in = $("#idrdv").val();
            return in;
        }
        </script>
<script type="text/javascript">
        function masquer_div(id)
        {
            if (document.getElementById(id).style.display == 'none')
            {
                document.getElementById(id).style.display = 'block';
            }
            else
            {
                document.getElementById(id).style.display = 'none';
            }
        }
    </script>

</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Omnes</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="accueil.html">HOME</a></li>
                    <li><a href="toutparcourir.html">TOUT PARCOURIR</a></li>
                    <li><a href="rendezvous.php">RENDEZ-VOUS</a></li>
                    <li><a href="compte.html">MON COMPTE</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Rechercher" onchange="pageRecherchee()">
                <a href="toutparcourir.html"> <button class="btn">Search</button></a>
            </div> 

        </div> 

        
        <div class="content">
            <h1> MES<br><span>RENDEZ-VOUS</span></h1>
            <p class="nosAct"> 
            <br> 
            <?php

                $sql2 ="SELECT *
                FROM  rdv
                WHERE rdv.client_id = '$id_client'";
                $res2 = mysqli_query($db_handle,$sql2);


               /* $sql4 = "SELECT rdv.bool_rdv 
                FROM rdv,coach 
                WHERE rdv.coach_id = coach.id_coach 
                AND rdv.bool_rdv='1'"; 
                $res4 = mysqli_query($db_handle,$sql4);*/
                        
                while($data2 = mysqli_fetch_assoc($res2)) 
                {         
                 $idcoach =$data2['coach_id'];
                    $sql3 ="SELECT *
                    FROM   coach
                    WHERE id_coach = '$idcoach'";
                    $res3 = mysqli_query($db_handle,$sql3);

                    if($data3 = mysqli_fetch_assoc($res3)) {  
                        
                        if($data2["bool_rdv"]=='1') {
                          
    
                            echo " <strong>Rendez-vous n° " . $data2["id_rdv"] ."</strong><br>";
                            echo " ";
                                echo "Creneau : " .$data2["jour"]." ". $data2["daterdv"] . " ". $data2["heure"]."<br>";
                                echo "Adresse : ".$data3["Bureau"]." Digicode : ".$data2["dogicode"]." <br> Coach : ".$data3['Nom']." Docs : ".$data2["doc"]."<br><br>";
                            ?></label> 
                            <?php
                        }
                } 
            }

            ?>
            <form action = "connect.php" method="post" style ="text-align : center;" >
             <td>Veuillez ecrire l'id du rendez-vous que vous voulez supprimer :</td>
             <td><input method="post" type="text" name="idrdv" id="idrdv"></td>
             <br/>

             <button class="btnnosAct" type ="submit" name="AnnulerRDV" >Annulation du RDV</button>

            </form>
            <form action = "client.php" style ="text-align : center;" >
            <button  class="btnnosAct" type ="submit" >Retour</button></a>
            </form>

            
           
        


        
        <div class="footer">
            <h1>NOUS CONTACTER:</h1> 
            
            <p> <br>Adresse mail: omnes.sport@edu.ece.fr <br>
            Numéro de téléphone: +33768423099 <br>
            Adresse: 37 Quai de Grenelle, 75015, PARIS </p><br> <br>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.3378949789744!2d2.2842932156190012!3d48.85176677928686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6701b4f58251b%3A0x167f5a60fb94aa76!2sECE%20Paris%20Lyon!5e0!3m2!1sfr!2sfr!4v1653307387919!5m2!1sfr!2sfr" 
                 width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>

    


 
</body>
</html>