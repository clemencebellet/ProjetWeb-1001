<?php


$db = "webprojet";//Nom de la base de données
$site ="localhost";
$db_id = "root"; //ID pour accéder mysql
$db_mdp ="";

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);


if($db_found)
{ 
    if(isset($_POST["ajoutcoach"])) {

        echo "Connect to BDD"; 
        $id = $_POST["id"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $bureau = $_POST["bureau"];
        $dispo = $_POST["dispo"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $mdp = $_POST["mdp"];
        $sport = $_POST["sport"];
        $Profil = "images/Profil/".$_POST["Profil"];
        $CV = "images/".$_POST["CV"];

        $adresse = $_POST["adresse"];
        $diplome = $_POST["diplome"];
        $experience = $_POST["experience"];
        if (empty($id) || empty($nom) || empty($prenom)||empty($bureau)||empty($dispo)||empty($tel)|| empty($email) || empty($mdp) || empty($sport)|| empty($adresse)|| empty($diplome)|| empty($experience))
    { 
        echo '<script type="text/javascript">
        alert("Un champ est vide , reesayer ");
        location="admin.html";
        </script>';
    }
    else{

        $sql =  "INSERT INTO coach(id_coach,Nom,Prenom,Bureau,Dispo,NumeroTel,Email,Mdp,Sport,Profil,CV,adresse,diplome,experience)
                VALUES('$id','$nom','$prenom','$bureau','$dispo','$tel','$email','$mdp','$sport','$Profil','$CV','$adresse','$diplome','$experience')";
        $res = mysqli_query($db_handle,$sql);

        if($res) { 
            echo '<script type="text/javascript">
            alert("Nouveau Coach ajouté !");
            location="admin.php";
            </script>';
        }
        else {
            echo "Insert unsuccessful";
        }
    }}

    elseif (isset($_POST["suppcoach"])) {
        
        $idsupp = $_POST["idsupp"];
        $sqlblindage ="SELECT * FROM coach WHERE EXISTS ( SELECT * WHERE id_coach = '$idsupp')";
        $resblindage = mysqli_query($db_handle,$sqlblindage);

        if (empty($idsupp))
        { 
            echo '<script type="text/javascript">
            alert("Le champ est vide , reesayer ");
            location="admin.html";
            </script>';
        }

      //  if($res)  {
            if($data = mysqli_fetch_assoc($resblindage)) { 
                
                $sql =  "DELETE FROM coach
                WHERE id_coach='$idsupp'"; 
                $res = mysqli_query($db_handle,$sql);

                if($res) {
            
                    echo '<script type="text/javascript">
                    alert("Coach numéro '.$idsupp .' supprimé !");
                    location="admin.php";
                    </script>';
                }
            }
        
            else {
                    echo '<script type="text/javascript">
                    alert("Erreur. Id du coach saisi incorrect!");
                    location="admin.php";
                    </script>';
                }

    }

  
}

?>