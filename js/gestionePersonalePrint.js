

fetch('http://localhost/misericordia/php/queryGestionePersonalePrint.php').then(onResponse).then(onTextReady);

function onResponse(response){
        return response.json();
}

function onTextReady(result){
    console.log(result);
    console.log(result.length);
    
    console.log(result[0].id_utente)

    var data = new String();
var camp = ['ID ORDINE','Nome','Cognome','Email','Città di residenza', 'Indirizzo','Ruolo','Telefono','Nome utente','Luogo di nascita','Data di nascita'];
    
    let containerPrint = document.querySelector('.containerPrint');
    console.log(containerPrint);
    
    for(let i=0; i<result.length; i++){
console.log(i);

    data[0] = (result[i].id_utente);
    data[1] = (result[i].nome);
    data[2] = (result[i].cognome);
    data[3] = (result[i].email);
    data[4] = (result[i].citta_residenza);
    data[5] = (result[i].indirizzo);
    data[6] = (result[i].ruolo);
    data[7] = (result[i].tel);
    data[8] = (result[i].user);
    data[9] = (result[i].citta_nascita);
    data[10] = (result[i].data_nascita);
    
       
        
        let conteinerOrder = document.createElement('div');
        console.log(conteinerOrder);
        
        conteinerOrder.classList.add('conteinerOrder');
        containerPrint.appendChild(conteinerOrder);
    
        let containerInfo = document.createElement('div');
        containerInfo.classList.add('containerInfo');
        conteinerOrder.appendChild(containerInfo);

        for( let j=0; j<10; j++){
        
        
            let orderContent = document.createElement('div');
            orderContent.classList.add( 'orderContent'); //( 'id'+ j,'orderContent')
            containerInfo.appendChild(orderContent);
    
            let orderCamp = document.createElement('div');
            orderCamp.classList.add('orderCamp');
            orderCamp.textContent = camp[j];
            orderContent.appendChild(orderCamp);

            let dataset = document.createElement('dataset');
            dataset.classList.add('hidden');
            dataset.textContent = data[j];
            orderContent.appendChild(dataset);

            let orderInfo = document.createElement('div');
            orderInfo.classList.add('orderInfo');
            orderInfo.textContent = data[j]; 
            orderContent.appendChild(orderInfo);
        }
        let containerButton = document.createElement('div');
        containerButton.classList.add('containerButton');
        conteinerOrder.appendChild(containerButton);
    
        let aDelete = document.createElement('a');
        aDelete.classList.add('button');
        aDelete.setAttribute('id', 'buttonNegative');
        aDelete.textContent = 'Cancella';
        let object = new String('utente');
        aDelete.href = ('delete.php?id='+ result[i].id_utente +'&object='+object);
        containerButton.appendChild(aDelete);

         let a = document.createElement('a');
         a.classList.add('button');
         a.setAttribute('id', 'buttonPositive');
         a.textContent = 'Entra';
         a.href = ('persona.php?id=' + result[i].id_utente);
         containerButton.appendChild(a);

    }
}