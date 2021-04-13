import { loadRemoteJson } from "./ajax/remoteJSONContent.js";  

document.addEventListener("DOMContentLoaded", (e) => {
    console.log("tout en haut")
    

    /*
    let button = querySelector("#commandeButton")
    console.log("Coucou")
    
    button.addEventListener("onclick", (e) => {

        const jeux = window.querySelector("tbody").children
        for(let i = 0; i < jeux.length; i++)
        {
            const quantite = jeux[i].children[4].innerHTML
            const idGame = jeux[i].children[1].id
            const idPlatform = jeux[i].children[2].id
            loadRemoteJson(`./ajax/getJsonProducts.php?nb=${quantite}&idGame=${idGame}&idPlatform=${idPlatform}`)
                .then(console.log("Update du stock terminee"))
            console.log("in the for")
        }
    })*/
})