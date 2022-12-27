let pageContainer = document.querySelector(".pageContainer");

pageContainer.addEventListener('load', printOrder());

function printOrder(){   
    fetch('../php/query_order_print.php').then(onResponse).then(onTextReady);
}

function onResponse(response){
    return response.json()
}

function onTextReady(json){

    
    console.log(json);
    console.log(json.length);
    console.log(json[0].cognome);
    console.log(json[0].id_ordine);



var data = new String();
var camp = ['ID ORDINE','Nome','Cognome','Indirizzo', 'Mezzo', 'Ora ', 'Giorno'];

for( let i=0; i<json.length; i++){

    data[0] = (json[i].id_ordine);
    data[1] = (json[i].nome );
    data[2] = (json[i].cognome );
    data[3] = (json[i].indirizzo );
    data[4] = (json[i].mezzo );
    data[5] = (json[i].ora_esecuzione );
    data[6] = (json[i].data_esecuzione );



    let conteinerOrder = document.createElement('div');
    conteinerOrder.classList.add('conteinerOrder');
    pageContainer.appendChild(conteinerOrder );

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


    let containerButton = document.createElement('div');
    containerButton.classList.add('containerButton');
    conteinerOrder.appendChild(containerButton);

    let a = document.createElement('a');
    a.classList.add('button');
    a.setAttribute('id', 'buttonPositive');
    a.textContent = 'Entra';
    a.href = ('viewOrder.php?id=' + json[i].id_ordine);
    containerButton.appendChild(a);

}
    
    
}