document.addEventListener("DOMContentLoaded", (e) => {
    //Vérification du formulaire
    let clickButton = document.querySelector("#btnContact")
    let formulaire = document.getElementById("contact")

    //On désactive le submit automatique lors du cliquage sur le bouton pour s'en occuper nous même
    formulaire.addEventListener('submit', (event) => {
        event.preventDefault();
    });


    let tabNomElements = new Array("nom", "prenom", "genre", "mail", "metier", "dateNaiss", "sujet", "message")
    let tabElements = new Array()
    for (let index = 0; index < tabNomElements.length; index++) {

        tabElements.push(formulaire.elements[tabNomElements[index]])
    }

    const tabTexteMissing = new Array("Veuillez mettre un nom", "Veuillez mettre un prenom", "Veuillez choisir un genre", "Veuillez mettre une adresse mail", "Veuillez choisir un métier", "Veuillez mettre une une date de naissance", "Veuillez mettre un sujet", "Veuillez mettre un message")
    const tabRegex = new Array(/[A-Za-z]/, /[A-Za-z]/, "", /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)
    const tabLabelError = new Array("labelNom", "labelPrenom", "labelGenre", "labelMail", "labelMetier", "labelDateNaiss", "labelSujet", "labelMessage")
    const tabExemple = new Array("Exemple : Dupont", "Exemple : Pierre", "", "Exemple : pierre.dupont@exemple.fr", "", "Format : jj/mm/aaaa", "", "")

    const element = {
        cle: tabElements,
        texteMissing: tabTexteMissing,
        regex: tabRegex,
        labelError: tabLabelError,
        exemple: tabExemple
    }
    clickButton.addEventListener("click", (event) => {
        

        let formulaireValide = true
        for (let index = 0; index < element.cle.length; index++) {

            let label = document.getElementById(element.labelError[index])

            //Si le champs est vide, on passe formulaire vide en false et on informe l'utilisateur
            if (element.cle[index].value == "") {
                formulaireValide = false
                element.cle[index].style.borderColor = "#d52d2d"
                label.innerHTML = element.texteMissing[index]
                label.style.color = "#d52d2d"
            }
            else {
                

                element.cle[index].style.borderColor = "#000000"
                label.innerHTML = ""
                label.style.color = "#000000"

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
            }           
        }

        //Si le formulaire n'est pas valide on n'envoie pas les données et on affiche un message
        
        let label = document.getElementById("labelBtn")

        if (!formulaireValide) {
            label.innerHTML = "Au moins un des champs n'est pas correct"
            label.style.color = "#d52d2d"
        }
        else {
            formulaire.submit()
            label.innerHTML = ""
        }
    })
})