<?php
session_start();
$id_session = session_id();
$db = "webprojet";
$site ="localhost";
$db_id = "root"; 
$db_mdp ="";

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);

$nom =$_SESSION['NomCoach'];
$id_coach= $_SESSION['idcoach'];

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

         <h1> MES<br><span>INFORMATIONS</span></h1>
            <p class="nosAct">
            <br> 
            <?php
                $sqlcoach ="SELECT *
                FROM  coach
                WHERE coach.id_coach='$id_coach'";
                $rescoach = mysqli_query($db_handle,$sqlcoach);
                        
                while($datacoach = mysqli_fetch_assoc($rescoach)) 
                {   
                
                    echo '<img src="'.$datacoach['Profil'].' "height = 150 px /></a>';          
                    echo "  ID :  " . $datacoach["id_coach"] . "<br>";
                    echo "  Nom :  " . $datacoach["Nom"] . "<br>";
                    echo "  Prenom :  " . $datacoach["Prenom"] . "<br>";
                    echo "  Bureau :  " . $datacoach["Bureau"] . "<br>";
                    echo "  Dispo :  " . $datacoach["Dispo"] . "<br>";
                    echo "  NumeroTel :  " . $datacoach["NumeroTel"] . "<br>";
                    echo "  Email :  " . $datacoach["Email"] . "<br>";
                    echo "  Sport :  " . $datacoach["Sport"] . "<br>";
                    echo '<a href="'.$datacoach['CV'].'" >';
                    echo '<img src="'.$datacoach['CV'].' "height = 150 px /></a>';
                
                } 

            ?>


            <h1> MES<br><span>RENDEZ-VOUS</span></h1>
            <p class="nosAct"> Rendez-vous avec  :
            <br> 
            <?php

                $sql2 ="SELECT *
                FROM  rdv
                WHERE rdv.coach_id = '$id_coach'";
                $res2 = mysqli_query($db_handle,$sql2);

                $sql3 ="SELECT client.Nom
                FROM  client, rdv
                WHERE rdv.client_id = client.id";
                $res3 = mysqli_query($db_handle,$sql3);   
                     
                while($data2 = mysqli_fetch_assoc($res2)) 
                {         
                    if($data3 = mysqli_fetch_assoc($res3)) {     
                        
                        if($data2["bool_rdv"]=='0')
                        {

                            echo " <strong>Rendez-vous n° " . $data2["id_rdv"] ."</strong><br>";
                            echo " ";
                                echo "Creneau : " .$data2["jour"]." ". $data2["heure"]. " ". $data2["date"]."<br>";
                                echo "Adresse : ".$data2["adresse"]." Digicode : ".$data2["dogicode"]." <br> Coach : ".$data3["Nom"]." Docs : ".$data2["doc"]."<br><br>";
                            ?></label> 
                            <?php
                        }
                } 
            }

            ?>
        
        </div>

        
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