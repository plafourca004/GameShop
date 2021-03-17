<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GAMEshop, Contact</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="js/script.js"></script>
    <script src="js/formulaireContact.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid p-0">
        <!-- Header -->
        <?php
            include("header.php");
        ?>
        <!-- Header -->

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <main>
                    <h2>Contactez nous</h2>
                    <br />

                    <form id="contact">
                        <div class="row">
                            <div class="col form-group">
                                <label for="nomInput">Nom</label><label style="color: #d52d2d;">*</label>
                                <input type="text" class="form-control" name="nom" id="nomInput" placeholder="Votre nom">
                                <label id="labelNom"></label>
                            </div>

                            <div class="col form-group">
                                <label for="prenomInput">Prénom</label><label style="color: #d52d2d;">*</label>
                                <input type="text" class="form-control erreur" name="prenom" id="prenomInput" placeholder="Votre prenom">
                                <label id="labelPrenom"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="genreSelect">Genre</label><label style="color: #d52d2d;">*</label><br />
                                <select class="form-control" name="genre" id="genreSelect">
                                    <option value="" selected disabled>Choisissez un genre</option>
                                    <option value="H">Homme</option>
                                    <option value="F">Femme</option>
                                    <option value="F">Autre</option>
                                </select>
                                <label id="labelGenre"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="emailInput" >Adresse mail</label><label style="color: #d52d2d;">*</label>
                                <input type="text" class="form-control" name="mail" id="mailInput" placeholder="Votre email" >
                                <label id="labelMail"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="metierSelect">Métiers : </label><label style="color: #d52d2d;">*</label><br />
                                <select class="form-control" name="metier" id="metierSelect">
                                    <option value="" selected disabled>Choisissez un métier</option>
                                    <option value="Informaticien">Informaticien</option>
                                    <option value="Pharmacien">Pharmacien</option>
                                    <option value="Boulanger">Boulanger</option>
                                </select>
                                <label id="labelMetier"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="dateNaissanceInput">Date de naissance</label><label style="color: #d52d2d;">*</label>
                                <input type="date" class="form-control" name="dateNaiss" id="dateNaissInput"
                                    placeholder="Votre date de naissance">
                                <label id="labelDateNaiss"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="sujetInput">Sujet de la demande</label><label style="color: #d52d2d;">*</label>
                                <input type="text" class="form-control" name="sujet" id="sujetInput" placeholder="Sujet de la demande">
                                <label id="labelSujet"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="demandeTextarea">Expliquez : </label><label style="color: #d52d2d;">*</label>
                                <textarea class="form-control" name="message" id="messageInput" rows="5"></textarea>
                                <label id="labelMessage"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <input type="submit" name="btnContact" class="btn btn-primary mb-2" value="Envoyer" id="btnContact" />
                                <label id="labelBtn"></label>
                            </div>
                        </div>

                        <br />
                    </form>
                </main>
            </div>  
        </div>

        <!-- Header -->
        <?php
            include("footer.php");
        ?>
        <!-- Header -->
    </div>
</body>

</html>