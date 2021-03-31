<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>GAMEshop, Achetez des jeux</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid p-0">

        <!-- Header -->
        <?php
            include("php/header.php");
        ?>
        <!-- Header -->

        <!-- Contenu -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <main class="text-center">
                    <h3>Bienvenue sur GAMEshop</h3>
                    <p>Vous trouverez ici tous les jeux que vous désirez !</p></br>
                    <p class="important">Attention, suite à la pandémie de COVID-19, les délais de livraison peuvent
                        être rallongés. Mais ne vous inquiétez pas, votre commande arrive.</p></br>
                    <img src="img/actu/xbox_series_x.jpg" alt="Nouvelle Xbox Series X" class="img-front" /></br></br>
                    <strong>
                        <p>La nouvelle Xbox Series X est dès à présent disponible chez GAMEshop</p>
                        <p>Ne vous ruez pas dessus, il y en aura pour tout le monde.</p>
                    </strong>
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