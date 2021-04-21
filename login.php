<?php
    session_start();
    require_once("php/bdd.php");
    require_once("php/varSession.inc.php");

    if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){
        //echo'<script>window.location = "index.php"</script>';
        header("location: index.php");
        exit;
    }

    if ( isset($_POST['btnConnexion']) ) {
        $erreurForm = true;
        if ( (!empty($_POST['username'])) && (!empty($_POST['password'])) ) {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            
            $users = $_SESSION["users"];

            connexionBDD();
            $user = getUser($username);
            deconnexionBDD();
            
            if ($user != null) {
                //Vérif du mot de passe
                if (password_verify($password, $user['password'])) {
                    session_start();
                    $erreurForm = false;
                    $_SESSION["logged_in"] = true;
                    $_SESSION["username"] = $username;
                    header("location: index.php");
                    exit;
                }
            }
        }
    }  
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion à votre espace GAMEshop</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid p-0 ">


        <!-- Contenu -->
        <div class="row bg-dark" style="min-height: 95vh;">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <main style="color: white; width: 40vw; ">
                    <a href="index.php" ><img src="img/assets/logo.png" alt="GAMEshop" class="logo"/></a>

                    <h3>Connexion à GAMEshop</h3>
                    
                    <div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="login" method="post">
                        <label id="labelNom" class="important"><?= ($erreurForm) ? "Le nom d'utilisateur ou le mot de passe est incorrect." : "" ?></label>
                        <div class="row">
                            <div class="col form-group">
                                <label for="nomInput">Nom d'utilisateur</label>
                                <input type="text" class="form-control <?= ($erreurForm) ? "is-invalid" : "" ?>" name="username" id="usernameInput" value="<?= (isset($_POST["username"])) ? htmlspecialchars($_POST["username"]) : "" ?>" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group">
                                <label for="nomInput">Mot de passe</label>
                                <input type="password" class="form-control <?= ($erreurForm) ? "is-invalid" : "" ?>" name="password" id="passwordInput"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <input type="submit" name="btnConnexion" class="btn btn-primary mb-2" value="Se connecter" id="btnConnexion" />
                            </div>
                        </div>
                        <br />
                    </form>
                    
                    </div>
                </main>
            </div>
        </div>
        <!-- Contenu -->

        <!-- Footer -->
        <?php
            include("php/footer.php");
        ?>
        <!-- Footer -->
    </div>
</body>

</html>