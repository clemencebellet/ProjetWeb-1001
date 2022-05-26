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
    
/*********MUSCULATION***** */
if (isset($_POST["musculation"]))
{

    $sql = "SELECT * FROM coach WHERE Sport = 7";
    $sql2 = "SELECT * FROM coach, dispo WHERE id_coach=id_pro  and Sport=7";
    $res = mysqli_query($db_handle,$sql);
    $res2 = mysqli_query($db_handle,$sql2);

     echo '<div class="content">';
        while($data = mysqli_fetch_assoc($res))
        { 
      
       
                echo '<h1><br><br>Voici notre coach référent de MUSCULATION </h1>';
                echo '<div class="affichagenom">';
                    echo    $data["Nom"] . "  ". $data["Prenom"];
                echo '</div>';
                echo '<div class="img">';
                    echo '<img src="'.$data['Profil'].' "height=300px />' ;
                echo'</div>';
                
                echo '<div class="CV">';
                    echo "Cliquer pour afficher le  CV";
                    echo'<br>'; echo'<br>';
                    echo '<a href="'.$data['CV'].'" >';
                    echo '<img src="'.$data['CV'].' "height = 150 px /></a>';
                echo '</div>';


        

         }

            echo '<div class="affichagedispoT">';
                echo "Souhaitez-vous prendre un rendez-vous ? ". "<br>";
                echo "Cliquer sur la disponibilité qui vous interesse ". "<br>";
             echo '</div>';
    
        while($data = mysqli_fetch_assoc($res2))
        { 
            echo '<div class="affichagedispo">';
                echo'<a href="priserdv.html" >  ' . $data['jour'] .' </a>';
                echo'<a href="priserdv.html" >  ' . $data['creneau'] .' </a>';
            echo '</div>';
            
        }
    echo '</div>';


}

/*********FITNESS*********/
else if (isset($_POST["fitness"]))
{

    $sql = "SELECT * FROM coach WHERE Sport = 8";
    $res = mysqli_query($db_handle,$sql);
    $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=8";
    $res2 = mysqli_query($db_handle,$sql2);


    echo '<div class="content">';
    while($data = mysqli_fetch_assoc($res))
    { 
      
    
        echo '<h1><br><br>Voici notre coach référent de FITNESS </h1>';
                echo '<div class="affichagenom">';
                    echo    $data["Nom"] . "  ". $data["Prenom"];
                echo '</div>';
                echo '<div class="img">';
                    echo '<img src="'.$data['Profil'].' "height=300px />' ;
                echo'</div>';
                
                echo '<div class="CV">';
                    echo "Cliquer pour afficher le  CV";
                    echo'<br>'; echo'<br>';
                    echo '<a href="'.$data['CV'].'" >';
                    echo '<img src="'.$data['CV'].' "height = 150 px /></a>';
                echo '</div>';
        
        
    }
    
    
    echo '<div class="affichagedispoT">';
        echo "Souhaitez-vous prendre un rendez-vous ? ". "<br>";
        echo "Cliquer sur la disponibilité qui vous interesse ". "<br>";
    echo '</div>';

   
    while($data = mysqli_fetch_assoc($res2))
    { 
        echo '<div class="affichagedispo">';
                echo'<a href="priserdv.html" >  ' . $data['jour'] .' </a>';
                echo'<a href="priserdv.html" >  ' . $data['creneau'] .' </a>';
        echo '</div>';
    }
    echo '</div>';


}


/********BIKING ********* */
else if (isset($_POST["biking"]))
{

    $sql = "SELECT * FROM coach WHERE Sport = 9";
    $res = mysqli_query($db_handle,$sql);
    $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=9";
    $res2 = mysqli_query($db_handle,$sql2);

    echo '<div class="content">';
    while($data = mysqli_fetch_assoc($res))
    { 
      
        echo '<h1><br><br>Voici notre coach référent de BIKING </h1>';
                echo '<div class="affichagenom">';
                    echo    $data["Nom"] . "  ". $data["Prenom"];
                echo '</div>';
                echo '<div class="img">';
                    echo '<img src="'.$data['Profil'].' "height=300px />' ;
                echo'</div>';
                
                echo '<div class="CV">';
                    echo "Cliquer pour afficher le  CV";
                    echo'<br>'; echo'<br>';
                    echo '<a href="'.$data['CV'].'" >';
                    echo '<img src="'.$data['CV'].' "height = 150 px /></a>';
                echo '</div>';
        
    }
 
    echo '<div class="affichagedispoT">';
        echo "Souhaitez-vous prendre un rendez-vous ? ". "<br>";
        echo "Cliquer sur la disponibilité qui vous interesse ". "<br>";
    echo '</div>';
   
    while($data = mysqli_fetch_assoc($res2))
    { 
        echo '<div class="affichagedispo">';
                echo'<a href="priserdv.html" >  ' . $data['jour'] .' </a>';
                echo'<a href="priserdv.html" >  ' . $data['creneau'] .' </a>';
        echo '</div>'; 
    }
    echo '</div>';

}

/********CARDIO ********* */
else if (isset($_POST["cardio"]))
{

    $sql = "SELECT * FROM coach WHERE Sport = 10";
    $res = mysqli_query($db_handle,$sql);
    $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=10";
    $res2 = mysqli_query($db_handle,$sql2);

    echo '<div class="content">';
    while($data = mysqli_fetch_assoc($res))
    { 
        
        echo '<h1><br><br>Voici notre coach référent de CARDIO </h1>';
                echo '<div class="affichagenom">';
                    echo    $data["Nom"] . "  ". $data["Prenom"];
                echo '</div>';
                echo '<div class="img">';
                    echo '<img src="'.$data['Profil'].' "height=300px />' ;
                echo'</div>';
                
                echo '<div class="CV">';
                    echo "Cliquer pour afficher le  CV";
                    echo'<br>'; echo'<br>';
                    echo '<a href="'.$data['CV'].'" >';
                    echo '<img src="'.$data['CV'].' "height = 150 px /></a>';
                echo '</div>';
        
    }
    
    echo '<div class="affichagedispoT">';
        echo "Souhaitez-vous prendre un rendez-vous ? ". "<br>";
        echo "Cliquer sur la disponibilité qui vous interesse ". "<br>";
    echo '</div>';
   
    while($data = mysqli_fetch_assoc($res2))
    { 
        echo '<div class="affichagedispo">';
            echo'<a href="priserdv.html" >  ' . $data['jour'] .' </a>';
            echo'<a href="priserdv.html" >  ' . $data['creneau'] .' </a>';
        echo '</div>';
    }
    echo '</div>';


}

/*****COURS COLLECTIFS********/
else if (isset($_POST["coursCO"]))
{

    $sql = "SELECT * FROM coach WHERE Sport = 11";
    $res = mysqli_query($db_handle,$sql);
    $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=11";
    $res2 = mysqli_query($db_handle,$sql2);


    echo '<div class="content">';
    while($data = mysqli_fetch_assoc($res))
    { 
      
        echo '<h1><br><br>Voici notre coach référent de CARDIO </h1>';
                echo '<div class="affichagenom">';
                    echo    $data["Nom"] . "  ". $data["Prenom"];
                echo '</div>';
                echo '<div class="img">';
                    echo '<img src="'.$data['Profil'].' "height=300px />' ;
                echo'</div>';
                
                echo '<div class="CV">';
                    echo "Cliquer pour afficher le  CV";
                    echo'<br>'; echo'<br>';
                    echo '<a href="'.$data['CV'].'" >';
                    echo '<img src="'.$data['CV'].' "height = 150 px /></a>';
                echo '</div>';
        
    }
    echo '<div class="affichagedispoT">';
        echo "Souhaitez-vous prendre un rendez-vous ? ". "<br>";
        echo "Cliquer sur la disponibilité qui vous interesse ". "<br>";
    echo '</div>';
   
   
    while($data = mysqli_fetch_assoc($res2))
    { 
        echo '<div class="affichagedispo">';
            echo'<a href="priserdv.html" >  ' . $data['jour'] .' </a>';
            echo'<a href="priserdv.html" >  ' . $data['creneau'] .' </a>';
        echo '</div>';
    }
    echo '</div>';


}



 }

?>

<style type="text/css">


 /****CONTENT****/
 
 .content{
    width:900px;
    height: 1100px;
    margin: auto;
    background-color: rgb(223, 231, 209);
    position: relative;
    border-radius:30px;
 }
 
 
 .content h1{
    font-family: 'Times New Roman';
    color: rgb(6, 57, 32);
    font-size: 40px;
    padding-left: 20px;
    margin-top: 70px;
    text-align: center;
    margin-top:20px;
    margin-bottom: 100px;
 }
 
 .affichagenom{
    text-align: center;
    font-family:'Arial';
    font-size:20px;
    margin-bottom:20px;
 }

 .img{
    text-align: center;
 }

 .CV{
    text-align:center;
    font-family:'Arial';
    font-size:20px;
    margin-top:40px;
    margin-bottom:20px;  
 }

 .affichagedispoT{
    text-align: center;
    font-family:'Arial';
    font-size:20px;
    margin-bottom:20px;
 }
 
 .affichagedispo{
    text-align: center;
    font-family:'Arial';
    font-size:20px;
    margin-bottom:20px;
 }
 