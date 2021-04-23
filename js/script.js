
import { loadRemoteJson } from "../ajax/remoteJSONContent.js"   
window.loadRemoteJson = loadRemoteJson; //Stack overflow 

document.addEventListener("DOMContentLoaded", (e) => {


    const urlParams = new URLSearchParams(window.location.search)
    const platformName = urlParams.get('cat')


    //Récupération des jeux en fonction de la plateforme
    let tabGames = []
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let response = JSON.parse(this.responseText)
            if (response["error"] == null) {
                for (let index = 0; index < response['games'].length; index++) {
                    tabGames.push(response['games'][index])
                }
                console.log(tabGames)
            } 
            else {
                console.log(response["error"])
            }
            
        }
    };
    xhttp.open("GET", `./ajax/getJsonProducts.php?call=getGames&platform=${platformName}`, true);
    xhttp.send();


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

        const idJeu = button.parentElement.querySelector(".gameName").id;
        let stock = tabGames.filter(g => g.idGame === idJeu)[0].stock;

        let current = button.parentElement.querySelector("#number-chosen")
        let nbInput = button.parentElement.parentElement.querySelector(".inputNb");
        let relativeDecrementer = button.parentElement.querySelector('#decrement')
        relativeDecrementer.disabled = false
        if (parseInt(current.innerHTML) < parseInt(stock)) {
            current.innerHTML++
            nbInput.value = current.innerHTML;
            if(parseInt(current.innerHTML) == parseInt(stock))
            {
                relativeDecrementer.disabled = false
                button.disabled = true
            }
        }
    }))

    decrementers.forEach(button => button.addEventListener('click', (event) => {
        
        let current = button.parentElement.querySelector("#number-chosen")
        let nbInput = button.parentElement.parentElement.querySelector(".inputNb");
        let relativeIncrementer = button.parentElement.querySelector('#increment')
        relativeIncrementer.disabled = false
        if (current.innerHTML > 1) {
            current.innerHTML--
            nbInput.value = current.innerHTML;
            if(parseInt(current.innerHTML) == 1)
            {
                relativeIncrementer.disabled = false
                button.disabled = true
            }
        }
    }))

    //Zoom de l'image si click dessus, affichage d'une nouvelle page
    let imageCourante = document.querySelectorAll(".imgS")
    imageCourante.forEach(img => img.addEventListener("click", (event) => {
        let imgSrc = img.src
        w = open("", 'image', 'weigth=toolbar=no,scrollbars=no,resizable=yes, width=1000, height=800')
        w.document.write("<HTML><BODY onblur=\"window.close();\">")
        w.document.write("<center><IMG src=\"" + imgSrc + "\" alt=\"Image agrandie\" height=\"600px\" width=\"auto\" margin=\"auto\"></center>")
        w.document.write("<script>document.getElementsByTagName(\"IMG\").addEventListener(\"click\", function() { document.getElementById(\"demo\").innerHTML = \"Hello World\"})</script>")
        w.document.write("</BODY></HTML>")
        w.document.close()
    }))
    

    
})