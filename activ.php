<?php

session_cache_limiter('private_no_expire, must-revalidate');

session_start();
$id_session = session_id();
$db = "webprojet";//Nom de la base de données
$site ="localhost";
$db_id = "root"; //ID pour accéder mysql
$db_mdp =""; //pour mac

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);


if($db_found)
{
    
if (isset($_POST["musculation"]))
{

    $sql = "SELECT * FROM coach WHERE Sport = 7";
    $sql2 = "SELECT * FROM coach, dispo WHERE id_coach=id_pro  and Sport=7";
    $res = mysqli_query($db_handle,$sql);
    $res2 = mysqli_query($db_handle,$sql2);

    
    while($data = mysqli_fetch_assoc($res))
    { 
      
        echo '<div class="affichagecoach">';

        echo "Voici notre coach référent de Muscu". "<br>";
        echo '</div>';

        echo '<div class="affichagenom">';
        echo    $data["Nom"] . "  ". $data["Prenom"];
        echo '</div>';
         
        echo '<div class="img">';
         echo '<img src="'.$data['Profil'].' "height=300px />' ;
         
         echo '<br>';
       
        echo  $data["Bureau"] ;

        echo '<br>';
    
        echo '<br>';

        echo "Cliquez pour voir en grand le CV";

        echo '<br>';
        
        echo '<a href="'.$data['CV'].'" >';
        echo '<img src="'.$data['CV'].' "height = 150 px /></a>';

        echo '</div>';
        
        
    }
    echo '<div class="affichagedispoT">';
    echo "Vous souhaitez prendre un rendez-vous avec lui ? ". "<br>";
    echo "Cliquez sur la disponibilité qui vous interesse ". "<br>";
    echo '</div>';
   
    while($data = mysqli_fetch_assoc($res2))
    { 
        echo '<div class="affichagedispo">';
        echo'<a href="priserdv.html" >  ' . $data['jour'] .' </a>';
        echo'<a href="priserdv.html" >  ' . $data['creneau'] .' </a>';
       
        echo '</div>';
        
        
    }
   


}

else if (isset($_POST["fitness"]))
{

    $sql = "SELECT * FROM coach WHERE Sport = 8";
    $res = mysqli_query($db_handle,$sql);
    $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=8";
    $res2 = mysqli_query($db_handle,$sql2);


    while($data = mysqli_fetch_assoc($res))
    { 
      
        echo '<div class="affichagecoach">';

        echo "Voici notre coach référent de Fitness". "<br>";
        echo '</div>';

        echo '<div class="affichagenom">';
        echo    $data["Nom"] . "  ". $data["Prenom"];
        echo '</div>';
         
        echo '<div class="img">';
         echo '<img src="'.$data['Profil'].' "height=300px />' ;
         
         echo '<br>';
       
        echo  $data["Bureau"] ;

        echo '<br>';
    
        echo '<br>';

        echo "Cliquez pour voir en grand le CV";

        echo '<br>';
        
        echo '<a href="'.$data['CV'].'" >';
        echo '<img src="'.$data['CV'].' "height = 150 px /></a>';

        echo '</div>';
        
        
    }
    echo '<div class="affichagedispoT">';
    echo "Vous souhaitez prendre un rendez-vous avec lui ? ". "<br>";
    echo "Cliquez sur la disponibilité qui vous interesse ". "<br>";
    echo '</div>';
   
    while($data = mysqli_fetch_assoc($res2))
    { 
        echo '<div class="affichagedispo">';
        echo'<a href="rendezvous.php" >  ' . $data['jour'] .' </a>';
        echo'<a href="rendezvous.php" >  ' . $data['creneau'] .' </a>';
  
        echo '</div>';
        
        
    }


}
else if (isset($_POST["biking"]))
{

    $sql = "SELECT * FROM coach WHERE Sport = 9";
    $res = mysqli_query($db_handle,$sql);
    $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=9";
    $res2 = mysqli_query($db_handle,$sql2);

    while($data = mysqli_fetch_assoc($res))
    { 
      
        echo '<div class="affichagecoach">';

        echo "Voici notre coach référent de Biking". "<br>";
        echo '</div>';

        echo '<div class="affichagenom">';
        echo    $data["Nom"] . "  ". $data["Prenom"];
        echo '</div>';
         
        echo '<div class="img">';
         echo '<img src="'.$data['Profil'].' "height=300px />' ;
         
         echo '<br>';
       
        echo  $data["Bureau"] ;

        echo '<br>';
    
        echo '<br>';

        echo "Cliquez pour voir en grand le CV";

        echo '<br>';
        
        echo '<a href="'.$data['CV'].'" >';
        echo '<img src="'.$data['CV'].' "height = 150 px /></a>';

        echo '</div>';
        
        
    }
    echo '<div class="affichagedispoT">';
    echo "Vous souhaitez prendre un rendez-vous avec lui ? ". "<br>";
    echo "Cliquez sur la disponibilité qui vous interesse ". "<br>";
    echo '</div>';
   
    while($data = mysqli_fetch_assoc($res2))
    { 
        echo '<div class="affichagedispo">';
        echo'<a href="rendezvous.php" >  ' . $data['jour'] .' </a>';
        echo'<a href="rendezvous.php" >  ' . $data['creneau'] .' </a>';
       
        echo '</div>';
        
        
    }


}
else if (isset($_POST["cardio"]))
{

    $sql = "SELECT * FROM coach WHERE Sport = 10";
    $res = mysqli_query($db_handle,$sql);
    $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=10";
    $res2 = mysqli_query($db_handle,$sql2);

    while($data = mysqli_fetch_assoc($res))
    { 
      
        echo '<div class="affichagecoach">';

        echo "Voici notre coach référent de Cardio Training". "<br>";
        echo '</div>';

        echo '<div class="affichagenom">';
        echo    $data["Nom"] . "  ". $data["Prenom"];
        echo '</div>';
         
        echo '<div class="img">';
         echo '<img src="'.$data['Profil'].' "height=300px />' ;
         
         echo '<br>';
       
        echo  $data["Bureau"] ;

        echo '<br>';
    
        echo '<br>';

        echo "Cliquez pour voir en grand le CV";

        echo '<br>';
        
        echo '<a href="'.$data['CV'].'" >';
        echo '<img src="'.$data['CV'].' "height = 150 px /></a>';

        echo '</div>';
        
        
    }
    echo '<div class="affichagedispoT">';
    echo "Vous souhaitez prendre un rendez-vous avec lui ? ". "<br>";
    echo "Cliquez sur la disponibilité qui vous interesse ". "<br>";
    echo '</div>';
   
    while($data = mysqli_fetch_assoc($res2))
    { 
        echo '<div class="affichagedispo">';
        echo'<a href="rendezvous.php" >  ' . $data['jour'] .' </a>';
        echo'<a href="rendezvous.php" >  ' . $data['creneau'] .' </a>';
       
        echo '</div>';
        
        
    }


}
else if (isset($_POST["coursCO"]))
{

    $sql = "SELECT * FROM coach WHERE Sport = 11";
    $res = mysqli_query($db_handle,$sql);
    $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=11";
    $res2 = mysqli_query($db_handle,$sql2);

    while($data = mysqli_fetch_assoc($res))
    { 
      
        echo '<div class="affichagecoach">';

        echo "Voici notre coach référent de Cours Collectifs". "<br>";
        echo '</div>';

        echo '<div class="affichagenom">';
        echo    $data["Nom"] . "  ". $data["Prenom"];
        echo '</div>';
         
        echo '<div class="img">';
         echo '<img src="'.$data['Profil'].' "height=300px />' ;
         
         echo '<br>';
       
        echo  $data["Bureau"] ;

        echo '<br>';
    
        echo '<br>';

        echo "Cliquez pour voir en grand le CV";

        echo '<br>';
        
        echo '<a href="'.$data['CV'].'" >';
        echo '<img src="'.$data['CV'].' "height = 150 px /></a>';

        echo '</div>';
        
        
    }
    echo '<div class="affichagedispoT">';
    echo "Vous souhaitez prendre un rendez-vous avec lui ? ". "<br>";
    echo "Cliquez sur la disponibilité qui vous interesse ". "<br>";
    echo '</div>';
   
    while($data = mysqli_fetch_assoc($res2))
    { 
        echo '<div class="affichagedispo">';
        echo'<a href="rendezvous.php" >  ' . $data['jour'] .' </a>';
        echo'<a href="rendezvous.php" >  ' . $data['creneau'] .' </a>';
        
        echo '</div>';
        
        
    }


}



 }

?>

<style type="text/css">
.affichagecoach{ 
    
    text-align: center ;
    font-size : 80px;

 }
.img{
    float : left;
    position: relative;
    top : 100px;
    padding-left: 10 px ;
    text-align: center ;
    

}

.affichagenom{ 
    
    position: relative;
    top : 80px;
    left : 110px;
    font-size :25px;
    
 }

 .affichagedispoT{ 
    
    position: relative;
    top : 160px;
    left : 110px;
    font-size :20px;
    
 }

 .affichagedispo{ 
    
    position: relative;
    top : 170px;
    left : 110px;
    font-size :20px;
    
 }
 
 
</style>
