<?php


$db = "webprojet";
$site ="localhost";
$db_id = "root"; 
$db_mdp ="";

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);

$Email = isset($_POST["Email"])? $_POST["Email"] : "";
$Mdp = isset($_POST["Mdp"])? $_POST["Mdp"] : "";

if($db_found)
{
    $sql ="SELECT * FROM client WHERE EXISTS ( SELECT * WHERE Email = '$Email' AND Mdp ='$Mdp' )";
    $sql1 ="SELECT * FROM administrateur WHERE EXISTS ( SELECT * WHERE Email = '$Email' AND Mdp ='$Mdp' )";
    $sql2 ="SELECT * FROM coach WHERE EXISTS ( SELECT * WHERE Email = '$Email' AND Mdp ='$Mdp' )";

        $res = mysqli_query($db_handle,$sql);
        $res1 = mysqli_query($db_handle,$sql1);
        $res2 = mysqli_query($db_handle,$sql2);

          if($data1 = mysqli_fetch_assoc($res)) 
        {
            echo'<script type="text/javascript">
            alert("Authetification réussie");
            location="client.html";
            </script>';
            
            
        }
        elseif($data1 = mysqli_fetch_assoc($res1))
        {
            echo'<script type="text/javascript">
            alert("Authetification réussie");
            location="admin.html";
            </script>';
        }
        elseif($data2 = mysqli_fetch_assoc($res2))
        {
            echo'<script type="text/javascript">
            alert("Authetification réussie");
            location="coach.html";
            </script>';
        }

        else
        
        {echo'<script type="text/javascript">
            alert("Ratée");
            location="compte.html";
            
            </script>';}
        
       
}


?>
