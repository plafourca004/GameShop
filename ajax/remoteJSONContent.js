/*
function loadRemoteTextWithXhr(apiUrl, cb) {

    let xhr = new XMLHttpRequest()
    xhr.onreadystatechange = function () {
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {

                cb(null, this.responseText)
            }
            else {
                cb(new Error("erreur XHR"), null)
            }
        }
    }

    xhr.open("GET", apiUrl, true)
    xhr.send(null)
}*/

/*
function loadRemoteJsonWithXhr(apiUrl, cb) {
    loadRemoteTextWithXhr(apiUrl,function(err,data){
        cb(err,JSON.parse(data))
    })
}

function loadRemoteJsonWithFetchAndCallback(apiUrl, cb) {

    loadRemoteJsonWithFetch(apiUrl).then(function (data) {
        cb(null,data)
    })
}*/

function loadRemoteJsonWithFetch(apiUrl) {
    
    return fetch(apiUrl).then(function (data) {
        return data.json()
    })
}

export {/*loadRemoteTextWithXhr,loadRemoteJsonWithXhr,*/loadRemoteJsonWithFetch as loadRemoteJson}