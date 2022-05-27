<?php
session_start();
$id_session = session_id();
$db = "webprojet";
$site ="localhost";
$db_id = "root"; 
$db_mdp ="";

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);

$id_client =$_SESSION['id'];
$nom =$_SESSION['Nom'];
$prenom=$_SESSION['Prenom'];
$adresse =$_SESSION['Adresse'];
$ville =$_SESSION['Ville'];
$codepostal =$_SESSION['CodePostal'];
$pays =$_SESSION['Pays'];
$studentcard =$_SESSION['CarteEtudiante'];
$tel=$_SESSION['Tel'];

?> 

<!DOCTYPE html>
<html>
<head>
 <title>Compte Client</title>
 <meta charset="utf-8"/>
 
 <link href="SalledeSport.css" rel="stylesheet" type="text/css" />

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
    


<!--MENU DE NAV-->
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




    
<!-- BARRE DE RECHERCHE -->
    <div class="search">
        <input class="srch" type="search" name="" placeholder="Rechercher" onchange="pageRecherchee()">
        <a href="toutparcourir.html"> <button class="btn">Search</button></a>
    </div> 

</div> 

    <div class="titres">
        <p class="iconeClient"><img src="images/iconeClient.jpg" height="352.5px" width="282px"/> </p>
        <h2> <span>BIENVENUE</span> <br>DANS VOTRE COMPTE CLIENT</h2>
        <h3> Que voulez-vous faire?</h3>
    </div>

    
    <div class ="choix">
                
                <button class="btnn"><a onclick="masquer_div('infoClient');">MES INFORMATIONS</a></button>
                <button class="btnn"><a href="rendezvous.php" onclick="masquer_div('cancel');">MES RENDEZ-VOUS</a></button>
                <button class="btnn"><a href="anciensrendezvous.php" onclick="masquer_div('anciensrdvs');">MES ANCIENS RENDEZ-VOUS</a></button>
                <button class="btnn"><a onclick="masquer_div('Actpayante');">ACTIVITES PAYANTES</a></button>

    </div>


    
        <!-- AFFICHAGE DES HORAIRES DE LA SALLE -->
        <div  class="BoxInfoClient" id="infoClient" >

           <h2> MES INFORMATIONS </h2> <br><br>

           <?php

                $sqlclient ="SELECT *
                FROM  client
                WHERE client.id='$id_client'";
                $resclient = mysqli_query($db_handle,$sqlclient);
                        
                while($dataclient = mysqli_fetch_assoc($resclient)) 
                {            
                    echo "  ID :  " . $dataclient["id"] . "<br>";
                    echo"<br>";
                    echo "  NOM :  " . $dataclient["Nom"] . "<br>";
                    echo"<br>";
                    echo "  PRENOM :  " . $dataclient["Prenom"] . "<br>";
                    echo"<br>";
                    echo "  EMAIL :  " . $dataclient["Email"] . "<br>";
                    echo"<br>";
                    echo "  TELEPHONE :  " . $dataclient["Tel"] . "<br>";
                    echo"<br>";
                    echo "  AGE :  " . $dataclient["Age"] . "<br>";
                    echo"<br>";
                    echo "  ADRESSE :  " . $dataclient["Adresse"] . "<br>";
                    echo"<br>";
                    echo "  VILLE :  " . $dataclient["Ville"] . "<br>";
                    echo"<br>";
                    echo "  CODE POSTAL :  " . $dataclient["CodePostal"] . "<br>";
                    echo"<br>";
                    echo "  PAYS :  " . $dataclient["Pays"] . "<br>";
                    echo"<br>";
                    echo "  CARTE ETUDIANTE :  " . $dataclient["CarteEtudiante"] . "<br>";
                
                } 

            ?>


        </div>




        <!-- ACTIVITES PAYANTES -->

         <!-- AFFICHAGE DES HORAIRES DE LA SALLE -->
         <div  class="BoxActPayantes" id="actPayantes;" >

            <div  id="Actpayante"  style="display:none;text-align: center;" >
                <h2> LES ACTIVITES PAYANTES </h2> <br><br>
                    <h3>Initiation Crossfit</h3>
                    <p>Entrainement adapté à tous. Coachs qualifiés et expérimentés. 
                    Protocole sanitaire en place. <br>
                    L’OMNES Sport c’est plus qu’une simple salle de sport, c'est une famille.</p>

                    <button class="btn1"onclick="masquer_div('paiement');">PROCEDER AU PAIEMENT</button> <br> <br> <br> <br> <br> <br> <br>

                        <div  id="paiement"  style="display:none;text-align: center;" >

                            <h4>Coordonnées de paiement : </h4>

                                <form style="margin-left:370px">
                                    <table border="1">
                                        <tr>
                                            <td>Nom et prénom :</td>
                                            <td><?php echo $nom. " ". $prenom?></td>
                                        </tr>
                                            <td> Adresse :</td>
                                            <td><?php echo $adresse?></td>
                                        <tr>
                                        </tr>
                                            <td> Ville :</td>
                                            <td><?php echo $ville?></td>
                                        <tr>
                                        </tr>
                                            <td> Code postal :</td>
                                            <td><?php echo $codepostal?></td>
                                        <tr>
                                        </tr>
                                            <td> Pays:</td>
                                            <td><?php echo $pays?></td>
                                        <tr>
                                        </tr>
                                            <td> Téléphone :</td>
                                            <td><?php echo $tel?></td>
                                        <tr>
                                        </tr>
                                            <td> Carte étudiante:</td>
                                            <td><?php echo $studentcard?></td>
                                        <tr>
                                    </table>
                                </form>
                            
                                
            <h4> Paiement par carte de crédit: </h4>
                <form action="connect.php" method="post" style="margin-left : 320px">
                    <table border="1">
                        <tr>
                            <td>Nom du client:</td>
                            <td><?php echo $nom. " ". $prenom?></td>
                        </tr>
                        <tr>
                            <td>Montant à payer:</td>
                            <td><input type="number" name="montant" step="0.01" name="amount"></td>
                        </tr>
                        <tr>
                            <td>Payer par:</td>
                            <td>
                                <input type="radio" name="creditCard" value="MasterCard">MasterCard<br>
                                <input type="radio" name="creditCard" value="Visa" checked>Visa<br>
                                <input type="radio" name="creditCard" value="Amex">American Express<br>
                                <input type="radio" name="creditCard" value="PayPal">PayPal<br>
                            </td>
                        </tr>
                        <tr>
                            <td>Numéro de carte de crédit:</td>
                            <td><input type="number" name="Numerocarte"></td>
                        </tr>
                        <tr>
                            <td>Date d'expiration :</td>
                            <td><input type="date" name="datexp"></td>
                        </tr>
                        <tr>
                            <td>Code de sécurité:</td>
                            <td><input type="number" name="CVV"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" name="btnPaiement" value="btnPaiement">
                            </td>
                        </tr>
                    </table>
                </form>
        </div>


        <h3>Roller dans les rues de Paris</h3>
            <p>Cours et activités autour de plusieurs disciplines du roller : apprentissage général, freestyle, courses et randonnées<br>
                Permettre la participation aux événements rollers au plus grand nombre et dans la convivialité</p>


        <button class="btn2"onclick="masquer_div('paiement');">PROCEDER AU PAIEMENT</button> <br> <br> <br> <br> <br> <br> <br>
        <div  id="paiement"  style="display:none;text-align: center;" >

            <h2>Coordonnées de paiement : </h2>
                <form style="margin-left : 370px">
                    <table border="1">
                        <tr>
                            <td>Nom et prénom :</td>
                            <td><?php echo $nom. " ". $prenom?></td>
                        </tr>
                            <td> Adresse :</td>
                            <td><?php echo $adresse?></td>
                        <tr>
                        </tr>
                            <td> Ville :</td>
                            <td><?php echo $ville?></td>
                        <tr>
                        </tr>
                            <td> Code postal :</td>
                            <td><?php echo $codepostal?></td>
                        <tr>
                        </tr>
                            <td> Pays:</td>
                            <td><?php echo $pays?></td>
                        <tr>
                        </tr>
                            <td> Téléphone :</td>
                            <td><?php echo $tel?></td>
                        <tr>
                        </tr>
                            <td> Carte étudiante:</td>
                            <td><?php echo $studentcard?></td>
                        <tr>
                    </table>
                </form>
            <h2> Paiement par carte de crédit: </h2>
                <form action="connect.php" method="post" style="margin-left : 3200px">
                    <table border="1">
                        <tr>
                            <td>Nom du client:</td>
                            <td><?php echo $nom. " ". $prenom?></td>
                        </tr>
                        <tr>
                            <td>Montant à payer:</td>
                            <td><input type="number" name="montant"  step="0.01" name="amount"></td>
                        </tr>
                        <tr>
                            <td>Payer par:</td>
                            <td>
                                <input type="radio" name="creditCard" value="MasterCard">MasterCard<br>
                                <input type="radio" name="creditCard" value="Visa" checked>Visa<br>
                                <input type="radio" name="creditCard" value="Amex">American Express<br>
                                <input type="radio" name="creditCard" value="PayPal">PayPal<br>
                            </td>
                        </tr>
                        <tr>
                            <td>Numéro de carte de crédit:</td>
                            <td><input type="number" name="Numerocarte"></td>
                        </tr>
                        <tr>
                            <td>Date d'expiration :</td>
                            <td><input type="date" name="datexp"></td>
                        </tr>
                        <tr>
                            <td>Code de sécurité:</td>
                            <td><input type="number" name="CVV"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" name="btnPaiement" value="btnPaiement">
                            </td>
                        </tr>
                    </table>
                </form>
        </div>
        </div>

    </div>
    
</body>
</html>

<style type="text/css">


/* TITRES */


.titres{
    margin-top: 100px;
    margin-left: 300px;
}

.titres .iconeClient{
    float: left;
    margin-left: 100px;
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    line-height: 30px;
}

 .titres span{
    font-family: 'Times New Roman';
    color: #ffee00;
    font-size: 70px;
    padding-left: 20px;
    margin-top: 70px;
    margin-left:30px;
   
 }

.titres h2{
    font-family: 'Times New Roman';
    color: #574001;
    font-size: 60px;
    padding-left: 20px;
    margin-top: 70px;
 
 
 }

 .titres h3{
    font-family: 'Arial';
    color: rgb(6, 57, 32);
    font-size: 40px;
    padding-left: 20px;
    letter-spacing: 5px;
    margin-top: 30px;


 }




 
 /******  CHOIX DU CLIENT ******/
.choix{

width: 1250px;
height: 200px;
/*background: linear-gradient(to top, rgba(80, 80, 80, 0.8)50%,rgba(80, 80, 80, 0.8)50%);*/
background-color: rgb(244, 244, 244);
margin-left: 400px;
margin-top: 200px;
margin-bottom: 0px;
top: -20px;
left: 870px;
transform: translate(0%,-5%);
border-radius: 60px;
padding: 25px;
}



/* BOUTONS DES DIFF CHOIX */

.btnn{
    float:left;
    width: 300px;
    height: 70px;
    background: #3c4442;
    border: none;
    margin-top: 75px;
    margin-left:10px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn :hover{
    color:#ffee00;
}


.btnn a{
    text-decoration: none;
    color: rgb(185, 185, 185);
    font-weight: bold;
}






.BoxInfoClient{
    float:left;
    width: 650px;
    height: 550px;
    background-color: rgb(244, 244, 244);
    color: #000000;
    font-family: 'Arial';
    letter-spacing: 2px;
    margin-top: 100px;
    margin-left:400px;
    margin-bottom: 100px;
    top: -20px;
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 90px;
    padding: 25px;

}

.BoxInfoClient h2{
    font-family: 'Arial';
    color: #574001;
    font-size: 50px;
    padding-left:  20px;
    padding-top: 15px;
    padding-bottom: 15px;
    margin-top: 20px;
    letter-spacing: 2px;
}




.BoxActPayantes{
    float:left;
    width: auto;
    height: auto;
    background-color: rgb(244, 244, 244);
    color: #000000;
    font-family: 'Arial';
    letter-spacing: 2px;
    margin-top: 100px;
    margin-left:400px;
    margin-bottom: 100px;
    top: -20px;
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 90px;
    padding: 25px;

}

.BoxActPayantes h2{
    font-family: 'Arial';
    color: #574001;
    font-size: 50px;
    padding-left:  20px;
    padding-top: 15px;
    padding-bottom: 15px;
    margin-top: 20px;
    letter-spacing: 2px;
}

.BoxActPayantes h3{
    font-family: 'Arial';
    color: #ffee00;
    font-size:  30px;
    margin-left:10px;
    margin-bottom:20px;
    margin-top: 20px;
    letter-spacing: 2px;
}

.btn1{
    float:left;
    width: 300px;
    height: 70px;
    background: #3c4442;
    border: none;
    margin-top: 30px;
    margin-bottom: 30px;
    margin-left:380px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btn1:hover{
    color:#ffee00;
}

.btn1 a{
    text-decoration: none;
    color: rgb(185, 185, 185);
    font-weight: bold;
}


.BoxActPayantes h4{
    font-family: 'Arial';
    font-size: 20px;
    margin-top: 20px;
    margin-bottom:20px;
    letter-spacing: 2px;
}


.btn2{
    float:left;
    width: 300px;
    height: 70px;
    background: #3c4442;
    border: none;
    margin-top: 30px;
    margin-bottom: 30px;
    margin-left:380px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btn2:hover{
    color:#ffee00;
}

.btn2 a{
    text-decoration: none;
    color: rgb(185, 185, 185);
    font-weight: bold;
}





 
</style>





   

