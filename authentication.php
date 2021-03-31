<?php
    session_start();
    require_once("varSession.inc.php");

    if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){
        //echo'<script>window.location = "index.php"</script>';
        header("location: index.php");
        exit;
    }

    $erreurForm = true;
    if ( isset($_POST['btnConnexion']) ) {
        if ( (!empty($_POST['username'])) && (!empty($_POST['password'])) ) {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            
            $users = $_SESSION["users"];
            $usernameValid = false;
            
            
            //Recherche nom d'utilisateur 
            foreach ($users as $key => $user) {
                $usernameValid = array_search($username, $user);
                if($usernameValid != false){
                    break;
                }
            }

            //Vérif du nom d'utilisateur
            if ($usernameValid != false) {
                //Vérif mot de passe
                if ($password == $user['password']) {
                    session_start();
                    $erreurForm = false;
                    $_SESSION["logged_in"] = true;
                    $_SESSION["username"] = $username;
                    header("location: index.php");
                    exit;
                }
                //Debug mot de passe
                else {
                    echo "<script>console.log('Mauvais mot de passe')</script>";
                }
            } 
            //Debug nom d'utilisateur
            else {
                echo "<script>console.log('Mauvais nom d'utilisateur')</script>";
            }
        }
        //Debug champs vides
        else {
            echo "<script>console.log('Username or password empty')</script>";
        }
    }  
    //Debug total
    else {
        echo "<script>console.log('FAUX')</script>";
    }
?>