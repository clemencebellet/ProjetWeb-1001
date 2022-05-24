<?php
session_cache_limiter('private_no_expire, must-revalidate');

session_start();
$id_session = session_id();
$db = "webprojet";
$site ="localhost";
$db_id = "root"; 
$db_mdp ="root";



$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);



if($db_found)
{
    if(isset($_POST["Basket"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =1 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);

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
    }
    

    else if(isset($_POST["Football"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =2 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);

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
    }

    else if(isset($_POST["Rugby"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =3 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);

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
    }
    else if(isset($_POST["Tennis"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =4 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);

        


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
    }
    else if(isset($_POST["Natation"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =5 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);

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
    }
    else if(isset($_POST["Plongeon"])) 
    {
        $sqlcoachbasket ="SELECT * FROM coach WHERE Sport =6 ";
        $resbasket = mysqli_query($db_handle,$sqlcoachbasket);

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
 
 
</style>



