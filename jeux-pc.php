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
                                <img src="img/pc/civ6.jpg" class="card-img-top imgS"
                                alt="Civilization 6 sur PC" id="jpc1">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Civilization VI</h5>
                                <p class="card-text">jpc1</p>
                                <p class="card-text">12€</p>
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
                        <div class="card text-center mb-4 h-100">
                            <div class="card-header">
                                <img src="img/pc/csgo.jpg" class="card-img-top imgS" 
                                alt="Counter Strike Global Offensive sur PC" id="jpc2">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Counter Strike Global Offensive</h5>
                                <p class="card-text">jpc2</p>
                                <p class="card-text">5€</p>
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
                                <img src="img/pc/fortnite.jpg" class="card-img-top imgS" 
                                alt="Fortnite sur PC"  id="jpc3">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Fortnite</h5>
                                <p class="card-text">jpc3</p>
                                <p class="card-text">10€</p>  
                                <button type="button" class="card-btn btn btn-secondary" id="stock">Montrer le Stock</button> <span id="stock-text" style="visibility:hidden"><span id="stock-number">12</span> en stock</span>                      
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
                                <img src="img/pc/minecraft.jpg" class="card-img-top imgS" 
                                alt="Minecraft sur PC" id="jpc4">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Minecraft</h5>
                                <p class="card-text">jpc4</p>
                                <p class="card-text">20€</p>
                                <button type="button" class="card-btn btn btn-secondary" id="stock">Montrer le Stock</button> <span id="stock-text" style="visibility:hidden"><span id="stock-number">9</span> en stock</span>                      
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
                                <img src="img/pc/rocketLeague.jpg" class="card-img-top imgS" 
                                alt="Rocket League sur PC" id="jpc5">
                            </div>
                        <div class="card-body">
                                <h5 class="card-title">Rocket League</h5>
                                <p class="card-text">jpc5</p>
                                <p class="card-text">25€</p>                            
                                <button type="button" class="card-btn btn btn-secondary" id="stock">Montrer le Stock</button> <span id="stock-text" style="visibility:hidden"><span id="stock-number">6</span> en stock</span>                      
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