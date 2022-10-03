// API Spotify 

const ClientId = "ea7775a62df94f66bc74197f2ed6dcc5"

const ClientSecret = "ee5dd0a6f8b04a499fad28db53d1a773"

const URIs = "http://localhost/reaformation/espace_perso.html"

var scopes = 'user-read-private user-read-email'

var  autho = `https://accounts.spotify.com/authorize?response_type=token&client_id=${ClientId}&scope=${scopes}&redirect_uri=${URIs}`
//decoupe après le #
var url = location.hash
// tableau des valeurs sans le hashtag
let hash = url.slice(1).split('&')
// nourveau tableau sur la première valeur
hash = hash[0].split('=')
//renomination
token = hash[1]
//condition pour eviter la boucle
if (token == undefined) {
    location.href= autho
}

const headers = {
    headers:{
        'Authorization' : "Bearer "+token
    }
}

fetch("https://api.spotify.com/v1/playlists/7oJx24EcRU7fIVoTdqKscK", headers)
// resultat de la promesse
.then(result=>result.json())
// affichage des resultats parser en json
.then(data=>console.log(data))

