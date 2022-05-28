
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
            
            var mdp = document.getElementById("mdp").value;
            var mdp1 = document.getElementById("mdp1").value;
            
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
                    </tr>
                    <tr>
                        <td>
                            Nom:
                        </td>  
                        <td>
                            <input type="text" name="nom" id="name"> <br> 
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
                            Bureau: 
                        </td>  
                        <td>
                            <input type="text" name="bureau" id="bureau"> <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Dispo: 
                        </td>  
                        <td>
                            <input type="text" name="dispo" id="dispo"> <br>
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
                            Sport:
                        </td>  
                        <td>
                            <input type="text" id="sport" name="sport"> <br> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Photo de profil :
                        </td>  
                        <td>
                            <input type="file"id="Profil" name="Profil" accept="image/png, image/jpeg"><br> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            CV :
                        </td>  
                        <td>
                            <input type="file"id="CV" name="CV" accept="image/png, image/jpeg"><br> 
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
                            Diplome:
                        </td>  
                        <td>
                            <input type="text" name="diplome" id="diplome"> <br> 
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Expérience:
                        </td>  
                        <td>
                            <input type="text" name="experience" id="experience"> <br> 
                        </td>
                    </tr>

                    <tr>
                        <td></td>  
                        <td>
                            <input type="submit"  name="ajoutcoach" Value="Ajouter">
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
                    </tr>
                    <tr>
                        <td></td>  
                        <td>
                            <input type="submit"  name="suppcoach" Value="suppcoach">
                        </td>
                    </tr>
                </table>
            </form>
    </div>
    <div  id="creerXML" style="display:none;text-align: center;" >
        <br><br>

        
        <form  action="xml.php" method="post" style="margin : auto; width : 180px">
        <label>Saissisez l'ID du coach dont vous voulez créer le XML</label>
        <input type="text"  name="idcv" placeholder = "ID du coach" >
            <input type="submit"  name="xml" value ="xml " >
        
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
   

