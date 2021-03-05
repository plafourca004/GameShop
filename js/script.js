document.addEventListener("DOMContentLoaded", (e) => {
    let stockButtons = document.querySelectorAll("#stock")

    stockButtons.forEach(button => button.addEventListener('click' , (event) => {
        if(button.innerHTML === "Montrer le Stock")
        {
            button.innerHTML = "Cacher le Stock"
            button.parentElement.querySelector("#stock-restant").style.visibility = "visible"
        }
        else {
            button.innerHTML = "Montrer le Stock"
            button.parentElement.querySelector("#stock-restant").style.visibility = "hidden"
        }
    }))
})