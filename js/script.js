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
        relativeDecrementer = button.parentElement.querySelector('#decrement')
        relativeDecrementer.disabled = false
        if (parseInt(current.innerHTML) < parseInt(max.innerHTML)) {
            current.innerHTML++
            if(parseInt(current.innerHTML) == parseInt(max.innerHTML))
            {
                relativeDecrementer.disabled = false
                button.disabled = true
            }
        }
    }))

    decrementers.forEach(button => button.addEventListener('click', (event) => {

        current = button.parentElement.querySelector("#number-chosen")
        relativeIncrementer = button.parentElement.querySelector('#increment')
        relativeIncrementer.disabled = false
        if (current.innerHTML > 0) {
            current.innerHTML--
            if(parseInt(current.innerHTML) == 0)
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
    
    /*
    let loginButton = document.querySelector("#loginBtn");
    loginButton.addEventListener("click", (event) => {
        console.log("Salut toi")
        
    })*/

    
})