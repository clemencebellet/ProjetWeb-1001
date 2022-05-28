<?php
session_cache_limiter('private_no_expire, must-revalidate');
session_start();
$id_session = session_id();
$db = "webprojet";
$site ="localhost";
$db_id = "root"; 
$db_mdp ="";



$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);



if($db_found)
{
    if(isset($_POST["Basket"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =1 ";
       
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);
        $sql2 = "SELECT * FROM coach, dispo WHERE id_coach=id_pro and Sport=1";
        $res2 = mysqli_query($db_handle,$sql2);

        echo '<div class="content">';
        if($data = mysqli_fetch_assoc($resbasket)) 
        {
          
            $sqlsport ="SELECT * FROM sport WHERE id_sport =1 ";
            $ressport = mysqli_query($db_handle,$sqlsport);
            $data1 = mysqli_fetch_assoc($ressport);

            echo '<h1><br><br>Voici notre coach référent de BASKET </h1>';
            echo '<div class="affichagenom">';
                echo    $data["Nom"] . "  ". $data["Prenom"];
                $_SESSION['Nomcoach'] =$data["Nom"];
                $_SESSION['Prenomcoach'] =$data["Prenom"];
                $_SESSION['idcoach'] =$data["id_coach"];
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
            echo'<a href="priserdv.php" >  ' . $data['date'] .' </a>';
                echo'<a href="priserdv.php" >  ' . $data['jour'] .' </a>';
                echo'<a href="priserdv.php" >  ' . $data['creneau'] .' </a>';
               
            echo '</div>';
    }
    echo '</div>';
   
    }
    


    else if(isset($_POST["Football"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =2 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);
        $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=2";
        $res2 = mysqli_query($db_handle,$sql2);

        echo '<div class="content">';
        if($data = mysqli_fetch_assoc($resbasket)) 
        {
            $sqlsport ="SELECT * FROM sport WHERE id_sport =2 ";
            $ressport = mysqli_query($db_handle,$sqlsport);
            $data1 = mysqli_fetch_assoc($ressport);

            echo '<h1><br><br>Voici notre coach référent de FOOTBALL </h1>';
            echo '<div class="affichagenom">';
                echo    $data["Nom"] . "  ". $data["Prenom"];
                $_SESSION['Nomcoach'] =$data["Nom"];
                $_SESSION['Prenomcoach'] =$data["Prenom"];
                $_SESSION['idcoach'] =$data["id_coach"];
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
        echo'<a href="priserdv.php" >  ' . $data['date'] .' </a>';
            echo'<a href="priserdv.php" >  ' . $data['jour'] .' </a>';
            echo'<a href="priserdv.php" >  ' . $data['creneau'] .' </a>';
           
        echo '</div>';
    }
    echo '</div>';


    }

    else if(isset($_POST["Rugby"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =3 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);
        $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=3";
        $res2 = mysqli_query($db_handle,$sql2);

        echo '<div class="content">';
        if($data = mysqli_fetch_assoc($resbasket)) 
        {
            $sqlsport ="SELECT * FROM sport WHERE id_sport =3 ";
            $ressport = mysqli_query($db_handle,$sqlsport);
            $data1 = mysqli_fetch_assoc($ressport);

            echo '<h1><br><br>Voici notre coach référent de RUGBY </h1>';
            echo '<div class="affichagenom">';
                echo    $data["Nom"] . "  ". $data["Prenom"];
                $_SESSION['Nomcoach'] =$data["Nom"];
                $_SESSION['Prenomcoach'] =$data["Prenom"];
                $_SESSION['idcoach'] =$data["id_coach"];
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
            echo'<a href="priserdv.php" >  ' . $data['date'] .' </a>';
                echo'<a href="priserdv.php" >  ' . $data['jour'] .' </a>';
                echo'<a href="priserdv.php" >  ' . $data['creneau'] .' </a>';
               
            echo '</div>';
            
        }
        echo '</div>';
    }




    else if(isset($_POST["Tennis"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =4 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);
        $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=4";
        $res2 = mysqli_query($db_handle,$sql2);

        echo '<div class="content">';
        if($data = mysqli_fetch_assoc($resbasket)) 
        {
            $sqlsport ="SELECT * FROM sport WHERE id_sport =4 ";
            $ressport = mysqli_query($db_handle,$sqlsport);
            $data1 = mysqli_fetch_assoc($ressport);

            echo '<h1><br><br>Voici notre coach référent de TENNIS </h1>';
            echo '<div class="affichagenom">';
                echo    $data["Nom"] . "  ". $data["Prenom"];
                $_SESSION['Nomcoach'] =$data["Nom"];
                $_SESSION['Prenomcoach'] =$data["Prenom"];
                $_SESSION['idcoach'] =$data["id_coach"];
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
            echo'<a href="priserdv.php" >  ' . $data['date'] .' </a>';
                echo'<a href="priserdv.php" >  ' . $data['jour'] .' </a>';
                echo'<a href="priserdv.php" >  ' . $data['creneau'] .' </a>';
               
            echo '</div>';
            
        }
        echo '</div>';
    }




    else if(isset($_POST["Natation"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =5 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);
        $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=5";
        $res2 = mysqli_query($db_handle,$sql2);

        echo '<div class="content">';
        if($data = mysqli_fetch_assoc($resbasket)) 
        {
            
             $sqlsport ="SELECT * FROM sport WHERE id_sport =5 ";
            $ressport = mysqli_query($db_handle,$sqlsport);
            $data1 = mysqli_fetch_assoc($ressport);

            
            echo '<h1><br><br>Voici notre coach référent de NATATION </h1>';
            echo '<div class="affichagenom">';
                echo    $data["Nom"] . "  ". $data["Prenom"];
                $_SESSION['Nomcoach'] =$data["Nom"];
                $_SESSION['Prenomcoach'] =$data["Prenom"];
                $_SESSION['idcoach'] =$data["id_coach"];
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
            echo'<a href="priserdv.php" >  ' . $data['date'] .' </a>';
                echo'<a href="priserdv.php" >  ' . $data['jour'] .' </a>';
                echo'<a href="priserdv.php" >  ' . $data['creneau'] .' </a>';
               
            echo '</div>';
            
        }
        echo '</div>';



    }
    else if(isset($_POST["Plongeon"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =6 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);
        $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=6";
        $res2 = mysqli_query($db_handle,$sql2);

        echo '<div class="content">';
        if($data = mysqli_fetch_assoc($resbasket)) 
        {
            $sqlsport ="SELECT * FROM sport WHERE id_sport =6 ";
            $ressport = mysqli_query($db_handle,$sqlsport);
            $data1 = mysqli_fetch_assoc($ressport);

            
            echo '<h1><br><br>Voici notre coach référent de PLONGEON </h1>';
            echo '<div class="affichagenom">';
                echo    $data["Nom"] . "  ". $data["Prenom"];
                $_SESSION['Nomcoach'] =$data["Nom"];
                $_SESSION['Prenomcoach'] =$data["Prenom"];
                $_SESSION['idcoach'] =$data["id_coach"];
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
            echo'<a href="priserdv.php" >  ' . $data['date'] .' </a>';
                echo'<a href="priserdv.php" >  ' . $data['jour'] .' </a>';
                echo'<a href="priserdv.php" >  ' . $data['creneau'] .' </a>';
               
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
 
 
</style>



