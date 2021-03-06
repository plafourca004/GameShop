document.addEventListener("DOMContentLoaded", (e) => {

    //Boutons de stock
    let stockButtons = document.querySelectorAll("#stock")
    stockButtons.forEach(button => button.addEventListener('click' , (event) => {
        if(button.innerHTML === "Montrer le Stock")
        {
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

    incrementers.forEach(button => button.addEventListener('click' , (event) => {
        
        max = button.parentElement.querySelector("#stock-number")
        current = button.parentElement.querySelector("#number-chosen")
        if(parseInt(current.innerHTML) < parseInt(max.innerHTML))
        {
            console.log(current.innerHTML)
            console.log("wow")
            current.innerHTML++
        }
    }))

    decrementers.forEach(button => button.addEventListener('click' , (event) => {
        
        current = button.parentElement.querySelector("#number-chosen")
        if(current.innerHTML > 0)
        {
            current.innerHTML--
        }
    }))    

})