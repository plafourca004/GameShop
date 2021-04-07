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

    
    

    connexionBDD();

    echo "Users : ";
    echo "</br>";
    print_r(getUsers()[0]);
    echo "</br>";
    echo "</br>";

   echo "Plateformes : ";
    echo "</br>";
    print_r(getPlatforms()[0]);
    echo "</br>";
    echo "</br>";

    echo "Jeux Xbox : ";
    echo "</br>";
    print_r(getGames("Xbox")[0]);
    echo "</br>";
    echo "</br>";

    echo "Nom des jeux : ";
    echo "</br>";
    print_r(getGamesName()[0]);
    echo "</br>";
    echo "</br>";



    deconnexionBDD();
    
?>