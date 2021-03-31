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
            include("header.php");
        ?>
        <!-- Header -->

        <!-- Contenu -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <main>
                    <?php
                        if (empty($_SESSION['basket'])) {
                            echo "<h3>Votre panier est vide</h3>";
                        }
                        else {
                            
                        }
                    ?>
                    
                </main>
            </div>
        </div>
        <!-- Contenu -->

        <!-- Footer -->
        <?php
            include("footer.php");
        ?> 
        <!-- Footer -->
    </div>
</body>

</html>