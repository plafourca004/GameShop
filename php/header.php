<?php
    require_once("bdd.php");
    connexionBDD();
?>

<!-- Menu -->
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="img/assets/logo.png" alt="GAMEshop" class="logo" />
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText" style="padding-top: 1.5em;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Accueil</a>
                        </li>


                        <?php
                        /*require_once("php/varSession.inc.php");

                        foreach($_SESSION["categories"] as $cat)
                        {
                            echo '<li class="nav-item">';
                            echo '<a class="nav-link" href="categorie.php?cat='.$cat.'">'.$cat.'</a>';
                            echo '</li>';
                        }*/

                        //On récupère les plateformes en BDD
                        $plateformes = getPlatforms();
                        foreach($plateformes as $plateforme)
                        {
                            echo '<li class="nav-item">';
                            echo '<a class="nav-link" href="categorie.php?cat='.$plateforme['namePlatform'].'">'.$plateforme['namePlatform'].'</a>';
                            echo '</li>';
                        }
                        
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php
                            if($_SESSION["logged_in"])
                            {
                                echo '<li class="nav-item">';
                                echo '<a class="nav-link">'.$_SESSION["username"].'</a>';
                                echo '</li>';
                            }
                        ?>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= ($_SESSION["logged_in"]) ? "logout.php" : "login.php" ?>" id="loginBtn"><?= ($_SESSION["logged_in"]) ? "Déconnexion" : "Connexion" ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="basket.php">
                                <i class="fab bi-cart2"></i> Panier <?= (isset($_SESSION["basket"]) ? array_sum(array_column($_SESSION["basket"], "nb")) : 0) ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Menu -->