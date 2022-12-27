// lettura attributi GET 
var query = window.location.search.substring(1);
var strList = query.split('&');

var parts = strList[0].split('=');
var id = parts[1];

console.log(id);

var data = new String();
var column = new String();
    
const form_data = new FormData();
form_data.append("id", id);
fetch('http://localhost/misericordia/php/queryPersonaPrint.php',{method: 'post', body: form_data}).then(onResponse).then(onTextReady);

function onResponse(response){
        return response.json();
}

function onTextReady(result){

    let title = document.querySelector('.title');
    let h1 = document.createElement('h1');
    h1.textContent = result.nome+"  "+ result.cognome;
    title.appendChild(h1);

    let form = document.querySelector('form');

    form.id.setAttribute('value', result.id_utente);
    form.cognome.setAttribute('value', result.cognome);
    form.nome.setAttribute('value', result.nome);
    form.tel.setAttribute('value', result.tel);
    form.citta_nascita.setAttribute('value', result.citta_nascita);
    form.data_nascita.setAttribute('value', result.data_nascita);
    form.citta_residenza.setAttribute('value', result.citta_residenza);
    form.indirizzo.setAttribute('value', result.indirizzo);
    form.email.setAttribute('value', result.email);
    form.user.setAttribute('value', result.user);
    let ruolo = document.querySelector('#ruolo');
    form.ruolo[0].textContent = result.ruolo;
    form.ruolo[0].setAttribute('value', result.ruolo);
    //form..setAttribute('value', result.);

    let submit = document.querySelector('#submit');
    submit.addEventListener('click', update);
   
}


function update(){
    let form = document.querySelector('form');

console.log(form.id.value);



const form_data = new FormData();
form_data.append("id", form.id.value);
form_data.append("cognome", form.cognome.value );
form_data.append("nome",form.nome.value );
form_data.append("tel", form.tel.value );
form_data.append("citta_nascita", form.citta_nascita.value );
form_data.append("data_nascita", form.data_nascita.value );
form_data.append("citta_residenza", form.citta_residenza.value );
form_data.append("indirizzo", form.indirizzo.value );
form_data.append("email", form.email.value );
form_data.append("user", form.user.value );
form_data.append("ruolo", form.ruolo.value );
//form_data.append("", );

fetch('http://localhost/misericordia/php/queryPersonaUpdate.php',{method: 'post', body: form_data}).then(onResponse).then(onTextReady);

}