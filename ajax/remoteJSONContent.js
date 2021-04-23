function loadRemoteJsonWithFetch(apiUrl) {
    
    return fetch(apiUrl).then(function (data) {
        return data.json()
    })
}

export {loadRemoteJsonWithFetch as loadRemoteJson}