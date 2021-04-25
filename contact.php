<?php
// Initialize the session
session_start();
?>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid p-0">
        <!-- Header -->
        <?php
            include("php/header.php");
        ?>
        <!-- Header -->

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <main>

                    <h2>Contactez nous</h2>
                    <br />

                    <?php

                    $errorList = array();
                    if(isset($_POST["btnContact"]))
                    {                        
                        $allFormInputs = array("nom","prenom","genre","mail","metier","dateNaiss","sujet","message","btnContact");

                        $isFormValid = true;

                        $inputsNonRemplis = array_diff($allFormInputs,array_keys(array_filter($_POST))); //array filter enleve les valeurs vides
                        
                        if(count($inputsNonRemplis) != 0)
                        {
                            $isFormValid = false;
                            $errorList = array_merge($errorList, $inputsNonRemplis);
                        }   
                        if(!in_array("nom", $errorList) && !preg_match('/[A-Za-z]/', htmlspecialchars($_POST["nom"])))
                        {
                            $isFormValid = false;
                            array_push($errorList, "nom");
                        }
                        if(!in_array("prenom", $errorList) && !preg_match('/[A-Za-z]/', htmlspecialchars($_POST["prenom"])))
                        {
                            $isFormValid = false;
                            array_push($errorList, "prenom");
                        }
                        if(!in_array("mail", $errorList) && !filter_var(htmlspecialchars($_POST["mail"]), FILTER_VALIDATE_EMAIL))
                        {
                            $isFormValid = false;
                            array_push($errorList, "mail");
                        }

                        if($isFormValid)
                        {

                            require_once 'vendor/autoload.php';
                            
                            $subject = "Nouveau contact au sujet de ".$_POST["sujet"];

                            $body = "";
                            $body .= "Nom : ".$_POST['nom']." \n";
                            $body .= "Prénom : ".$_POST['prenom']." \n";
                            $body .= "Genre : ".$_POST['genre']." \n";
                            $body .= "Mail : ".$_POST['mail']." \n";
                            $body .= "Métier : ".$_POST['metier']." \n";
                            $body .= "Date de naissance : ".$_POST['dateNaiss']." \n";
                            $body .= "Sujet : ".$_POST['sujet']." \n";
                            $body .= "Message : ".$_POST['message']." \n";

                            try {
                                // Create the Transport
                                $transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))
                                ->setUsername("gameshop.projetdevweb@gmail.com")
                                ->setPassword('paulkilian')
                                ;
                            
                                // Create the Mailer using your created Transport
                                $mailer = new Swift_Mailer($transport);
                            
                                $message = (new Swift_Message('Email Through Swift Mailer'))
                                ->setFrom(["gameshop.projetdevweb@gmail.com" => "Gameshop - Contact page"])
                                ->setTo(["gameshop.projetdevweb@gmail.com"])
                                ->setBody($body)
                                ->setContentType('text/html');
                                $message->getHeaders()->get('Subject')->setValue($subject); //Ajouter un sujet

                            
                                // Send the message
                                $mailer->send($message);
                            
                                echo 'Email has been sent.';
                            } catch(Exception $e) {
                                echo $e->getMessage();
                            }
                            
                            echo'<script>window.location = "index.php"</script>';
                        }
                    }
                ?>

                    <form action="contact.php" id="contact" method="post">
                        <div class="row">
                            <div class="col form-group">
                                <label for="nomInput">Nom</label><label style="color: #d52d2d;">*</label>
                                <input type="text" class="form-control <?= (in_array("nom", $errorList)) ? "is-invalid" : "" ?>" name="nom" id="nomInput" placeholder="Votre nom" value="<?= (isset($_POST["nom"])) ? htmlspecialchars($_POST["nom"]) : "" ?>" />
                                <label id="labelNom" class="important"><?= (in_array("nom", $errorList)) ? "Merci de renseigner un nom valable" : "" ?></label>
                            </div>

                            <div class="col form-group">
                                <label for="prenomInput">Prénom</label><label style="color: #d52d2d;">*</label>
                                <input type="text" class="form-control <?= (in_array("prenom", $errorList)) ? "is-invalid" : "" ?>" name="prenom" id="prenomInput" placeholder="Votre prenom" value="<?= (isset($_POST["prenom"])) ? htmlspecialchars($_POST["prenom"]) : "" ?>" />
                                <label id="labelPrenom" class="important"><?= (in_array("prenom", $errorList)) ? "Merci de renseigner un prenom valable" : "" ?></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="genreSelect">Genre</label><label style="color: #d52d2d;">*</label><br />
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genre" value="Femme" <?= (!isset($_POST["genre"]) || $_POST["genre"] == "Femme") ? "checked" : "" ?>>
                                    <label class="form-check-label">Femme</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genre" value="Homme" <?= (isset($_POST["genre"]) && $_POST["genre"] == "Homme") ? "checked" : "" ?>>
                                    <label class="form-check-label">Homme</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genre" value="Autre" <?= (isset($_POST["genre"]) && $_POST["genre"] == "Autre") ? "checked" : "" ?>>
                                    <label class="form-check-label">Autre</label>
                                </div>
                                <label id="labelGenre" class="important"><?= (in_array("genre", $errorList)) ? "Merci de renseigner un genre valable" : "" ?></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="emailInput" >Adresse mail</label><label style="color: #d52d2d;">*</label>
                                <input type="text" class="form-control <?= (in_array("mail", $errorList)) ? "is-invalid" : "" ?>" name="mail" id="mailInput" placeholder="Votre email" value="<?= (isset($_POST["mail"])) ? htmlspecialchars($_POST["mail"]) : "" ?>"/>
                                <label id="labelMail" class="important"><?= (in_array("mail", $errorList)) ? "Merci de renseigner un mail valable" : "" ?></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="metierSelect">Métiers : </label><label style="color: #d52d2d;">*</label><br />
                                <select class="form-control <?= (in_array("metier", $errorList)) ? "is-invalid" : "" ?>" name="metier" id="metierSelect">
                                    <option value="" selected disabled>Choisissez un métier</option>
                                    <option value="Informaticien" <?= (isset($_POST["metier"]) && $_POST["metier"] == "Informaticien") ? "selected" : "" ?> >Informaticien</option>
                                    <option value="Pharmacien" <?= (isset($_POST["metier"]) && $_POST["metier"] == "Pharmacien") ? "selected" : "" ?> >Pharmacien</option>
                                    <option value="Boulanger" <?= (isset($_POST["metier"]) && $_POST["metier"] == "Boulanger") ? "selected" : "" ?> >Boulanger</option>
                                </select>
                                <label id="labelMetier" class="important"><?= (in_array("metier", $errorList)) ? "Merci de renseigner un metier valable" : "" ?></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="dateNaissanceInput">Date de naissance</label><label style="color: #d52d2d;">*</label>
                                <input type="date" class="form-control <?= (in_array("dateNaiss", $errorList)) ? "is-invalid" : "" ?>" name="dateNaiss" id="dateNaissInput"
                                    placeholder="Votre date de naissance" value="<?= (isset($_POST["dateNaiss"])) ? htmlspecialchars($_POST["dateNaiss"]) : "" ?>"/>
                                <label id="labelDateNaiss" class="important"><?= (in_array("dateNaiss", $errorList)) ? "Merci de renseigner une date de naissance valable" : "" ?></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="sujetInput">Sujet de la demande</label><label style="color: #d52d2d;">*</label>
                                <input type="text" class="form-control <?= (in_array("sujet", $errorList)) ? "is-invalid" : "" ?>" name="sujet" id="sujetInput" placeholder="Sujet de la demande" value="<?= (isset($_POST["sujet"])) ? htmlspecialchars($_POST["sujet"]) : "" ?>" />
                                <label id="labelSujet" class="important"><?= (in_array("sujet", $errorList)) ? "Merci de renseigner un sujet valable" : "" ?></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="demandeTextarea">Expliquez : </label><label style="color: #d52d2d;">*</label>
                                <textarea class="form-control <?= (in_array("message", $errorList)) ? "is-invalid" : "" ?>" name="message" id="messageInput" rows="5"><?= (isset($_POST["message"])) ? htmlspecialchars($_POST["message"]) : "" ?></textarea>
                                <label id="labelMessage" class="important"><?= (in_array("message", $errorList)) ? "Merci de renseigner un message valable" : "" ?></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <input type="submit" name="btnContact" class="btn btn-primary mb-2" value="Envoyer" id="btnContact" />
                                <label id="labelBtn" class="important"></label>
                            </div>
                        </div>
                        <br />
                    </form>
                </main>
            </div>  
        </div>

        <!-- Header -->
        <?php
            include("php/footer.php");
        ?>
        <!-- Header -->
    </div>
</body>

</html>