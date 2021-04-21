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
</head>

<body>
    <div class="container-fluid p-0">

        <!-- Header -->
        <?php

            if(isset($_POST["nbADelete"]))
            {
                array_splice($_SESSION["basket"], $_POST["nbADelete"], 1);
            }

            if(isset($_POST["deleteBasket"]))
            {
                $_SESSION["basket"] = Array();
            }

            include("php/header.php");
        ?>

        <!-- Contenu -->
        <div class="row" style="min-height: 95vh;">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <main>
                <table class="table" <?= (empty($_SESSION['basket'])) ? 'hidden="hidden"' : "" ?>>
                    <thead>
                        <tr>
                        <th scope="col">Jeu</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Plateforme</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Total</th>
                        <th scope="col" style="text-align: center; width:100px">Supprimer</th>
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
                                            <td><img src="<?= $jeu['imageURL'] ?>" class="basket-img" alt="<?= $jeu["nameGame"]?>" id="<?= $jeu["idGame"]?>"></td>
                                            <td id="<?= $jeu["idGame"] ?>"><?= $jeu["nameGame"] ?></td>
                                            <td id="<?=$jeu["idPlatform"] ?>" ><?= $jeu["namePlatform"] ?></td>
                                            <td><?= $jeu["price"] ?>€</td>
                                            <td><?= $jeu["nb"] ?></td>
                                            <td><?= $jeu["nb"]*$jeu["price"] ?>€</td>
                                            
                                            <td style="text-align: center;">
                                                <form action="" method="post">
                                                    <input type="hidden" name="nbADelete" value="<?= $key ?>" />
                                                    <input type="submit" name="delete" class="btn btn-danger" value="Supprimer" />
                                                </form>    
                                            </td>

                                        </tr>
                                <?php
                                 }
                        }
                        else {
                            echo "<h3>Votre panier est vide.</h3>";
                        }
                    ?>
                    </tbody>
                    <tfoot>
                        <td style="vertical-align: middle; font-weight: bold;">Total</td>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="vertical-align: middle; font-weight: bold;">
                            <?php
                                $total = 0;
                                foreach($_SESSION['basket'] as $jeu)
                                {
                                    if ($jeu["nb"] > $jeu["stock"]) {
                                        $total += $jeu["stock"]*$jeu["price"];
                                    } 
                                    else {
                                        $total += $jeu["nb"]*$jeu["price"];
                                    }
                                }

                                echo $total;
                            ?>€
                        </td>
                        
                        <td style="text-align: center;" >
                            <form action="" method="post"  <?= (empty($_SESSION['basket'])) ? 'hidden="hidden"' : "" ?>>
                                <input type="hidden" name="deleteBasket" value="<?= $key ?>" />
                                <input type="submit" name="delete" class="btn btn-danger" value="Supprimer le panier" />
                            </form>
                        </td>
                        
                    
                    </tfoot>
                    </table>

                    <!-- /////////////// -->

                    <?

                        //TODO:
                        // Eviter stock negatif   C'EST FAIT !!! 
                        // Supprimer contenu du basket apres avoir commandé 
                        // Ajout des moyens de paiement
                        //      Le reste des trucs optionnels sur le rendu qui rapportent des points $$$$
                        
                    ?>

                    <!-- /////////////// -->
                    
                    
                    <button class="btn btn-warning" <?= (empty($_SESSION['basket'])) ? 'hidden="hidden"' : "" ?> onclick="commander()">Commander</button>
                    
                    <script type="module">
                        import { loadRemoteJson } from "./ajax/remoteJSONContent.js"   
                        window.loadRemoteJson = loadRemoteJson; //Stack overflow
                    </script>    
                    <script>

                        function commander()
                        {
                            const jeux = document.querySelector("tbody").children
                            for(let i = 0; i < jeux.length; i++)
                            {
                                const quantite = jeux[i].children[4].innerHTML
                                const idGame = jeux[i].children[1].id
                                const idPlatform = jeux[i].children[2].id
                                loadRemoteJson(`./ajax/getJsonProducts.php?call=decreaseStock&nb=${quantite}&idGame=${idGame}&idPlatform=${idPlatform}`)
                                    .then((data) => {
                                        console.log(data)
                                        if(data.success != null)
                                        {
                                            document.location.reload()
                                        }
                                    })
                                
                            }


                        }
                    </script>
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