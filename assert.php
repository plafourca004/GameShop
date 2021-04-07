<?php
    require_once("php/varSession.inc.php");

    $fp = fopen('gameshop_data.sql', 'w');

    //INSERT Platform
    foreach ($_SESSION['categories'] as $key => $platform) {
        //$requete = 'INSERT INTO Platform (idPlatform, namePlatform) VALUES (?,?)';
        $requete = "INSERT INTO Platform (idPlatform, namePlatform) VALUES ($key,'".$platform."');\n";
        $test = fwrite($fp, $requete);
    }

    //INSERT User
    foreach ($_SESSION['users'] as $user) {
        $requete = "INSERT INTO User (username, pass) VALUES ('".$user["login"]."','".$user["password"]."');\n";
        $test = fwrite($fp, $requete);
    }
    
    $tabGameName = array();    
    $idGame = 1;
    //INSERT Game Playsation
    foreach ($_SESSION['Playstation'] as $key => $gamePlaystation) {
        
        if(!in_array($gamePlaystation["nom"], array_keys($tabGameName)))
        {
            $requete = "INSERT INTO Game (idGame, nameGame) VALUES (".$idGame.",\"".$gamePlaystation["nom"]."\");\n";
            $test = fwrite($fp, $requete);
            $tabGameName[$gamePlaystation["nom"]] = $idGame;
            $idGame++;
        }

        $requete = "INSERT INTO IsInPlatform (idGame, idPlatform, price, stock, imageURL) VALUES (".$tabGameName[$gamePlaystation["nom"]].",0,".$gamePlaystation["prix"].",".$gamePlaystation["stock"].",\"".$gamePlaystation["imageURL"]."\");\n";
        fwrite($fp, $requete);
    }

    //INSERT Game Xbox
    foreach ($_SESSION['Xbox'] as $gameXbox) {

        if(!in_array($gameXbox["nom"], array_keys($tabGameName)))
        {
            $requete = "INSERT INTO Game (idGame, nameGame) VALUES (".$idGame.",\"".$gameXbox["nom"]."\");\n";
            $test = fwrite($fp, $requete);
            $tabGameName[$gameXbox["nom"]] = $idGame;
            $idGame++;
        }

        $requete = "INSERT INTO IsInPlatform (idGame, idPlatform, price, stock, imageURL) VALUES (".$tabGameName[$gameXbox["nom"]].",1,".$gameXbox["prix"].",".$gameXbox["stock"].",\"".$gameXbox["imageURL"]."\");\n";
        fwrite($fp, $requete);

    }

    //INSERT Game PC
    foreach ($_SESSION['PC'] as $gamePC) {

        if(!in_array($gamePC["nom"], array_keys($tabGameName)))
        {
            $requete = "INSERT INTO Game (idGame, nameGame) VALUES (".$idGame.",\"".$gamePC["nom"]."\");\n";
            $test = fwrite($fp, $requete);
            $tabGameName[$gamePC["nom"]] = $idGame;
            $idGame++;
        }
        
        $requete = "INSERT INTO IsInPlatform (idGame, idPlatform, price, stock, imageURL) VALUES (".$tabGameName[$gamePC["nom"]].",2,".$gamePC["prix"].",".$gamePC["stock"].",\"".$gamePC["imageURL"]."\");\n";
        fwrite($fp, $requete);

    }

    
    
    fclose($fp);
?>
