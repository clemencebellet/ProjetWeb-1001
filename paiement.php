<?php


$db = "webprojet";
$site ="localhost";
$db_id = "root"; 
$db_mdp ="";

$db_handle = mysqli_connect($site,$db_id,$db_mdp);
$db_found = mysqli_select_db($db_handle,$db);

?>
