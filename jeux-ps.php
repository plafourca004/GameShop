<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GAMEshop, Jeux Playstation</title>
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
            <div class="col col-md-12 col-sm-12 col-xs-12">
                <main>
                    <h2>Liste des jeux Playstation</h2>
                    <br />
                    <br />
                    <div class="card-deck">
                        <div class="card text-center mb-4 h-100">
                            <div class="card-header">
                                <img src="img/playstation/acValhalla.jpg" class="card-img-top imgS" onclick="agrandir(this.id)"
                                alt="Assassin's Creed : Valahalla sur Playstation" id="jps1">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Assassin's Creed : Valahalla</h5>
                                <p class="card-text">jps1</p>
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
                                <img src="img/playstation/codColdWar.jpg" class="card-img-top imgS" 
                                alt="Call of Duty : Cold War sur Playstation" id="jps2">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Call of Duty : Cold War</h5>
                                <p class="card-text">jps2</p>
                                <p class="card-text">65€</p>
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
                        <div class="card text-center mb-4 h-100">
                            <div class="card-header">
                                <img src="img/playstation/cyberpunk2077.jpg" class="card-img-top imgS" 
                                alt="Cyberpunk 2077 sur Playstation" id="jps3">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Cyberpunk 2077</h5>
                                <p class="card-text">jps3</p>
                                <p class="card-text">50€</p>  
                                <button type="button" class="card-btn btn btn-secondary" id="stock">Montrer le Stock</button> <span id="stock-text" style="visibility:hidden"><span id="stock-number">15</span> en stock</span>                      
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
                                <img src="img/playstation/fifa21.jpg" class="card-img-top imgS" 
                                alt="Fifa 21 sur Playstation" id="jps4">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">FIFA 21</h5>
                                <p class="card-text">jps4</p>
                                <p class="card-text">70€</p>
                                <button type="button" class="card-btn btn btn-secondary" id="stock">Montrer le Stock</button> <span id="stock-text" style="visibility:hidden"><span id="stock-number">11</span> en stock</span>                      
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
                                <img src="img/playstation/fortnite.jpg" class="card-img-top imgS" 
                                alt="Fortnite sur Playstation" id="jps5">
                            </div>
                        <div class="card-body">
                                <h5 class="card-title">Fortnite</h5>
                                <p class="card-text">jps5</p>
                                <p class="card-text">Gratuit</p>
                                <button type="button" class="card-btn btn btn-secondary" id="stock">Montrer le Stock</button> <span id="stock-text" style="visibility:hidden"><span id="stock-number">7</span> en stock</span>                      
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
                        <div class="card text-center mb-4 h-100">
                            <div class="card-header">
                                <img src="img/playstation/gta5.jpg" class="card-img-top imgS" 
                                alt="Grand Theft Auto V sur Playstation" id="jps6">
                            </div>
                        <div class="card-body">
                                <h5 class="card-title">Grand Theft Auto V</h5>
                                <p class="card-text">jps6</p>
                                <p class="card-text">20€</p>
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
                        <div class="w-100 d-none d-sm-block d-md-none">
                            <!-- wrap every 2 on sm-->
                        </div>
                        <div class="w-100 d-none d-md-block d-lg-none">
                            <!-- wrap every 3 on md-->
                        </div>
                        <div class="card text-center mb-4 h-100">
                            <div class="card-header">
                                <img src="img/playstation/minecraft.jpg" class="card-img-top imgS" 
                                alt="Minecraft sur Playstation" id="jps7">
                            </div>
                        <div class="card-body">
                                <h5 class="card-title">Minecraft</h5>
                                <p class="card-text">jps7</p>
                                <p class="card-text">25€</p>
                                <button type="button" class="card-btn btn btn-secondary" id="stock">Montrer le Stock</button> <span id="stock-text" style="visibility:hidden"><span id="stock-number">2</span> en stock</span>                      
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
                                <img src="img/playstation/spiderman.jpg" class="card-img-top imgS" 
                                alt="Marvel's Spider-Man sur Playstation" id="jps8">
                            </div>
                        <div class="card-body">
                                <h5 class="card-title">Marvel's Spider-Man</h5>
                                <p class="card-text">jps8</p>
                                <p class="card-text">40€</p>
                                <button type="button" class="card-btn btn btn-secondary" id="stock">Montrer le Stock</button> <span id="stock-text" style="visibility:hidden"><span id="stock-number">10</span> en stock</span>                      
                                <br/>
                                <button type="button" class="card-btn btn btn-primary" id="decrement" disabled="true">-</button>
                                <span id="number-chosen">0</span>
                                <button type="button" class="card-btn btn btn-primary" id="increment">+</button>    
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary">Ajouter au panier</button>
                            </div>
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