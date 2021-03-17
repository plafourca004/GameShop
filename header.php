


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
                        session_start();
                        require("varSession.inc.php");

                        foreach($_SESSION["categories"] as $cat)
                        {
                            echo '<li class="nav-item">';
                            echo '<a class="nav-link" href="categorie.php?cat='.$cat.'">'.$cat.'</a>';
                            echo '</li>';
                        }

                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fab bi-cart2"></i> Panier
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Menu -->