<?php

include "cnx.php";
if(isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["tel"])&& isset($_GET["email"]) && isset($_GET["gender"]) )
{
$nom = $_GET["nom"];
$prenom = $_GET["prenom"];
$tel= $_GET["tel"];
$email= $_GET["email"];
$sexe= $_GET["gender"];
$req= mysqli_query($link,"insert into  user(nom,prénom,tel,emial,sexe) values('$nom','$prenom','$tel','$email','$sexe')");
if($req){echo "insertion effectuée";}
else{echo "erreur insertion ";}
}

?>