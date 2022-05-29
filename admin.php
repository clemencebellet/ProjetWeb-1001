
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
        <p class="iconeAdmin"><img src="images/iconeAdmin.jpg" height="352.5px" width="282px"/> </p>
        <h2> <span>BIENVENUE</span> <br>DANS VOTRE COMPTE ADMIN</h2>
        <h3> Que voulez-vous faire?</h3>
</div>

    
<div class ="choix">
                
         <button class="btnn"><a onclick="masquer_div('ajoutcoach');">AJOUTER DES COACHS</a></button>
         <button class="btnn"><a onclick="masquer_div('suppcoach');">SUPPRIMER DES COACHS</a></button>
         <button class="btnn"><a onclick="masquer_div('creerXML');">CREER UN XML</a></button>
         <button class="btnn"><a onclick="masquer_div('infos');">INFORMATIONS DISPONIBILITES</a></button>

</div>



<div  id="ajoutcoach" style="display:none" >

                
    <div class="form"><form  action="NewCoach.php" method="post" style="margin : auto; width : 180px">
            <h3 >Nouveau Coach</h3>
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
                        <input type="submit"  name="ajoutcoach" Value="Valider" style="margin-top: 15px; background: #e50101; color: rgb(0, 0, 0); cursor:pointer ">
                    </td>
                </tr>
            </table>
        </form>
    </div>    
</div>




    <div  id="suppcoach" style="display:none;" >
   
            <div class="form2"><form  action="NewCoach.php" method="post" style="margin : auto; width : 180px">
                <h3>Supprimer un Coach</h3>
                <h4>Saisir l'ID:<h/4>
                <table>
                    <tr>  
                        <td>
                            <input type="text" name="idsupp" id="idsupp"> <br> 
                        </td>
                    </tr>
                    <tr>
                        <td></td>  
                        <td>
                            <input type="submit"  name="suppcoach" Value="supprimer" style="margin-top: 15px; background: #e50101; color: rgb(0, 0, 0); cursor:pointer; ">
                        </td>
                    </tr>
                </table>
                </form>
            </div>
    </div>




    <div class="creerXML"  id="creerXML" style="display:none;text-align: center;" >
        <br><br>

        
        <form  action="xml.php" method="post" style="margin : auto; width : 180px">
        <h1>Saissisez l'ID du coach dont vous voulez créer le XML</h1>
        <input type="text"  name="idcv" placeholder = "ID du coach" >
            <input type="submit"  name="xml" value ="Creer XML " >
        
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
            echo "<p style='font-size: 25px; color: #1ad39f;'>"  . $dataclient["jour"] ." ". $dataclient["date"] ." - ". $dataclient["creneau"] ."</p>". "<br>";
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
   if(isset($_POST["Info"]))
   {
   $info = isset($_POST["info"])? $_POST["info"] : "";
   $sqlblindage ="SELECT * FROM coach WHERE EXISTS ( SELECT * WHERE id_coach = '$info')";
   $resblindage = mysqli_query($db_handle,$sqlblindage);

   if($data1 = mysqli_fetch_assoc($resblindage)) {
   
        $sqlinfo = "SELECT * FROM coach WHERE  id_coach='$info'";
        $resinfo = mysqli_query($db_handle,$sqlinfo);
        $sqlcreaneaux = "SELECT * FROM dispo WHERE  id_pro='$info'";
        $rescreneaux = mysqli_query($db_handle,$sqlcreaneaux);

        while($datainfo = mysqli_fetch_assoc($resinfo)) 
        {       
        echo "Voici les créneaux disponibles de " . $datainfo['Nom'] . " " .  $datainfo['Prenom'] . "<br><br>";
                        
        } 
                            
        while($data = mysqli_fetch_assoc($rescreneaux))
        { 
            
            echo $data['jour'] . " " . $data['creneau']. "<br>" ;

        }
    }
    else {
        echo '<script type="text/javascript">
        alert("Erreur. Id du coach saisi incorrect!");
        location="admin.php";
        </script>';
        }
   }

?>
</div>
       

</body>
</html>
   






<style>

/* TITRES */


.titres{
    margin-top: 100px;
    margin-left: 300px;
}

.titres .iconeAdmin{
    float: left;
    margin-left: 100px;
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    line-height: 30px;
}

 .titres span{
    font-family: 'Times New Roman';
    color: #d40000;
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




 
 /******  CHOIX DU COACH ******/
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
    color:#d40000;
}


.btnn a{
    text-decoration: none;
    color: rgb(185, 185, 185);
    font-weight: bold;
}





/***** AFFICHAGE AJ COACH ******/

.form h3{
    font-family: 'Arial';
    color: #000000;
    font-size: 40px;
    text-align: center;
    position: relative;
    padding-left:  20px;
    padding-bottom: 15px;
    margin-top: 20px;
    letter-spacing: 2px;
}
.form h4{
    font-family: 'Arial';
    color: #000000;
    font-size: 20px;
    text-align: center;
   position: relative;
    padding-left:  20px;
    padding-bottom: 15px;
    margin-top: 20px;
    letter-spacing: 2px;
}


.form{
    width: 500px;
    height: 900px;
    background: rgb(244, 244, 244);
    margin-left: 600px;
    margin-top: 100px;
    margin-bottom: 100px;
    top: -20px;
    transform: translate(0%,-5%);
    border-radius: 90px;
    padding: 25px;
}

.form input{
    width: 240px;
    height: 35px;
    background: transparent;
    border: 1px solid #d40000;
    border-radius: 10px;
    color: rgb(0, 0, 0);
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 10px;
    font-family: sans-serif;
}

/****SUPP UN COACH ****/

.form2 h3{
    font-family: 'Arial';
    color: #000000;
    font-size: 30px;
    text-align:center;
    position: relative;
    padding-left:  20px;
    padding-bottom: 15px;
    margin-top: 20px;
    letter-spacing: 2px;
}
.form2 h4{
    font-family: 'Arial';
    color: #000000;
    font-size: 20px;
    text-align: center;
   position: relative;
    padding-left:  20px;
    padding-bottom: 15px;
    margin-top: 20px;
    letter-spacing: 2px;
}


.form2{
    width:  400px;
    height: 300px;
    background: rgb(244, 244, 244);
    margin-left: 600px;
    margin-top: 100px;
    margin-bottom: 100px;
    top: -20px;
    transform: translate(0%,-5%);
    border-radius: 90px;
    padding: 25px;
}

.form2 input{
    width: 240px;
    height: 35px;
    background: transparent;
    border: 1px solid #d40000;
    border-radius: 10px;
    color: rgb(0, 0, 0);
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 10px;
    font-family: sans-serif;
}


/**** CREER XML ******/

.creerXML{

    width:  400px;
    height: 300px;
    background: rgb(244, 244, 244);
    margin-left: 800px;
    margin-top: 100px;
    margin-bottom: 100px;
    top: -20px;
    transform: translate(0%,-5%);
    border-radius: 90px;
    padding: 25px;

}

.creerXML h1{
    font-family: 'Arial';
    color: #000000;
    font-size: 20px;
    text-align: center;
   position: relative;
    padding-left:  0px;
    padding-bottom: 15px;
    margin-top: 10px;
    letter-spacing: 2px;

}


.creerXML input{
    width: 240px;
    height: 35px;
    background: transparent;
    border: 1px solid #d40000;
    border-radius: 10px;
    color: rgb(0, 0, 0);
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 10px;
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



