<?php

    require_once("bddData.php");

    function connexionBDD() {

        //On tente créer un nouvel objet PDO pour se connecter à la BDD
        try {
            $GLOBALS['BDD'] = new PDO(
                sprintf('mysql:host=%s;dbname=%s',
                $GLOBALS['DB']['HOST'], 
                $GLOBALS['DB']['NAME']),
                $GLOBALS['DB']['USER'],
                $GLOBALS['DB']['PASS']
            );
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        /*
        echo 'Connexion réussie ';
        echo '</br>';
        echo '</br>';
        */
    }

    function deconnexionBDD() {
        $GLOBALS['BDD'] = null;
    }

    function getUsers() {   
        $reponse = $GLOBALS['BDD']->query("SELECT * FROM User");
        $data = array();
        foreach ($reponse as $row) {
            array_push($data, array('idUser' => $row['idUser'], 'username' => $row['username'], 'password' => $row['pass']));
        }
        
        return ($data == null) ? null : $data;
    }

    function getUser($username) {   
        $reponse = $GLOBALS['BDD']->query('SELECT * FROM User WHERE username = "'.$username.'"');
        $fetch = $reponse->fetchAll();
        if (sizeof($fetch)) {
            $data = array('idUser' => $fetch[0]['idUser'], 'username' => $fetch[0]['username'], 'password' => $fetch[0]['pass']);
        }
        else {
           $data = null;
        }
        
        return ($data == null) ? null : $data;
    }

    function getPlatforms() {
        $reponse = $GLOBALS['BDD']->query("SELECT idPlatform, namePlatform FROM Platform");
        $data = array();
        foreach ($reponse as $row) {
            array_push($data, array('idPlatform' => $row['idPlatform'], 'namePlatform' => $row['namePlatform']));
        }
        
        return ($data == null) ? null : $data;
    }

    function getGames($platform) {
        $reponse = $GLOBALS['BDD']->query('SELECT i.*, p.namePlatform, g.* FROM IsInPlatform i JOIN Platform p ON i.idPlatform = p.idPlatform JOIN Game g ON g.idGame = i.idGame WHERE p.namePlatform = "'.$platform.'"');
        $data = array();
        foreach ($reponse as $row) {
            array_push($data, array('nameGame' => $row['nameGame'], 'namePlatform' => $row['namePlatform'], 'price' => $row['price'], 'stock' => $row['stock'], 'imageURL' => $row['imageURL'], 'idGame' => $row["idGame"]));
        }
        
        return ($data == null) ? null : $data;
    }

    function getGamesName() {
        $reponse = $GLOBALS['BDD']->query("SELECT nameGame FROM Game");
        $data = array();
        foreach ($reponse as $row) {
            array_push($data, array('nameGame' => $row['nameGame']));
        }
        
        return ($data == null) ? null : $data;
    }

    function decreaseStock($nb, $idGame, $idPlatform) {
        $response = $GLOBALS['BDD']->query("UPDATE IsInPlatform SET stock = stock - $nb WHERE idGame = '$idGame' AND idPlatform = '$idPlatform'");
        return $response;
    }
?>