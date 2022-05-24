<?php
session_start();

$email = $_SESSION['EmailCompte'];


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
    
<h2>
Bienvenue <?php echo $email ?>;
    
    </h1>
</div>
            
            


   

