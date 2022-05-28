<?php
session_start();
$id_session = session_id();
$db = "webprojet";
$site ="localhost";
$db_id = "root"; 
$db_mdp ="";

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);

?> 

<!DOCTYPE html>
<html>
<head>
 <title>Nos Services</title>
 <meta charset="utf-8"/>
 <link href="NosServices.css" rel="stylesheet" type="text/css" />

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
    function isEmpty(){
            var mdp = document.getElementById("mdp").value;
            var mdp1 = document.getElementById("mdp1").value;
            var cp=0; 
             if(mdp!=mdp1) {
                masquer_div("pasmememdp");
                cp = (cp+1);
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
    <h1> LES SERVICES<br>DE LA SALLE DE SPORT</h1>

            <div class ="services">
                

                <button class="btnn"><a onclick="masquer_div('personnel');">LE PERSONNEL</a></button>
                <button class="btnn"><a onclick="masquer_div('horaire');">HORAIRES</a></button>
                <button class="btnn"><a onclick="masquer_div('règle');">REGLES D'UTILISATION DES MACHINES</a></button>
                <button class="btnn"><a onclick="masquer_div('newclients');">NOUVEAUX CLIENTS</a></button>
                <button class="btnn"><a onclick="masquer_div('alimentation');">ALIMENTATION ET NUTRITION</a></button>
                <button class="btnn"><a onclick="masquer_div('dispo');">DISPONIBILITE VISITES</a></button>

            </div>
  

    
    <div id="aff">
        <div  id="personnel" name="personnel" style="display:none; margin-left:300px " >
        
            <iframe style="height: 900px; width: 500px; margin-left: 200px; margin-top: 70px; float: left; top : 30px;
                          border-radius: 30px; background-color: rgb(223, 231, 209)"
                          src='personnel.php'>
            </iframe>
            
        </div>
    </div>

     

        <!-- AFFICHAGE DES HORAIRES DE LA SALLE -->
        <div  class="Boxhoraire" id="horaire"  style="display:none" >

           <h2>HORAIRES D'OUVERTURE </h2> <br><br>
            <p>
                <span>Lundi</span> : 6h00-22h30 <br><br>
                <span>Mardi</span> : 6h00-22h30 <br><br>
                <span>Mercredi </span>: 6h00-22h30 <br><br>
                <span>Jeudi </span>: 6h00-22h30 <br><br>
                <span> Vendredi</span> : 6h00-22h30 <br><br>
                <span>Samedi </span>: 9h00-19h00 <br><br>
                <span>Dimanche</span> : 9h00-19h00 <br>
            </p>
            
        </div>


        <!-- AFFICHAGE REGLEMENT -->
        <div class="Boxreglement"  id="règle" style="display:none">
            <h3>Règlement intérieur</h3>
            <p><span>Ensemble, nous gardons le club propre et sain</span><br><br>
            •    Le port de chaussures de sport (propres) et de vêtements de sport appropriés est obligatoire.<br>
            •    Placez votre serviette sur l’appareil que vous utilisez puis, pour l’hygiène de tous, nettoyez l’appareil avec les produits désinfectants mis à votre disposition. <br>
            •    La nourriture et les récipients non refermables ne sont pas autorisés dans les espaces d’entraînement. <br>
            •    Il est interdit de fumer, de faire usage et/ou de distribuer des substances illicites dans le club. <br>
            •    Les animaux ne sont pas admis au club, hormis les chiens d'assistance. <br><br><br><br>

            <span>Nous respectons la vie privée et la tranquillité des autres personnes</span><br>
            •    L'utilisation d'appareils mobiles fait partie intégrante de notre société. Dans les espaces d’entraînement, il n'est pas permis de téléphoner et de prendre des photos ou des films portant atteinte à la vie privée des personnes présentes. <br>
            •    Ne laissez pas tomber le matériel bruyamment, limitez les bruits de toutes sortes ainsi que le niveau sonore de votre musique. <br>
            •    La violence verbale et/ou physique n’est pas tolérée dans le club. <br>
            •    Les gestes, harcèlement, et/ou relations intimes/sexuels ne sont pas tolérés dans le club. <br>
            •    Laissez les appareils disponibles pour les autres si vous ne les utilisez pas de manière active.<br>
            </p>
            
        </div>
     
        <div id="newclients" style="display:none;text-align:center">
            
            
            
            <div class="form"><form  action="NewClient.php" method="post" style="margin-left:100px; width : 180px">
                <h3 >Nouveau Client</h3>
                <table>
                    <tr>
                        <td>
                            Nom:
                        </td>  
                        <td>
                            <input type="text" name="nom" id="name"><br> 
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            Prénom:
                        </td>  
                        <td>
                            <input type="text"name="prenom" id="prenom"> <br> 
                        </td>
                       
                    </tr>
                    <tr>
                        <td>
                            Age: 
                        </td>  
                        <td>
                            <input type="text" name="age" id="age"> <br>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            Téléphone:
                        </td>  
                        <td>
                            <input type="text" name="tel" id="tel"> <br> 
                        </td>
                       
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>  
                        <td>
                            <input type="text" name="email" id="email"> <br> 
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            Mdp:
                        </td>  
                        <td>
                            <input type="password" name="mdp" id="mdp"> <br> 
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            Mdp:
                        </td>  
                        <td>
                            <input type="password" id="mdp1"> <br> 
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <div id="pasmememdp" style="display:none;">
                                Mdp différents !
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Adresse:
                        </td>  
                        <td>
                            <input type="text" name="adresse" id="adresse"> <br> 
                        </td>
                       
                    </tr>
                    <tr>
                        <td>
                            Ville:
                        </td>  
                        <td>
                            <input type="text" name="ville" id="ville"> <br> 
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            Code Postal:
                        </td>  
                        <td>
                            <input type="text" name="cp" id="cp"> <br> 
                        </td>
                       
                    </tr>
                    <tr>
                        <td>
                            Pays:
                        </td>  
                        <td>
                            <input type="text" name="pays" id="pays"> <br> 
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            Carte Etudiante:
                        </td>  
                        <td>
                            <input type="text" name="ce" id="ce"> <br> 
                        </td>
                       
                    </tr>
                    <tr>
                        <td>
                            Numero de Carte:
                        </td>  
                        <td>
                            <input type="text" name="numcarte" id="numcarte"> <br> 
                        </td>
                        
                    </tr>

                    <tr>
                        <td>
                            Date Expiration:
                        </td>  
                        <td>
                            <input type="date" name="date" id="date"> <br> 
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            CVV:
                        </td>  
                        <td>
                            <input type="text" name="cvv" id="cvv"> <br> 
                        </td>
                        
                    </tr>
                    <tr>
                        <td></td>  
                        <td>
                            <input  type="submit"  name="valider" Value="Valider" style="margin-top: 15px; background: #01fea5; color: rgb(0, 0, 0);">
                        </td>
                    </tr>
                </table>
                </form>
            </div>
        </div>
    

        <div class="BoxAlimentation" id="alimentation" style="display:none">
        <h3>Qu’est-ce qu’une alimentation saine lorsque tu pratiques le sport d’endurance ?</h3><br>
        D’abord, toujours prévoir une alimentation riche en glucides. Pense à un régime contenant du pain complet, des pommes de terre, des pâtes, du riz et/ou des légumes. Fais attention aux graisses mais consomme des protéines. La viande maigre et le poisson contiennent des protéines, mais aussi le fromage et les noix. Assure-toi d’avoir une alimentation équilibrée. Car, manger des pâtes bolognaise tous les jours ce n’est pas un régime sain et… c’est surtout très ennuyeux.<br>

        <h3>Avant, pendant et après le sport d’endurance</h3>
        Lorsque tu pratiques le sport d’endurance, la fréquence des repas est aussi très importante. Si tu manges les bonnes quantités quand il faut, tu préviens les troubles gastro-intestinaux et le manque d’énergie. Prends un repas nutritif mais faible en fibres environ deux heures avant l’exercice. Attention à ne pas trop manger. Tu ne veux pas que ton taux de sucre dans le sang explose. De plus, tu peux prendre un encas après et sentir la fatigue. Ta session de sport d’endurance dure plus d’une heure et demie ? Alors recharge les batteries en glucides pendant l’entraînement. Tu peux manger par exemple une banane ou boire une boisson énergisante. De toute manière, il est important de s’hydrater durant l’effort.<br>

        Tu peux en apprendre plus sur l’importance de l’hydratation pendant la pratique du sport sur ce blog.<br>

        Après le sport d’endurance, tu dois recharger les batterie. Mange un repas riches en hydrates de carbone et en protéines.<br>
        </div>

    
<!-- AFFICHAGE DISPONIBILITES-->

    <div  class="Boxdispo" id="dispo"  style="display:none" >
        <h2>HORAIRES DE VISITE</h2> <br><br>
        <?php
        $sql ="SELECT * FROM  disposalle";
        $res = mysqli_query($db_handle,$sql);

       
        while($dataclient = mysqli_fetch_assoc($res)) 
{           
    echo "<p style='font-size: 25px; color: #1ad39f;'>"  . $dataclient["jour"]. " ". $dataclient["creneau"] . "</p>". "<br>";
    echo "<br>";
    echo "<br>";

    
    
} 


        ?>
        <label> Les visites seront assurées par le directeur de notre salle </label>
        <div class="form3"><form  action="priserdvsalle.php"  style="margin-left:100px; width : 180px">
        <tr>
                        <td></td>  
                        <td>
                            <input  type="submit"  name="valider" Value="Prendre rendez-vous" style="margin-top: 5px; background: #01fea5; color: rgb(0, 0, 0);">
                        </td>
                    </tr>
</div>
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

</body>

</html>