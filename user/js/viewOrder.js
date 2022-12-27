console.log(window.location.href.replace());

var query = window.location.search.substring(1);
console.log(query);

var strList = query.split('&');
console.log(strList);



var parts = strList[0].split('=');
var orderId = parts[1];
console.log(orderId);

var data = new String();

const form_data = new FormData();
form_data.append("orderId", orderId);

fetch('http://localhost/misericordia/php/queryViewOrder.php',{method: 'post', body: form_data}).then(onResponse).then(onTextReady);



function onResponse(response){
    
    
    
    return response.text()
}

function onTextReady(result){
console.log(result);

 const json = JSON.parse(result);
 console.log(json);
 console.log(json.cognome);
 console.log(json.id_ordine);
 

var camp = ['ID ORDINE','Cliente','Richiedente','Nome','Cognome','Città','Indirizzo','Luogo di servizio', 'Mezzo','Tipo di richiesta','Giorno','Ora','Affetto da','Peso','Data ordinazione','Ora ordinazione','Telefono','Note'];


    data[0] = (json.id_ordine);
    data[1] = (json.cliente);
    data[2] = (json.richiedente);
    data[3] = (json.nome);
    data[4] = (json.cognome);
    data[5] = (json.citta);
    data[6] = (json.indirizzo);
    data[7] = (json.luogo_servizio);
    data[8] = (json.mezzo );
    data[9] = (json.tipo_richiesta);
    data[10] = (json.data_esecuzione );
    data[11] = (json.ora_esecuzione );
    data[12] = (json.affetto);
    data[13] = (json.peso);
    data[14] = (json.data_creazione);
    data[15] = (json.ora_creazione);
    data[16] = (json.tel);
    data[17] = (json.note);

    let pageContainer = document.querySelector('.pageContainer');
    let h1 = document.querySelector('h1');
    h1.textContent = 'Ordine N° '+data[0];    

    let conteinerOrder = document.createElement('div');
    conteinerOrder.classList.add('conteinerOrder');
    pageContainer.appendChild(conteinerOrder );

    let containerInfo = document.createElement('div');
    containerInfo.classList.add('containerInfo');
    conteinerOrder.appendChild(containerInfo);

    console.log(data.length);
    
    for( let j=0; j<18; j++){
        
        console.log(data[j]);
        
               if( data[j] === ''){
                   j++;
               }
        
                let orderContent = document.createElement('div');
                orderContent.classList.add( 'orderContent'); //( 'id'+ j,'orderContent')
                containerInfo.appendChild(orderContent);
        
                let orderCamp = document.createElement('div');
                orderCamp.classList.add('orderCamp');
                orderCamp.textContent = camp[j];
                orderContent.appendChild(orderCamp);

                let dataset1 = document.createElement('dataset');
                dataset1.classList.add('hidden');
                dataset1.textContent = camp[j];
                orderContent.appendChild(dataset1);

                let dataset = document.createElement('dataset');
                dataset.classList.add('hidden');
                dataset.textContent = data[j];
                orderContent.appendChild(dataset);

                let orderInfo = document.createElement('div');
                orderInfo.classList.add('orderInfo');
                orderInfo.textContent = data[j]; 
                orderContent.appendChild(orderInfo);

            }

            if(json.casa == 1){
                let orderContent = document.createElement('div');
                orderContent.classList.add( 'orderContent'); //( 'id'+ j,'orderContent')
                containerInfo.appendChild(orderContent);
        
                let orderCamp = document.createElement('div');
                orderCamp.classList.add('orderCamp');
                orderCamp.textContent = 'Collocazione';
                orderContent.appendChild(orderCamp);
                
                let dataset1 = document.createElement('dataset');
                dataset1.classList.add('hidden');
                dataset1.textContent = 'casa';
                orderContent.appendChild(dataset1);

                let dataset = document.createElement('dataset');
                dataset.classList.add('hidden');
                dataset.textContent = '1';
                orderContent.appendChild(dataset);

                let orderInfo = document.createElement('div');
                orderInfo.classList.add('orderInfo');
                orderInfo.textContent = 'a casa del cliente'; 
                orderContent.appendChild(orderInfo);
            }


    let containerButton = document.createElement('div');
    containerButton.classList.add('containerButton');
    conteinerOrder.appendChild(containerButton);


    let buttonLeft = document.createElement('a');
    buttonLeft.classList.add('button');
    buttonLeft.setAttribute('id', 'buttonLeft');
    buttonLeft.textContent = 'Ordine di Servizio PDF';
    //a.setAttribute('onclick', 'creaPDF()')
    // a.href = ('viewOrder.php?ID=' + data[0]);
    containerButton.appendChild(buttonLeft);

    let buttonRigth = document.createElement('a');
    buttonRigth.classList.add('button');
    buttonRigth.setAttribute('id', 'buttonRigth');
    buttonRigth.textContent = 'Foglio di Viaggio PDF';
    //a.setAttribute('onclick', 'creaPDF()')
    // a.href = ('viewOrder.php?ID=' + data[0]);
    containerButton.appendChild(buttonRigth);

   // buttonRigth.addEventListener('click',creaPDFRigth);
    buttonLeft.addEventListener('click',creaPDFLeft);
}



function creaPDFLeft(event){
    //let dataset = document.querySelectorAll('dataset');
    console.log(data[0]);
    
    let current = event.currentTarget;
    console.log(current);
    let parentNode = event.currentTarget.parentNode.parentNode;
    console.log(parentNode);
    console.log( parentNode.childNodes[0].childNodes[0].childNodes[0]);


    for(let i=0; i<data.length;i++){
            console.log(data[i]);
             
    }
    
    var doc = new jsPDF();
	doc.setFont("Times New Roman");
        doc.setFontType("normal");
        doc.setFontSize(20);
        doc.setTextColor(0, 0, 0);
	    doc.text(50, 50, 'Ordine di servizio: '+ data[0]);
        doc.setTextColor(0, 0, 0);
	    doc.text(20, 30, '');
	doc.text(20, 20, '' + data[1]);

	// Save the PDF
	doc.save('Ordine_di_servizio_N_'+ data[0]+'.pdf');
}






