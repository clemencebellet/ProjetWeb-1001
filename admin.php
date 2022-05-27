
 <?php $db = "webprojet";
    $site ="localhost";
    $db_id = "root"; 
    $db_mdp ="";
    
    $db_handle = mysqli_connect($site,$db_id,$db_mdp);
    $db_found = mysqli_select_db($db_handle,$db);?>
<!DOCTYPE html>
<html>
<head>
 <title>Compte Admin</title>
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

    function isEmpty(){
            var id = document.getElementById("id").value;
            var nom = document.getElementById("name").value;
            var prenom = document.getElementById("prenom").value;
            var bureau = document.getElementById("bureau").value;
            var dispo = document.getElementById("dispo").value;
            var num = document.getElementById("tel").value;
            var email = document.getElementById("email").value; 
            var mdp = document.getElementById("mdp").value;
            var mdp1 = document.getElementById("mdp1").value;
            var sport = document.getElementById("sport").value;
            var idsupp = document.getElementById("idsupp").value;
            var cp=0; 

            if( !id.replace(/\s+/, '').length ) {
                  masquer_div("iderror");
                  cp = (cp+1);
             }
             if( !nom.replace(/\s+/, '').length ) {
                  masquer_div("nomerror");
                  cp = (cp+1);
             }
             if( !prenom.replace(/\s+/, '').length ) {
                  masquer_div("prenomerror");
                  cp = (cp+1);
             }
             if( !bureau.replace(/\s+/, '').length ) {
                  masquer_div("bureauerror");
                  cp = (cp+1);
             }
             if( !dispo.replace(/\s+/, '').length ) {
                  masquer_div("dispoerror");
                  cp = (cp+1);
             }
             if( !num.replace(/\s+/, '').length ) {
                 masquer_div("telerror");
                  cp = (cp+1);
             }
             if(num.replace(/\s+/, '').length!=10) {
                  cp = (cp+1);
             }             
             if( !email.replace(/\s+/, '').length ) {
                  masquer_div("emailerror");
                  cp = (cp+1);
             }
             if( !mdp.replace(/\s+/, '').length ) {
                  masquer_div("mdperror");
                  cp = (cp+1);
             }
             if( !mdp1.replace(/\s+/, '').length ) {
                  masquer_div("mdperror1");
                  cp = (cp+1);
             }
             if( !sport.replace(/\s+/, '').length ) {
                  masquer_div("sporterror");
                  cp = (cp+1);
             }
             if( !idsupp.replace(/\s+/, '').length ) {
                  masquer_div("idsupperror");
                  cp = (cp+1);
             }
             if(mdp!=mdp1) {
                masquer_div("pasmememdp");
                cp = (cp+1);
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
    <form style="text-align:center">
        <input type="button" Value="Ajouter des coachs" onclick="masquer_div('ajoutcoach');">
        <input type="button" Value="Supprimer des coachs" onclick="masquer_div('suppcoach');">
        <input type="button" Value="Créer un XML" onclick="masquer_div('creerXML');">
        <input type="button" Value="Informations disponibilites" onclick="masquer_div('infos');">
    </form>

    <div  id="ajoutcoach" style="display:none;text-align: center;" >
        <br><br>
            <form  action="NewCoach.php" method="post" style="margin : auto; width : 180px">
                <table>
                    <tr>
                        <td>
                            ID:
                        </td>  
                        <td>
                            <input type="text" name="id" id="id"> <br> 
                        </td>
                        <td>
                            <div id="iderror" style="display:none;">
                                Champ id vide !
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nom:
                        </td>  
                        <td>
                            <input type="text" name="nom" id="name"> <br> 
                        </td>
                        <td>
                            <div id="nomerror" style="display:none;">
                                Champ Nom vide !
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Prénom:
                        </td>  
                        <td>
                            <input type="text"name="prenom" id="prenom"> <br> 
                        </td>
                        <td>
                            <div id="prenomerror" style="display:none;">
                                Champ Prenom vide !
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Bureau: 
                        </td>  
                        <td>
                            <input type="text" name="bureau" id="bureau"> <br>
                        </td>
                        <td>
                            <div id="bureauerror" style="display:none;">
                                Champ bureau vide !
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Dispo: 
                        </td>  
                        <td>
                            <input type="text" name="dispo" id="dispo"> <br>
                        </td>
                        <td>
                            <div id="dispoerror" style="display:none;">
                                Champ Dispo vide !
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Téléphone:
                        </td>  
                        <td>
                            <input type="text" name="tel" id="tel"> <br> 
                        </td>
                        <td>
                            <div id="telerror" style="display:none;">
                                Champ Téléphone vide !
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>  
                        <td>
                            <input type="text" name="email" id="email"> <br> 
                        </td>
                        <td>
                            <div id="emailerror" style="display:none;">
                                Champ Email vide !
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Sport:
                        </td>  
                        <td>
                            <input type="text" id="sport" name="sport"> <br> 
                        </td>
                        <td>
                            <div id="sporterror" style="display:none;">
                                Champ Sport vide !
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Photo de profil :
                        </td>  
                        <td>
                            <input type="file"id="Profil" name="Profil" accept="image/png, image/jpeg"><br> 
                        </td>
                        <td>
                            <div id="Profilerror" style="display:none;">
                                Aucune photo de profil!
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            CV :
                        </td>  
                        <td>
                            <input type="file"id="CV" name="CV" accept="image/png, image/jpeg"><br> 
                        </td>
                        <td>
                            <div id="CVerror" style="display:none;">
                                Aucun CV de profile !
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mdp:
                        </td>  
                        <td>
                            <input type="password" name="mdp" id="mdp"> <br> 
                        </td>
                        <td>
                            <div id="mdperror" style="display:none;">
                                Champ Mdp vide !
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mdp:
                        </td>  
                        <td>
                            <input type="password" id="mdp1"> <br> 
                        </td>
                        <td>
                            <div id="mdperror1" style="display:none;">
                                Champ Mdp vide !
                            </div>
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
                        <td></td>  
                        <td>
                            <input type="submit"  name="ajoutcoach" Value="ajoutcoach">
                        </td>
                    </tr>
                </table>
            </form>
    </div>

    <div  id="suppcoach" style="display:none;text-align: center;" >
        <br><br>
            <form  action="NewCoach.php" method="post" style="margin : auto; width : 180px">
                <table>
                    <tr>
                        <td>
                            Saisir l'id du coach à supprimer : 
                        </td>  
                        <td>
                            <input type="text" name="idsupp" id="idsupp"> <br> 
                        </td>
                        <td>
                            <div id="idsupperror" style="display:none;">
                                Champ id à supprimer vide !
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>  
                        <td>
                            <input type="submit" onClick="isEmpty()" name="suppcoach" Value="suppcoach">
                        </td>
                    </tr>
                </table>
            </form>
    </div>
    <div  id="creerXML" style="display:none;text-align: center;" >
        <br><br>
        <h1>creer un cv</h1>;
        <form  action="cv.php" method="post" style="margin : auto; width : 180px">
            <input type="submit" onClick="isEmpty()" name="cvf" value ="cvf " ;>
        
        </form>
    </div>

    <div  id="infos" style="display:none;text-align: center;" >
    <br/>
    <h1>DISPONIBILITES SALLE DE SPORT</span></h1>
    <br/>

    <?php
        $sql ="SELECT * FROM  disposalle";
        
        $res = mysqli_query($db_handle,$sql);
        echo "<b>" ;
        while($dataclient = mysqli_fetch_assoc($res)) 
{           
    echo "<p style='font-size: 25px; color: #1ad39f;'>"  . $dataclient["dispo"] . "</p>". "<br>";
    
    echo "<br>";

    
    
} 

        ?>
             <br/>
             <br/>
             <br/>
    <h1>DISPONIBILITES COACH</span></h1>
    <form action = "admin.php" method="post" style ="text-align : center;" >
             <td>Veuillez ecrire l'ID du coach :</td>
             <td><input method="post" type="text" name="info" id="info"></td>
             <br/>

             <button class="btnnosAct" type ="submit" name="Info" >Dispo</button>
             <br/>
             <br/>

            </form>

            
    <?php
   
   $info = isset($_POST["info"])? $_POST["info"] : "";
   
$sqlinfo = "SELECT * FROM coach WHERE  id_coach='$info'";
$resinfo = mysqli_query($db_handle,$sqlinfo);
$sqlcreaneaux = "SELECT * FROM dispo WHERE  id_pro='$info'";
$rescreneaux = mysqli_query($db_handle,$sqlcreaneaux);

                while($datainfo = mysqli_fetch_assoc($resinfo)) 
                {       
                    echo "Voici les créneaux disponibles de " . $datainfo['Nom'] . " " .  $datainfo['Prenom'] . "<br>";
                  
                    
                    echo "<br>";
                
                } 
               
                    
    while($data = mysqli_fetch_assoc($rescreneaux))
    { 
    
        echo $data['jour'] . " " . $data['creneau'] ;
        echo "<br>";
       
        
        
        
    }
                
    


            ?>
            </div>
       

</body>
</html>
   

