<?php
    session_start();
    header("Access-Control-Allow-Origin: *");
    header('Content-Type: application/json');
    if(!empty($_SESSION["username"]))
    {
        echo json_encode($_SESSION["basket"]);
    }
    else
    {
        echo json_encode(array("error" => "User not connected"));
    }
?>