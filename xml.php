<?php

header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='utf-8'?>";
$db = "webprojet";//Nom de la base de données
$site ="localhost";
$db_id = "root"; //ID pour accéder mysql
$db_mdp ="";


$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);



 //connect to BDD

 if($db_found)
 { 
     if(isset($_POST["xml"]))
    {
        $idcv = isset($_POST["idcv"])? $_POST["idcv"] : "";
        $sqlblindage ="SELECT * FROM coach WHERE EXISTS ( SELECT * WHERE id_coach = '$idcv')";
        $resblindage = mysqli_query($db_handle,$sqlblindage);

        if($data = mysqli_fetch_assoc($resblindage)) {

            $xmlFile = new DOMDocument('1.0', 'utf-8');
            $xmlFile->appendChild($cv = $xmlFile->createElement('CV'));
            $sql =  "SELECT * FROM coach WHERE id_coach='$idcv'"; 
            $resinfo = mysqli_query($db_handle,$sql);

            while($data = mysqli_fetch_assoc($resinfo)) 
            
                    {   
                        $cv->appendChild($info = $xmlFile->createElement('InformationsPerso'));
                        $info->appendChild($xmlFile->createElement('Nom', $data['Nom']));
                        $info->appendChild($xmlFile->createElement('Prenom', $data['Prenom']));
                        $info->appendChild($xmlFile->createElement('Bureau', $data['Bureau']));
                        $info->appendChild($xmlFile->createElement('Telephone', $data['NumeroTel']));
                        $info->appendChild($xmlFile->createElement('Mail', $data['Email']));
                        $cv->appendChild($travail = $xmlFile->createElement('Professionnel'));
                        $travail->appendChild($xmlFile->createElement('Adresse', $data['adresse']));
                        $travail->appendChild($xmlFile->createElement('Diplome', $data['diplome']));
                        $travail->appendChild($xmlFile->createElement('Experience', $data['experience']));
                    } 
                    $xmlFile->formatOutput = true;
                    $xmlFile->save('CV.xml');
    }
    else {
        echo '<script type="text/javascript">
        alert("Erreur. Id du coach saisi incorrect!");
        </script>';
    }
   
    
   

 }
}
 


?>

