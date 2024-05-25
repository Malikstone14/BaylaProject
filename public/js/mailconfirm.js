console.log("cc");

let valider = document.querySelector("#valider");
let myname = document.querySelector("#name");
let date = document.querySelector("#date");
let heure = document.querySelector("#heure");
let nbpersonne = document.querySelector("#nbpersonne");
let email = document.querySelector("#email");

valider.addEventListener("click", function(){

    let url = 'http://127.0.0.1:8000/getconfirmation/?';
    url += 'name=' + myname;
    url += '&date=' + date; 
    url += '&heure=' + heure;
    url += '&nbpersonne=' + nbpersonne; 
    url += '&email=' + email;

    window.location = url;
}

);