document.addEventListener("DOMContentLoaded", (e) => {

    //Boutons de stock
    let stockButtons = document.querySelectorAll("#stock")
    stockButtons.forEach(button => button.addEventListener('click', (event) => {
        if (button.innerHTML === "Montrer le Stock") {
            button.innerHTML = "Cacher le Stock"
            button.parentElement.querySelector("#stock-text").style.visibility = "visible"
        }
        else {
            button.innerHTML = "Montrer le Stock"
            button.parentElement.querySelector("#stock-text").style.visibility = "hidden"
        }
    }))

    //Choix du nombre a ajouter au panier
    let incrementers = document.querySelectorAll("#increment")
    let decrementers = document.querySelectorAll("#decrement")

    incrementers.forEach(button => button.addEventListener('click', (event) => {

        max = button.parentElement.querySelector("#stock-number")
        current = button.parentElement.querySelector("#number-chosen")
        if (parseInt(current.innerHTML) < parseInt(max.innerHTML)) {
            current.innerHTML++
        }
    }))

    decrementers.forEach(button => button.addEventListener('click', (event) => {

        current = button.parentElement.querySelector("#number-chosen")
        if (current.innerHTML > 0) {
            current.innerHTML--
        }
    }))

    //Zoom de l'image si click dessus, affichage d'une nouvelle page
    let imageCourante = document.querySelectorAll(".imgS")
    imageCourante.forEach(img => img.addEventListener("click", (event) => {
        let imgSrc = img.src
        w = open("", 'image', 'weigth=toolbar=no,scrollbars=no,resizable=yes, width=1000, height=1000')
        w.document.write("<HTML><BODY onblur=\"window.close();\">")
        w.document.write("<center><IMG src=\"" + imgSrc + "\" alt=\"Image agrandie\" height=\"600px\" width=\"auto\" margin=\"auto\"></center>")
        w.document.write("<script>document.getElementsByTagName(\"IMG\").addEventListener(\"click\", function() { document.getElementById(\"demo\").innerHTML = \"Hello World\"})</script>")
        w.document.write("</BODY></HTML>")
        w.document.close()
    }))

    //Vérification du formulaire
    let clickButton = document.querySelector("#btnContact")
    let formulaire = document.getElementById("contact")

    let tabNomElements = new Array("nom", "prenom", "genre", "mail", "metier", "dateNaiss", "sujet", "message")
    let tabElements = new Array()
    for (let index = 0; index < tabNomElements.length; index++) {

        tabElements.push(formulaire.elements[tabNomElements[index]])
    }

    let tabTexteMissing = new Array("Veuillez mettre un nom", "Veuillez mettre un prenom", "Veuillez choisir un genre", "Veuillez mettre une adresse mail", "Veuillez choisir un métier", "Veuillez mettre une une date de naissance", "Veuillez mettre un sujet", "Veuillez mettre un message")
    let tabRegex = new Array(/[A-Za-z]/, /[A-Za-z]/, "", /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)
    let tabLabelError = new Array("labelNom", "labelPrenom", "labelGenre", "labelMail", "labelMetier", "labelDateNaiss", "labelSujet", "labelMessage")
    let tabExemple = new Array("Exemple : Dupont", "Exemple : Pierre", "", "Exemple : pierre.dupont@exemple.fr", "", "Format : jj/mm/aaaa", "", "")

    let element = {
        cle: tabElements,
        texteMissing: tabTexteMissing,
        regex: tabRegex,
        labelError: tabLabelError,
        exemple: tabExemple
    }

    let formulaireValide = true
    let parent
    clickButton.addEventListener("click", (event) => {
        for (let index = 0; index < element.cle.length; index++) {

            //Si le champs est vide, on passe formulaire vide en false et on informe l'utilisateur
            if (element.cle[index].value == "") {
                formulaireValide = false
                element.cle[index].style.borderColor = "#d52d2d"
                let label = document.getElementById(element.labelError[index])
                label.innerHTML = element.texteMissing[index]
                label.style.color = "#d52d2d"
            }
            else {
                
                if ((element.cle[index].name == "nom") || (element.cle[index].name == "prenom") || (element.cle[index].name == "mail")) {
                    //Si le champs n'est pas juste, on passe formulaire vide en false et on informe l'utilisateur
                    if (!element.cle[index].value.match(element.regex[index])) {
                        formulaireValide = false
                        element.cle[index].style.borderColor = "#d52d2d"
                        let label = document.getElementById(element.labelError[index])
                        label.innerHTML = element.exemple[index]
                        label.style.color = "#d52d2d"
                    }
                }
                else {
                    let label = document.getElementById(element.labelError[index])
                    label.innerHTML = ""
                }
            }           
        }

        //Si le formulaire n'est pas valide on n'envoie pas les données et on affiche un message
        if (!formulaireValide) {
            event.preventDefault()
            let label = document.getElementById("labelBtn")
            label.innerHTML = "Au moins un des champs n'est pas correct"
            label.style.color = "#d52d2d"
        }
    })
})