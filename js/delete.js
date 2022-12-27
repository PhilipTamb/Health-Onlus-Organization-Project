function deleteFunction(){
    
    let form_data = new FormData();
    form_data.append("id", id);
    form_data.append("object", object);
    console.log(id);
console.log(object);
    fetch('http://localhost/misericordia/php/queryDelete.php',{method: 'post', body: form_data}).then(onResponse);

    function onResponse(){ 

        if( object == 'ordine'){
            window.location.href = 'http://localhost/misericordia/dashboard.php'
        }
        if( object == 'utente'){
            window.location.href = 'http://localhost/misericordia/gestione_personale.php'
        }
        if( object == 'mezzo'){
            window.location.href = 'http://localhost/misericordia/gestione_mezzi.php'
        }
        if( object == 'cliente'){
            window.location.href = 'http://localhost/misericordia/gestione_clienti.php'
        }
    }


}

// lettura attributi GET 
var query = window.location.search.substring(1);

var strList = query.split('&');

var parts1 = strList[0].split('=');
var parts2 = strList[1].split('=');
var id = parts1[1];
var object = parts2[1];


console.log(id);
console.log(object);

let  containerPrint = document.querySelector('.containerPrint');

const containerConfirm = document.createElement('div');
containerConfirm.classList.add('containerConfirm');
containerPrint.appendChild(containerConfirm);

let containerText = document.createElement('div');
containerText.classList.add('containerText');

if( object == 'utente'){
    console.log(object);
    
    containerText.textContent = 'Sei sicuro di voler eliminare questo utente?';
    containerConfirm.appendChild(containerText);

    let containerButton = document.createElement('div');
    containerButton.classList.add('containerButton');
    containerConfirm.appendChild(containerButton);

    let aDelete = document.createElement('a');
    aDelete.classList.add('button');
    aDelete.setAttribute('id', 'buttonNegative');
    aDelete.textContent = 'Elimina';
    containerButton.appendChild(aDelete);

    let a = document.createElement('a');
    a.classList.add('button');
    a.setAttribute('id', 'buttonPositive');
    a.textContent = 'Indietro';
    a.href = ('gestione_personale.php');
    containerButton.appendChild(a);
}
if( object == 'ordine'){
    console.log(object);
    containerText.textContent = 'Sei sicuro di voler eliminare questo ordine?';
    containerConfirm.appendChild(containerText);

    let containerButton = document.createElement('div');
    containerButton.classList.add('containerButton');
    containerConfirm.appendChild(containerButton);

    let aDelete = document.createElement('a');
    aDelete.classList.add('button');
    aDelete.setAttribute('id', 'buttonNegative');
    aDelete.textContent = 'Elimina';
    containerButton.appendChild(aDelete);

    let a = document.createElement('a');
    a.classList.add('button');
    a.setAttribute('id', 'buttonPositive');
    a.textContent = 'Indietro';
    a.href = ('dashboard.php');
    containerButton.appendChild(a);

}
if( object == 'mezzo'){  
    console.log(object);
    containerText.textContent = 'Sei sicuro di voler eliminare questo mezzo?';
    containerConfirm.appendChild(containerText);

    let containerButton = document.createElement('div');
    containerButton.classList.add('containerButton');
    containerConfirm.appendChild(containerButton);

    let aDelete = document.createElement('a');
    aDelete.classList.add('button');
    aDelete.setAttribute('id', 'buttonNegative');
    aDelete.textContent = 'Elimina';
    containerButton.appendChild(aDelete);

    let a = document.createElement('a');
    a.classList.add('button');
    a.setAttribute('id', 'buttonPositive');
    a.textContent = 'Indietro';
    a.href = ('gestione_mezzi.php');
    containerButton.appendChild(a);
    
}

if( object == 'cliente'){  
    console.log(object);
    containerText.textContent = 'Sei sicuro di voler eliminare questo mezzo?';
    containerConfirm.appendChild(containerText);

    let containerButton = document.createElement('div');
    containerButton.classList.add('containerButton');
    containerConfirm.appendChild(containerButton);

    let aDelete = document.createElement('a');
    aDelete.classList.add('button');
    aDelete.setAttribute('id', 'buttonNegative');
    aDelete.textContent = 'Elimina';
    containerButton.appendChild(aDelete);

    let a = document.createElement('a');
    a.classList.add('button');
    a.setAttribute('id', 'buttonPositive');
    a.textContent = 'Indietro';
    a.href = ('gestione_clienti.php');
    containerButton.appendChild(a);
    
}

let buttonNegative = document.querySelector('#buttonNegative');
buttonNegative.addEventListener('click',deleteFunction);



