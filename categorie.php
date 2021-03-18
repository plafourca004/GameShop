<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GAMEshop, Jeux PC</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"> 
</head>
<body>
    <div class="container-fluid p-0">
         <!-- Header -->
         <?php
            require("varSession.inc.php");
            include("header.php");
        ?>
        <!-- Header -->

        <!-- Contenu -->
        <div class="row text-center" style="height: fit-content;">
            <div class="col col-md-12 col-sm-12 col-xs-12 ">
                <main>
                    <h2>Liste des jeux <?= htmlspecialchars($_GET['cat']); ?></h2>
                    <br />
                    <br />
                    <div class="card-deck">
                            <?php

                            $category = htmlspecialchars($_GET['cat']);

                            if(in_array($category, $_SESSION["categories"]))
                            {
                                foreach($_SESSION[$category] as $jeu)
                                {
                                    echo'<div class="card text-center mb-4 h-100">';
                                    echo'<div class="card-header">';
                                    echo'<img src="'.$jeu['imageURL'].'" class="card-img-top imgS" alt="'.$jeu["nom"].'" id="jpc5">';
                                    echo'</div>';
                                    echo'<div class="card-body">';
                                    echo'<h5 class="card-title">'.$jeu["nom"].'</h5>';
                                    echo'<p class="card-text">'.$jeu["id"].'</p>';
                                    echo'<p class="card-text">'.$jeu["prix"].'€</p>';
                                    echo'<button type="button" class="card-btn btn btn-secondary" id="stock">Montrer le Stock</button> <span id="stock-text" style="visibility:hidden"><span id="stock-number">'.$jeu["stock"].'</span> en stock</span>';            
                                    echo'<br/>';
                                    echo'<button type="button" class="card-btn btn btn-primary" id="decrement" disabled="true">-</button>';
                                    echo'<span id="number-chosen">0</span>';
                                    echo'<button type="button" class="card-btn btn btn-primary" id="increment">+</button>';    
                                    echo'</div>';
                                    echo'<div class="card-footer">';
                                    echo'<button type="button" class="btn btn-primary">Ajouter au panier</button>';
                                    echo'</div>';
                                    echo'</div>';
                                }
                            }
                            else
                            {
                                echo'<h1>Que faites-vous ici ?</h1>';
                                echo'<img src="https://thumbor.sd-cdn.fr/0ZUY2gDYCK4e6Y2hIMVs1399dMM=/940x550/cdn.sd-cdn.fr/wp-content/uploads/2017/05/Rickroll.jpg" />';
                                echo'<br/>';
                                echo'<br/>';
                            }

                            
                            ?>

                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- Contenu -->

        <!-- Header -->
        <?php
            include("footer.php");
        ?>
        <!-- Header -->
    </div>

</body>
</html>