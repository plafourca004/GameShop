<?php
// Initialize the session
session_start();
?>

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
            
            require("php/varSession.inc.php");

            if(isset($_POST["nom"]))
            {
                $index = -1;
                foreach($_SESSION["basket"] as $key => $jeu)
                {
                    if($jeu["id"] == $_POST["id"])
                    {
                        echo '<script>console.log("wow")</script>';
                        $index = $key;
                        break;
                    } 
                }
                if($index == -1)
                {
                    array_push($_SESSION["basket"], $_POST);
                }
                else
                {
                    $_SESSION["basket"][$index]["nb"] += $_POST["nb"];
                }
            }


            include("php/header.php");

        ?>  





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
                                //affichage des jeu
                                foreach($_SESSION[$category] as $jeu)
                                { ?>
                                    <div class="card text-center mb-4 h-100">
                                        <div class="card-header">
                                            <img src="<?= $jeu['imageURL'] ?>" class="card-img-top imgS" alt="<?= $jeu["nom"]?>" id="jpc5">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $jeu["nom"] ?></h5>
                                            <p class="card-text"><?= $jeu["id"] ?></p>
                                            <p class="card-text"><?= $jeu["prix"] ?>€</p>
                                            <button type="button" class="card-btn btn btn-secondary" id="stock">Montrer le Stock</button> <span id="stock-text" style="visibility:hidden"><span id="stock-number"><?= $jeu["stock"] ?></span> en stock</span>         
                                            <br/>
                                            <button type="button" class="card-btn btn btn-primary" id="decrement" disabled="true">-</button>
                                            <span id="number-chosen">1</span>
                                            <button type="button" class="card-btn btn btn-primary" id="increment">+</button>
                                        </div>
                                        <div class="card-footer">
                                            <form action="categorie.php?cat=<?= $category ?>" method="post">
                                                <?php
                                                foreach($jeu as $key => $value)
                                                {
                                                    echo '<input type="hidden" name="'.$key.'" value="'.$value.'" />';
                                                }
                                                echo '<input type="hidden" name="plateforme" value="'.$category.'" />';
                                                echo '<input type="hidden" name="nb" class="inputNb" value="1" />';
                                                ?>
                                                
                                                <input type="submit" class="btn btn-primary" value="Ajouter au panier" />
                                            </form>
                                            
                                        </div>
                                    </div>
                                <?php
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

        <!-- Footer -->
        <?php
            include("php/footer.php");
        ?>
        <!-- Footer -->
    </div>

</body>
</html>