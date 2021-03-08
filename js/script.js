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
            console.log(current.innerHTML)
            console.log("wow")
            current.innerHTML++
        }
    }))

    decrementers.forEach(button => button.addEventListener('click', (event) => {

        current = button.parentElement.querySelector("#number-chosen")
        if (current.innerHTML > 0) {
            current.innerHTML--
        }
    }))

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

})