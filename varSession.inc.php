<?php

//session_start();

$json = json_decode(file_get_contents("informations.json"), true);


$_SESSION["Playstation"] = $json["jeux"]["Playstation"];

$_SESSION["PC"] = $json["jeux"]["PC"];

$_SESSION["Xbox"] = $json["jeux"]["Xbox"];

$_SESSION["categories"] = $json["categories"];




?>