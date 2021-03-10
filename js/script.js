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
    let formulmaire = document.getElementById("contact")

    let tabNomElements = new Array("nom", "prenom", "genre", "mail", "metier", "dateNaiss", "sujet", "message")
    let tabElements = new Array()
    for (let index = 0; index < tabNomElements.length; index++) {

        tabElements.push(formulmaire.elements[tabNomElements[index]])
    }

    let tabTexteMissing = new Array("Veuillez mettre un nom", "Veuillez mettre un prenom", "Veuillez choisir un genre", "Veuillez mettre une adresse mail", "Veuillez choisir un métier", "Veuillez mettre une une date de naissance", "Veuillez mettre un sujet", "Veuillez mettre un message")
    let tabRegex = new Array(/[A-Za-z]/, /a/, /a/, /a/, /a/, /a/, /a/, /a/)

    let element = {
        cle: tabElements,
        texteMissing: tabTexteMissing,
        regex: tabRegex
    }

    let formulaireValide = true
    let parent
    clickButton.addEventListener("click", (event) => {
        for (let index = 0; index < element.cle.length; index++) {

            //Si le champs est vide, on passe formulaire vide en false et on informe l'utilisateur
            if (element.cle[index].value == "") {
                formulaireValide = false
                let newLabel = document.createElement('label')
                parent = element.cle[index].parentElement
                element.cle[index].style.borderColor = "#d52d2d"
                newLabel.textContent = element.texteMissing[index]
                newLabel.style.color = "#d52d2d"
                parent.append(newLabel)
            }

            //Si le champs n'est pas juste, on passe formulaire vide en false et on informe l'utilisateur
            if (element.cle[index].value != element.regex[index]) {
                console.log(element.cle[index].value + " != " + element.regex[index])
            }
        }

        //Si le formulaire n'est pas valide on n'envoie pas les données et on affiche un message
        if (!formulaireValide) {
            event.preventDefault()
            let newLabel = document.createElement('label')
            let btn = formulmaire.elements["btnContact"]
            parent = btn.parentElement
            newLabel.textContent = "Au moins un des champs n'est pas correct"
            newLabel.style.color = "#d52d2d"
            parent.append(newLabel)
        }
    })
})