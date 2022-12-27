let pageContainer = document.querySelector(".pageContainer");

pageContainer.addEventListener('load', printOrder());

function printOrder(){   
    fetch('php/query_order_print.php').then(onResponse).then(onTextReady);
}

function onResponse(response){
    return response.json()
}

function onTextReady(json){

    
    console.log(json);
    console.log(json);
    console.log(json.cognome);
    console.log(json.id_ordine);



var data = new String();
var camp = ['ID ORDINE','Nome','Cognome','Indirizzo', 'Mezzo', 'Ora ', 'Giorno'];

for( let i=0; i<7; i++){

    data[0] = (json.id_ordine);
    data[1] = (json.nome );
    data[2] = (json.cognome );
    data[3] = (json.indirizzo );
    data[4] = (json.mezzo );
    data[5] = (json.ora_esecuzione );
    data[6] = (json.data_esecuzione );



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

     let aDelete = document.createElement('a');
     aDelete.classList.add('button');
     aDelete.setAttribute('id', 'buttonNegative');
     aDelete.textContent = 'Cancella';
     let object = new String('ordine');
     aDelete.href = ('delete.php?id='+ json.id_ordine +'&object='+object);
     containerButton.appendChild(aDelete);


     let a = document.createElement('a');
     a.classList.add('button');
     a.setAttribute('id', 'buttonPositive');
     a.textContent = 'Più Info';
     a.href = ('viewOrder.php?id=' + json.id_ordine);
     containerButton.appendChild(a);
 


//  let containerCross= document.createElement('a');
//      containerCross.classList.add('containerCross');
//      let object = new String('ordine');
//      containerCross.href = ('delete.php?id='+ json[i].id_ordine +'&object='+object);
//      containerButton.appendChild(containerCross);

//     let arrowCross  = document.createElement('div');
//     arrowCross.classList.add('arrow');
//     containerCross.appendChild(arrowCross);

//     let cross = document.createElement('div');
//     cross.classList.add('cross');
//     arrowCross.appendChild(cross);





//     let containerArrow = document.createElement('a');
//     containerArrow.classList.add('containerArrow');
//     containerArrow.href = ('viewOrder.php?id=' + json[i].id_ordine);
//     containerButton.appendChild(containerArrow);

//    let arrow  = document.createElement('div');
//    arrow.classList.add('arrow');
//    containerArrow.appendChild(arrow);

//    let line = document.createElement('div');
//    line.classList.add('line');
//    arrow.appendChild(line);

//    let tip = document.createElement('div');
//    tip.classList.add('tip');
//    arrow.appendChild(tip);

}
    
    
}