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
            <p class="nosAct"> Rendez-vous avec  :
            <br> 
            <?php

                $sql2 ="SELECT *
                FROM  rdv
                WHERE rdv.client_id = $id_client";
                $res2 = mysqli_query($db_handle,$sql2);

                $sql3 ="SELECT coach.Nom
                FROM  coach, rdv
                WHERE rdv.coach_id = coach.id_coach";
                $res3 = mysqli_query($db_handle,$sql3);
                        
                while($data2 = mysqli_fetch_assoc($res2)) 
                {         
                    if($data3 = mysqli_fetch_assoc($res3)) {         
                ?>

                    <input type="checkbox" name="test[]" value=<?php echo $data2["id_rdv"]?>>
                <?php
                    echo "Rdv n° ". $data2["id_rdv"] .", Creneau : " .$data2["info_horaire_date"].", Coach :".$data3["Nom"]. "<br>";
                ?></label> 
                <?php
                } 
            }

            ?>
            <button class="btnnosAct" type="submit" name="AnnulerRDV">Annulation du RDV</button>
            <?php
               /* if($_POST[$data2["id_rdv"]] && isset($_POST["AnnulerRDV"])) {
                    echo "Rsupprimé <br/>";
                }*/
                if(isset($_POST['test']) && isset($_POST["AnnulerRDV"])){
                    if(in_array('value1', $_POST['test'])){
                        echo "Option1 was checked!";
                    }
                }

            ?>

            </p>
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