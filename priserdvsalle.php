<?php

session_cache_limiter('private_no_expire, must-revalidate');

session_start();
$id_session = session_id();
$db = "webprojet";//Nom de la base de données
$site ="localhost";
$db_id = "root"; //ID pour accéder mysql
$db_mdp =""; //pour mac

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="compte.css">
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

            
                <div class="form">
                    <form action="connect.php" method="post">
                        <h2>Prendre un rendez-vous</h2>
                        <input type="email" name="Email" placeholder="Entrer votre mail ici">
                        <input type="password" name="Mdp" placeholder="Entrer votre mot de passe ici">
                       
                       <label  for="coach1"><?php echo "<p style='text-align:center; font-size : 20px'>" . " GUIDE : " . "Directeur" ?></p></label>
                      

                       <?php
                        
                       echo "<u>" ."<p style='text-align:center;'>" ."Disponibilités : " . "</u>";
                       
                       
                       $sql = "SELECT * FROM  disposalle ";
                       $res = mysqli_query($db_handle,$sql);
                      
                       while($data = mysqli_fetch_assoc($res))
                       { 
                        
                        echo "<p style='text-align:center;'>". $data['jour'] . " " . $data['creneau'] . " " . $data['date'] ;
                      

                    }
    ?>
   <input type="text" name="date" placeholder="Entrer la date ici">
   <input type="file" name="doc" >
                        <button class="btnn" type="submit" name="ValRDVSalle">VALIDER</button>
                    </form>
                </div>
            
                    
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
                
                    
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>

