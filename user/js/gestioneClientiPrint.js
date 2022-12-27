

fetch('http://localhost/misericordia/php/queryGestioneClientiPrint.php').then(onResponse).then(onTextReady);

function onResponse(response){
        return response.json();
}

function onTextReady(result){
    console.log(result);
    console.log(result.length);
    
    console.log(result[0].id_utente)

    var data = new String();
var camp = ['ID Cliente','Nome','Telefono','Email','Città','Indirizzo'];
    
    let containerPrint = document.querySelector('.containerPrint');
    
    for(let i=0; i<result.length; i++){
console.log(i);

        data[0] = (result[i].id_cliente);
        data[1] = (result[i].tel);
        data[2] = (result[i].nome);
        data[3] = (result[i].email);
        data[4] = (result[i].citta);
        data[5] = (result[i].indirizzo);

        let conteinerOrder = document.createElement('div');
        console.log(conteinerOrder);
        
        conteinerOrder.classList.add('conteinerOrder');
        containerPrint.appendChild(conteinerOrder);
    
        let containerInfo = document.createElement('div');
        containerInfo.classList.add('containerInfo');
        conteinerOrder.appendChild(containerInfo);

        for( let j=0; j<6; j++){
        
        
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
    }
}