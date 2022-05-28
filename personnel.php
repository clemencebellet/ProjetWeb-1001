<?php

session_start();
$id_session = session_id();
$db = "webprojet";//Nom de la base de données
$site ="localhost";
$db_id = "root"; //ID pour accéder mysql
$db_mdp ="";

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);


if($db_found)
{
    $sql ="SELECT * 
        FROM coach";
        $res = mysqli_query($db_handle,$sql);


        $sql1 ="SELECT sport.Nom
        FROM  sport, coach
        WHERE sport.id_sport=coach.Sport"
        ;
        $res1 = mysqli_query($db_handle,$sql1);

        while($data1 = mysqli_fetch_assoc($res)) 
        { 
            // 1 ligne de donnée
            if($data2 = mysqli_fetch_assoc($res1))

            echo "<div class= personnelbox>";

                if($data1["Nom"]!='Directeur')
                {
                    echo "<span>";
                    echo "Voici le coach de ".$data2["Nom"]. "<br>";
                    echo "</span>";
                    echo "Nom : " . $data1["Nom"] . "<br>";
                    echo "Prenom : " . $data1["Prenom"] . "<br>";
                    echo "Bureau : " . $data1["Bureau"] . "<br>";
                    echo "Dispo : " . $data1["Dispo"] . "<br>";
                    echo "NumeroTel : " . $data1["NumeroTel"] . "<br>";
                    echo "Email : " . $data1["Email"] . "<br>";
                    echo "<br>";
                }
                
                elseif($data1["Nom"]=='Directeur')
                {
                    echo "<span>";
                    echo "Voici le directeur de la salle <br>";
                    echo "</span>";
                    echo "Nom : " . $data1["Nom"] . "<br>";
                    echo "Prenom : " . $data1["Prenom"] . "<br>";
                    echo "Bureau : " . $data1["Bureau"] . "<br>";
                    echo "Dispo : " . $data1["Dispo"] . "<br>";
                    echo "NumeroTel : " . $data1["NumeroTel"] . "<br>";
                    echo "Email : " . $data1["Email"] . "<br>";
                    echo "<br>";
                }
                echo "</div>";
            }

    
        }

?>

<style>
    

.personnelbox{
    margin-top:20px;
    margin-left:20px;
    font-family:'Arial';
    font-size: 20px;
}

.personnelbox span{
    font-size:25px;
    letter-spacing: 2px;
    color: #2a8536;

}