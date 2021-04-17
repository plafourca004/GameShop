<?php
    include("../php/bdd.php");

    session_start();
    header("Access-Control-Allow-Origin: *");
    header('Content-Type: application/json');
    if(!empty($_SESSION["username"]))
    {
        if( (htmlspecialchars($_GET["nb"]) != null) && (htmlspecialchars($_GET["idGame"]) != null) && (htmlspecialchars($_GET["idPlatform"])  != null) )
        {
            error_log("PAGE LOAD");
            connexionBDD();
            $result = decreaseStock(htmlspecialchars($_GET["nb"]),htmlspecialchars($_GET["idGame"]),htmlspecialchars($_GET["idPlatform"]));
            deconnexionBDD();
            if(empty($result["error"]))
                echo json_encode(array("success" => $result["success"]));
            else
                echo json_encode(array("error" => $result["error"]));
        }
        else
        {
            echo json_encode(array("error" => "Wrong arguments", "test" => $_GET));
        }
    }
    else
    {
        echo json_encode(array("error" => "User not connected"));
    }

?>