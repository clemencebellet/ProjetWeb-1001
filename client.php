<?php
session_start();


$nom =$_SESSION['Nom'];
$prenom=$_SESSION['Prenom'];
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
    <h3 style="text-align:center">Qu'est ce que vous voulez faire ?</h3>
    <form  style="text-align:center">
        <input type="button" Value="Informations rendez-vous" onclick="masquer_div('info');">
        <input type="button" Value="Annuler rendez-vous" onclick="masquer_div('cancel');">
        <input type="button" Value="Activite payante" onclick="masquer_div('payante');">
        <input type="button"  value="paiement" onclick="masquer_div('paiement');";>

    </form>

    <div  id="paiement"  style="display:none;text-align: center;" >
        <h2>Paiement par carte de crédit</h2>
        <form action="traitementPaiement2.php" method="post">
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
                    <td><input type="number" name="numerocarte"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="btnPaiment" value="Soumettre">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    
<h2> Bienvenue <?php echo $prenom ?>;
    
    </h1>
</body>
</html>

            
            


   

