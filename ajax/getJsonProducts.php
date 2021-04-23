<?php
    include("../php/bdd.php");

    session_start();
    header("Access-Control-Allow-Origin: *");
    header('Content-Type: application/json');
    //Decrease le stock d'un jeu d'un certain nombre
    if( (htmlspecialchars($_GET["call"]) == "decreaseStock" && htmlspecialchars($_GET["nb"]) != null) && (htmlspecialchars($_GET["idGame"]) != null) && (htmlspecialchars($_GET["idPlatform"])  != null) )
    {
        error_log("PAGE LOAD");
        connexionBDD();
        $result = decreaseStock(htmlspecialchars($_GET["nb"]),htmlspecialchars($_GET["idGame"]),htmlspecialchars($_GET["idPlatform"]));
        deconnexionBDD();
        if(empty($result["error"]))
        {
            echo json_encode(array("success" => $result["success"]));
            $_SESSION["basket"] = Array();
        }
        else
        {
            echo json_encode(array("error" => $result["error"]));
        }
    }
    //Get liste des jeux de la plateforme passée en paramètre
    else if(htmlspecialchars($_GET["call"]) == "getGames" && htmlspecialchars($_GET["platform"]) != null)
    {
        //get games d'une plateforme (va nous servir à récup le stock de chaque jeux en JS)
        error_log("PAGE LOAD");
        connexionBDD();
        $result = getGames(htmlspecialchars($_GET["platform"]));
        deconnexionBDD();
        if ($result != null) {
            echo json_encode(array("success" => $result["success"], "games" => $result));
        }
        else {
            echo json_encode(array("error" => "Erreur lors de la récupération des jeux"));
        }
    }
    else
    {
        echo json_encode(array("error" => "Wrong arguments", "test" => $_GET));
    }


?>