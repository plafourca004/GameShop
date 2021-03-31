<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Votre Panier - GAMEshop</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="js/basket.js"></script>
</head>

<body>
    <div class="container-fluid p-0">

        <!-- Header -->
        <?php

            if(isset($_POST["nbADelete"]))
            {
                array_splice($_SESSION["basket"], $_POST["nbADelete"], 1);
            }


            include("php/header.php");
        ?>

        <!-- Contenu -->
        <div class="row" style="min-height: 95vh;">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <main>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Jeu</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Plateforme</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Supprimer</th>
                        <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if (!empty($_SESSION['basket'])) {
                            
                            foreach($_SESSION['basket'] as $key => $jeu)
                                { 
                                if($jeu['nb'] > $jeu['stock']) $jeu['nb'] = $jeu['stock'];
                                    ?>
                                        <tr>
                                            <td><img src="<?= $jeu['imageURL'] ?>" class="basket-img" alt="<?= $jeu["nom"]?>" id="jpc5"></td>
                                            <td><?= $jeu["nom"] ?></td>
                                            <td><?= $jeu["plateforme"] ?></td>
                                            <td><?= $jeu["prix"] ?>€</td>
                                            <td><?= $jeu["nb"] ?></td>
                                            
                                            <td>
                                                <form action="" method="post">
                                                    <input type="hidden" name="nbADelete" value="<?= $key ?>" />
                                                    <input type="submit" name="delete" class="btn btn-danger" value="Supprimer" />
                                                </form>    
                                            </td>
                                            <td><?= $jeu["nb"]*$jeu["prix"] ?>€</td>

                                        </tr>
                                <?php
                                 }
                        }
                    ?>
                    </tbody>
                    <tbody>
                        <td>Total</td>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <?php
                                $total = 0;
                                foreach($_SESSION['basket'] as $jeu)
                                {
                                    $total += $jeu["nb"]*$jeu["prix"];
                                }

                                echo $total;
                            ?>€</td>
                    
                    </tbody>
                  </table>
                    
                  <button class="btn btn-warning">Commander</button>
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