<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GAMEshop, Jeux XBox</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid p-0">
        <!-- Header -->
        <?php
            include("header.php");
        ?>
        <!-- Header -->

        <!-- Contenu -->
        <div class="row text-center" style="height: fit-content;">
            <div class="col col-md-12 col-sm-12 col-xs-12 ">
                <main>
                    <h2>Liste des jeux Xbox</h2>
                    <br />
                    <br />
                    <div class="card-deck">
                        <div class="card text-center mb-4 h-100">
                            <div class="card-header">
                                <img src="img/xbox/acValhalla.jpg" class="card-img-top imgS"
                                alt="Assassin's Creed Valahalla sur Xbox One" id="jx1">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Assassin's Creed : Valahalla</h5>
                                <p class="card-text">jx1</p>
                                <p class="card-text">50€</p>
                                <button type="button" class="card-btn btn btn-secondary" id="stock">Montrer le Stock</button> <span id="stock-text" style="visibility:hidden"><span id="stock-number">1</span> en stock</span>                      
                                <br/>
                                <button type="button" class="card-btn btn btn-primary" id="decrement" disabled="true">-</button>
                                <span id="number-chosen">0</span>
                                <button type="button" class="card-btn btn btn-primary" id="increment">+</button>    
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary">Ajouter au panier</button>
                            </div>
                        </div>
                        <div class="card text-center mb-4 h-100">
                            <div class="card-header">
                                <img src="img/xbox/civ6.jpg" class="card-img-top imgS" 
                                alt="Civilisation 6 sur Xbox One" id="jx2">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Civilisation 6</h5>
                                <p class="card-text">jx2</p>
                                <p class="card-text">15€</p>
                                <button type="button" class="card-btn btn btn-secondary" id="stock">Montrer le Stock</button> <span id="stock-text" style="visibility:hidden"><span id="stock-number">3</span> en stock</span>                      
                                <br/>
                                <button type="button" class="card-btn btn btn-primary" id="decrement" disabled="true">-</button>
                                <span id="number-chosen">0</span>
                                <button type="button" class="card-btn btn btn-primary" id="increment">+</button>    
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary">Ajouter au panier</button>
                            </div>
                        </div>
                        <div class="w-100 d-none d-sm-block d-md-none">
                            <!-- wrap every 2 on sm-->
                        </div>
                        <div class="card text-center mb-4 h-100">
                            <div class="card-header">
                                <img src="img/xbox/fallout4.jpg" class="card-img-top imgS" 
                                alt="Fallout 4 sur Xbox One" id="jx3">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Fallout 4</h5>
                                <p class="card-text">jx3</p>
                                <p class="card-text">30€</p>                          
                                <button type="button" class="card-btn btn btn-secondary" id="stock">Montrer le Stock</button> <span id="stock-text" style="visibility:hidden"><span id="stock-number">8</span> en stock</span>                      
                                <br/>
                                <button type="button" class="card-btn btn btn-primary" id="decrement" disabled="true">-</button>
                                <span id="number-chosen">0</span>
                                <button type="button" class="card-btn btn btn-primary" id="increment">+</button>    
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary">Ajouter au panier</button>
                            </div>
                        </div>
                        <div class="w-100 d-none d-md-block d-lg-none">
                            <!-- wrap every 3 on md-->
                        </div>
                        <div class="card text-center mb-4 h-100">
                            <div class="card-header">
                                <img src="img/xbox/fifa21.jpg" class="card-img-top imgS" 
                                alt="FIFA 21 sur Xbox One" id="jx4">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">FIFA 21</h5>
                                <p class="card-text">jx4</p>
                                <p class="card-text">70€</p>
                                <button type="button" class="card-btn btn btn-secondary" id="stock">Montrer le Stock</button> <span id="stock-text" style="visibility:hidden"><span id="stock-number">0</span> en stock</span>                      
                                <br/>
                                <button type="button" class="card-btn btn btn-primary" id="decrement" disabled="true">-</button>
                                <span id="number-chosen">0</span>
                                <button type="button" class="card-btn btn btn-primary" id="increment">+</button>    
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary">Ajouter au panier</button>
                            </div>
                        </div>
                        <div class="w-100 d-none d-sm-block d-md-none">
                            <!-- wrap every 2 on sm-->
                        </div>
                        <div class="w-100 d-none d-lg-block d-xl-none">
                            <!-- wrap every 4 on lg-->
                        </div>
                        <div class="card text-center mb-4 h-100">
                            <div class="card-header">
                                <img src="img/xbox/nba2k21.jpg" class="card-img-top imgS" 
                                alt="NBA 2K21 sur Xbox One" id="jx5">
                            </div>
                        <div class="card-body">
                                <h5 class="card-title">NBA 2K21</h5>
                                <p class="card-text">jx5</p>
                                <p class="card-text">70€</p>
                                <button type="button" class="card-btn btn btn-secondary" id="stock">Montrer le Stock</button> <span id="stock-text" style="visibility:hidden"><span id="stock-number">5</span> en stock</span>                      
                                <br/>
                                <button type="button" class="card-btn btn btn-primary" id="decrement" disabled="true">-</button>
                                <span id="number-chosen">0</span>
                                <button type="button" class="card-btn btn btn-primary" id="increment">+</button>    
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary">Ajouter au panier</button>
                            </div>
                        </div>
                        <div class="w-100 d-none d-xl-block">
                            <!-- wrap every 5 on xl-->
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