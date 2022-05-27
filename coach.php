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


<style>

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


</head>
<body>
    <div id="Nav">
        <a href="accueil.html"><img src="images/accueil.png" width="150" height="50"></a>
        <a href="ToutParcourir.html"><img src="images/toutparcourir.png" width="150" height="50"></a>
    </div>
    <h3 style="text-align:center">Qu'est ce que vous voulez faire ?</h3>
    <form style="text-align:center">
        <input type="button" Value="Mail Clients" onclick="masquer_div('tchat');">
        <a href="rendezvousCoach.php"><input type="button" Value="Mes prochains rdvs" onclick="masquer_div('info');"></a>
        <a href="anciensrendezvousCoach.php"><input type="button" Value="Mes anciens rendez-vous" onclick="masquer_div('anciensrdvs');"></a>
    </form>

    <div  id="tchat" style="display:none;text-align: center;" >
    <div id="main">
    <div id="menu">
        <p class="bienvenue">Envoi de mail <b></b></p>
        
    </div>
     
    <div id="messagerie">
   

    </div>
     <br/>
    

    <form name="message" action="accueil.html">
        
    
    <input name="client" type="text" id="client" value ="Nom du client"/>
    
        <input name="message" type="text" id="message"  />
        <input style ="text-align:center; "name="envoyer" type="submit"  id="envoyer" value="Envoyer" />
    </form>
    <?php


?>
</div>
</div>
</div>

</body>
</html>
   

