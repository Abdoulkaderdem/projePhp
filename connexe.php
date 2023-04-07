<?php

$user = "root";
$mdp = "";
$db = "projetPhp";
$server = "localhost";

$con = mysqli_connect($server,$user,$mdp,$db);

if($con) 
{
    echo "connexion établie <br>"  ;
}else {
    die(mysqli_connect_error());
}

?>