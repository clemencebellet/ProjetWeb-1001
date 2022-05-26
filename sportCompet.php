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

        if($data = mysqli_fetch_assoc($resbasket)) 
        {
          
            $sqlsport ="SELECT * FROM sport WHERE id_sport =1 ";
            $ressport = mysqli_query($db_handle,$sqlsport);
            $data1 = mysqli_fetch_assoc($ressport);

            echo '<div class="affichagecoach">';

            echo "Coach de ". $data1["Nom"]. "<br>";
            echo '</div>';

            echo '<div class="affichagenom">';
            echo    $data["Nom"] . "  ". $data["Prenom"];
            $_SESSION['Nomcoach'] =$data["Nom"];
            $_SESSION['Prenomcoach'] =$data["Prenom"];
            $_SESSION['idcoach'] =$data["id_coach"];
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
        echo'<a href="priserdv.php" >  ' . $data['date'] .' </a>';
        echo'<a href="priserdv.php" >  ' . $data['jour'] .  " ". $data['creneau'] .' </a>';
      
        
        echo '</div>';
        
        
    }
   
    }
    

    else if(isset($_POST["Football"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =2 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);
        $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=2";
        $res2 = mysqli_query($db_handle,$sql2);


        if($data = mysqli_fetch_assoc($resbasket)) 
        {
            $sqlsport ="SELECT * FROM sport WHERE id_sport =2 ";
            $ressport = mysqli_query($db_handle,$sqlsport);
            $data1 = mysqli_fetch_assoc($ressport);

            echo '<div class="affichagecoach">';

            echo "Coach de ". $data1["Nom"]. "<br>";
            echo '</div>';

            echo '<div class="affichagenom">';
            echo    $data["Nom"] . "  ". $data["Prenom"];
            $_SESSION['Nomcoach'] =$data["Nom"];
            $_SESSION['Prenomcoach'] =$data["Prenom"];
            $_SESSION['idcoach'] =$data["id_coach"];
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
        echo'<a href="priserdv.php" >  ' . $data['date'] .' </a>';
        echo'<a href="priserdv.php" >  ' .$data['jour'] .  " ". $data['creneau'] .' </a>';
        
        
        echo '</div>';
        
        
    }
    }

    else if(isset($_POST["Rugby"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =3 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);
        $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=3";
        $res2 = mysqli_query($db_handle,$sql2);

        if($data = mysqli_fetch_assoc($resbasket)) 
        {
            $sqlsport ="SELECT * FROM sport WHERE id_sport =3 ";
            $ressport = mysqli_query($db_handle,$sqlsport);
            $data1 = mysqli_fetch_assoc($ressport);

            echo '<div class="affichagecoach">';

            echo "Coach de ". $data1["Nom"]. "<br>";
            echo '</div>';

            echo '<div class="affichagenom">';
            echo    $data["Nom"] . "  ". $data["Prenom"];
            $_SESSION['Nomcoach'] =$data["Nom"];
            $_SESSION['Prenomcoach'] =$data["Prenom"];
            $_SESSION['idcoach'] =$data["id_coach"];
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
            echo'<a href="priserdv.php" >  ' . $data['date'] .' </a>';
            echo'<a href="priserdv.php" >  ' . $data['jour'] .  " ". $data['creneau'] .' </a>';
           
            
            echo '</div>';
            
            
        }
    }
    else if(isset($_POST["Tennis"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =4 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);
        $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=4";
        $res2 = mysqli_query($db_handle,$sql2);

        


        if($data = mysqli_fetch_assoc($resbasket)) 
        {
            $sqlsport ="SELECT * FROM sport WHERE id_sport =4 ";
            $ressport = mysqli_query($db_handle,$sqlsport);
            $data1 = mysqli_fetch_assoc($ressport);

            echo '<div class="affichagecoach">';

            echo "Coach de ". $data1["Nom"]. "<br>";
            echo '</div>';

            echo '<div class="affichagenom">';
            echo    $data["Nom"] . "  ". $data["Prenom"];
            $_SESSION['Nomcoach'] =$data["Nom"];
            $_SESSION['Prenomcoach'] =$data["Prenom"];
            $_SESSION['idcoach'] =$data["id_coach"];
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
            echo'<a href="priserdv.php" >  ' . $data['date'] .' </a>';
            echo'<a href="priserdv.php" >  ' . $data['jour'] .  " ". $data['creneau'].' </a>';
            
            
            echo '</div>';
            
            
        }
    }
    else if(isset($_POST["Natation"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =5 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);
        $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=5";
        $res2 = mysqli_query($db_handle,$sql2);

        if($data = mysqli_fetch_assoc($resbasket)) 
        {
            
             $sqlsport ="SELECT * FROM sport WHERE id_sport =5 ";
            $ressport = mysqli_query($db_handle,$sqlsport);
            $data1 = mysqli_fetch_assoc($ressport);

            echo '<div class="affichagecoach">';

            echo "Coach de ". $data1["Nom"]. "<br>";
            echo '</div>';

            echo '<div class="affichagenom">';
            echo    $data["Nom"] . "  ". $data["Prenom"];
            $_SESSION['Nomcoach'] =$data["Nom"];
            $_SESSION['Prenomcoach'] =$data["Prenom"];
            $_SESSION['idcoach'] =$data["id_coach"];
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
            echo'<a href="priserdv.php" >  ' . $data['date'] .' </a>';
            echo'<a href="priserdv.php" >  ' . $data['jour'] .  " ". $data['creneau'].' </a>';
             
          
            echo '</div>';
            
            
        }
    }
    else if(isset($_POST["Plongeon"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =6 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);
        $sql2 = "SELECT * FROM coach, dispo WHERE id_pro =id_coach and Sport=6";
        $res2 = mysqli_query($db_handle,$sql2);

        if($data = mysqli_fetch_assoc($resbasket)) 
        {
            $sqlsport ="SELECT * FROM sport WHERE id_sport =6 ";
            $ressport = mysqli_query($db_handle,$sqlsport);
            $data1 = mysqli_fetch_assoc($ressport);

            echo '<div class="affichagecoach">';

            echo "Coach de ". $data1["Nom"]. "<br>";
            echo '</div>';

            echo '<div class="affichagenom">';
            echo    $data["Nom"] . "  ". $data["Prenom"];
            $_SESSION['Nomcoach'] =$data["Nom"];
            $_SESSION['Prenomcoach'] =$data["Prenom"];
            $_SESSION['idcoach'] =$data["id_coach"];
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
            echo'<a href="priserdv.php" >  ' . $data['date'] .' </a>';
            echo'<a href="priserdv.php" >  ' . $data['jour'] .  " ". $data['creneau'].' </a>';
             
            
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



