<?php
    if(!isset($_POST["nom"]))
    {
        echo "<h1>Vous faites quoi ici ?</h1>";
        echo "<a href='index.html'>Retour au site</a>";
    }
    else
    {
        print_r($_POST);
        
        $isFormValid = true;

        //array filter enleve les valeurs vides
        if(count(array_filter($_POST)) != 9)
        {
            $isFormValid = false;
        }
        else
        {
            if(!(preg_match('/[A-Za-z]/', $_POST["nom"]) && preg_match('/[A-Za-z]/', $_POST["prenom"]) && filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)))
            {
                $isFormValid = false;
            }
        }

        if($isFormValid)
        {
            header("Location: index.php");
        }
        else
        {
            header("Location: contact.php?erreur=true");
        }
    }
?>