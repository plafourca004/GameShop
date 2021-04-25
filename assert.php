<?php
    //Fichier qui va permettre de créer les scripts SQL pour ajouter des données en BDD
    //Les données sont contenus dans informations.json et users.json

    $json = json_decode(file_get_contents("informations.json"), true);
    $users = json_decode(file_get_contents("users.json"), true);

    $fp = fopen('gameshop_data.sql', 'w');

    //INSERT Platform
    foreach ($json["categories"] as $key => $platform) {
        $requete = "INSERT INTO Platform (idPlatform, namePlatform) VALUES ($key,'".$platform."');\n";
        $test = fwrite($fp, $requete);
    }

    //INSERT User
    foreach ($users["users"] as $user) {
        $requete = "INSERT INTO User (username, pass, roleUser) VALUES ('".$user["login"]."','".$user["password"]."','".$user["role"]."');\n";
        $test = fwrite($fp, $requete);
    }
    
    $tabGameName = array();    
    $idGame = 1;
    //INSERT Game Playsation
    foreach ($json["jeux"]["Playstation"] as $key => $gamePlaystation) {
        
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
    foreach ($json["jeux"]["Xbox"] as $gameXbox) {

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
    foreach ($json["jeux"]["PC"] as $gamePC) {

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
