<?php
session_start();
$id_session = session_id();
$db = "webprojetBDD2";
$site ="localhost";
$db_id = "root"; 
$db_mdp ="";

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);


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
    <div id="Nav">
        <a href="accueil.html"><img src="images/accueil.png" width="150" height="50"></a>
        <a href="ToutParcourir.html"><img src="images/toutparcourir.png" width="150" height="50"></a>
    </div>
    <h2 style="text-align:center"> Bienvenue <?php echo $prenom ?></h2>
    <h3 style="text-align:center">Qu'est ce que vous voulez faire ?</h3>
    <form  style="text-align:center">
        <input type="button" Value="Informations rendez-vous" onclick="masquer_div('info');">
        <input type="button" Value="Annuler rendez-vous" onclick="masquer_div('cancel');">
        <input type="button" Value="Activites payantes" onclick="masquer_div('Actpayante');">
    </form>
        
    <div  id="Actpayante"  style="display:none;text-align: center;" >
        <br><br>
        <h2>Initiation Crossfit</h2>
            <p>Entrainement adapté à tous. Coachs qualifiés et expérimentés. 
            Protocole sanitaire en place. <br>
            L’Arene CrossFit c’est plus qu’une simple salle de sport, c'est une famille.</p>

        <input type="button"  value="Procéder au paiement pour le crossfit" onclick="masquer_div('paiement');";>
        <div  id="paiement"  style="display:none;text-align: center;" >

            <h2>Coordonnées de paiement : </h2>
                <form style="margin-left : 550px">
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
                <form action="connect.php" method="post" style="margin-left : 510px">
                    <table border="1">
                        <tr>
                            <td>Nom du client:</td>
                            <td><?php echo $nom. " ". $prenom?></td>
                        </tr>
                        <tr>
                            <td>Montant à payer:</td>
                            <td><input type="number" step="0.01" name="amount"></td>
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


        <h2>Roller dans les rues de Paris</h2>
            <p>Cours et activités autour de plusieurs disciplines du roller : apprentissage général, freestyle, courses et randonnées<br>
                Permettre la participation aux événements rollers au plus grand nombre et dans la convivialité</p>

        <input type="button"  value="Procéder au paiement pour le roller" onclick="masquer_div('paiement');";>
        <div  id="paiement"  style="display:none;text-align: center;" >

            <h2>Coordonnées de paiement : </h2>
                <form style="margin-left : 550px">
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
                <form action="connect.php" method="post" style="margin-left : 510px">
                    <table border="1">
                        <tr>
                            <td>Nom du client:</td>
                            <td><?php echo $nom. " ". $prenom?></td>
                        </tr>
                        <tr>
                            <td>Montant à payer:</td>
                            <td><input type="number" step="0.01" name="amount"></td>
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
    
</body>
</html>

            
            


   

