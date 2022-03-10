<?php

$user="root";
$mdp="";
$db="projet";
$server="localhost";

$link=mysqli_connect($server,$user,$mdp,$db);
if($link)
{
    // echo"connexion établir";
}
else{
    die(mysqli_connect_error());
}







?>