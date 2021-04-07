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

    /*function getUsers()
    {
        $reponse = $GLOBALS['BDD']->query("SELECT * FROM User");
        $data = $reponse->fetchAll();
        
        return ($data == null) ? null : $data;
    }*/

    /*function getUsers()
    {
        $reponse = $GLOBALS['BDD']->query("SELECT * FROM User");
        //$data = $reponse->fetchAll();
        $data = array();
        foreach ($reponse as $row) {
            array_push($data, 'idUser' => $row['idUser'], 'username' => $row['username'], 'password' => $row['pass'] );
        }
        print_r($data);
        
        return ($data == null) ? null : $data;
    }*/
/*
        $select = 'SELECT themeRetombee, COUNT(idRetombee) FROM RetombeePresse GROUP BY themeRetombee';
        $query = $GLOBALS['BDD']->query($select);
        foreach ($query as $row) {
            echo $row['themeRetombee']." : ".$row['COUNT(idRetombee)'];
            echo '</br>';
        }*/

    function getPlatforms() {
        $reponse = $GLOBALS['BDD']->query("SELECT namePlatform FROM Platform");
        $data = $reponse->fetchAll();
        
        return ($data == null) ? null : $data;
    }

    function getGames($platform) {
        $query = 'SELECT i.*, p.namePlatform, g.nameGame FROM IsInPlatform i JOIN Platform p ON i.idPlatform = p.idPlatform JOIN Game g ON g.idGame = i.idGame WHERE p.namePlatform = "'.$platform.'"';
        $reponse = $GLOBALS['BDD']->query($query);
        $data = $reponse->fetchAll();
        
        return ($data == null) ? null : $data;
    }

    function getGamesName() {
        $query = 'SELECT nameGame FROM Game';
        $reponse = $GLOBALS['BDD']->query($query);
        $data = $reponse->fetchAll();
        
        return ($data == null) ? null : $data;
    }

    
    

    connexionBDD();

    echo "Users : ";
    echo "</br>";
    print_r(getUsers());
    echo "</br>";
    echo "</br>";

   /*echo "Plateformes : ";
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
    echo "</br>";*/



    deconnexionBDD();
    
?>