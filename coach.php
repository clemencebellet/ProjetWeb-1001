<!DOCTYPE html>
<html>
<head>
 <title>Compte Coach</title>
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
        <p class="iconeCoach"><img src="images/iconeCoach.jpg" height="352.5px" width="282px"/> </p>
        <h2> <span>BIENVENUE</span> <br>DANS VOTRE COMPTE COACH</h2>
        <h3> Que voulez-vous faire?</h3>
    </div>

    
    <div class ="choix">
                
                <button class="btnn"><a onclick="masquer_div('tchat');">MAIL CLIENTS</a></button>
                <button class="btnn"><a href="rendezvousCoach.php" onclick="masquer_div('info');">MES PROCHAINS RENDEZ-VOUS</a></button>
                <button class="btnn"><a href="anciensrendezvousCoach.php" onclick="masquer_div('anciensrdvs');">MES ANCIENS RENDEZ-VOUS</a></button>
 
    </div>



    <div  id="tchat" style="display:none;text-align: center;" >
    <div id="main">
    <div id="menu">
        <p class="bienvenue">Envoi de mail <b></b></p>
        
    </div>
     
    <div id="messagerie">
   

    </div >
     <br/>
    

    <div id="envoyer">
        <form name="message" action="connect.php" method="post">   
            <input name="clientemail" type="text" id="clientemail" value ="Email du client"/>
            <input name="objet" type="text" id="objet" value ="Objet" />
            <input name="message" type="text" id="message" value ="Message"  />
            <input style ="text-align:center;" type="submit" name="envoyer"  id="envoyer" value="Envoyer" />
        </form>
    </div>
    <?php

?>
</div>
</div>
</div>

</body>
</html>
   





<style>



.titres{
    margin-top: 100px;
    margin-left: 300px;
}

.titres .iconeCoach{
    float: left;
    margin-left: 100px;
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    line-height: 30px;
}

 .titres span{
    font-family: 'Times New Roman';
    color: rgb(49, 69, 185);
    font-size: 70px;
    padding-left: 20px;
    margin-top: 70px;
    margin-left:30px;
   
 }

.titres h2{
    font-family: 'Times New Roman';
    color: rgb(22, 30, 82);
    font-size: 60px;
    padding-left: 20px;
    margin-top: 70px;
 
 
 }

 .titres h3{
    font-family: 'Arial';
    color: rgb(12, 15, 33);
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
    margin-left:70px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn :hover{
    color:rgb(49, 69, 185);
}


.btnn a{
    text-decoration: none;
    color: rgb(185, 185, 185);
    font-weight: bold;
}







#tchat {
    font:12px arial;
    color: #222;
    text-align:center;
    padding:35px; }

  
a {
    color:#010115;
    text-decoration:none; }
  
    a:hover { text-decoration:underline; }
  

  
#loginform { padding-top:18px; }
  
    #loginform p { margin: 5px; }
  
#messagerie {
    text-align:left;
    margin:auto;
    margin-bottom:30px;
    padding:15px;
    background:#fff;
    height:200px;
    width:400px;
    border:1px solid #ACD8F0;
    }
  
#message {
    width:350px;
    border:1px solid #ACD8F0; }
#client {
    
    border:1px solid #ACD8F0; }
  
#envoyer { width: 80px; }
  
  
.bienvenue { position: relative;
left :10px; }
  

  
.msgln { margin:0 0 2px 0; }

#main {
    margin:auto;
    padding-bottom:25px;
    background:#EBF4FB;
    width:504px;
    border:1px solid #ACD8F0; }
#nom{
    text-align : left;
}

</style>

