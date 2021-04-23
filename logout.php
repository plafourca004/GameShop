<?php

session_start();
 
//On réinitialise la variable de session
$_SESSION = array();
 
//On détruit la session
session_destroy();
 
//Redirection vers la page d'accueil
header("location: index.php");
exit;
?>