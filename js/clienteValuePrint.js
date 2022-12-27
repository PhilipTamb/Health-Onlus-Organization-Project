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
fetch('http://localhost/misericordia/php/queryClientePrint.php',{method: 'post', body: form_data}).then(onResponse).then(onTextReady);

function onResponse(response){
        return response.json();
}

function onTextReady(result){

    let title = document.querySelector('.title');
    let h1 = document.createElement('h1');
    h1.textContent = result.nome;
    title.appendChild(h1);

    let form = document.querySelector('form');

    form.id.setAttribute('value', result.id_cliente);
    form.nome.setAttribute('value', result.nome);
    form.tel.setAttribute('value', result.tel);
    form.citta.setAttribute('value', result.citta);
    form.indirizzo.setAttribute('value', result.indirizzo);
    form.email.setAttribute('value', result.email);

    let submit = document.querySelector('#submit');
    submit.addEventListener('click', update);
   
}


function update(){
    let form = document.querySelector('form');

console.log(form.id.value);



const form_data = new FormData();
form_data.append("id", form.id.value);
form_data.append("nome",form.nome.value );
form_data.append("tel", form.tel.value );
form_data.append("citta", form.citta.value );
form_data.append("indirizzo", form.indirizzo.value );
form_data.append("email", form.email.value );
//form_data.append("", );

fetch('http://localhost/misericordia/php/queryClienteUpdate.php',{method: 'post', body: form_data}).then(onResponse).then(onTextReady);

}