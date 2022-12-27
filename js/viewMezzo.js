// lettura attributi GET 
var query = window.location.search.substring(1);
var strList = query.split('&');

var parts = strList[0].split('=');
var id = parts[1];
console.log(id);

var data = new String();
const form_data = new FormData();
form_data.append("id", id);
fetch('http://localhost/misericordia/php/queryViewMezzo.php',{method: 'post', body: form_data}).then(onResponse).then(onTextReady);

const divForm = document.querySelector('.form-patient');
const input = document.createElement('input');
input.classList.add('hidden');
input.setAttribute('name', 'id');
input.setAttribute('value', id);
divForm.appendChild(input);

fetch('http://localhost/misericordia/php/queryViewControlsMezzo.php',{method: 'post', body: form_data}).then(Response).then(TextReady);

function onResponse(response){ 
    return response.text()
}

function onTextReady(result){

 const json = JSON.parse(result);

 var camp = ['Modello','Sigla','Targa','Cilindrata'];

    data[0] = (json.modello);
    data[1] = (json.sigla);
    data[2] = (json.targa);
    data[3] = (json.cilindrata);

    let h1 = document.querySelector('h1');
    h1.textContent = data[0];    

    let containerUpper = document.querySelector('.containerUpper');
    let conteinerOrder = document.createElement('div');
    conteinerOrder.classList.add('conteinerOrder');
    containerUpper.appendChild(conteinerOrder );

    let containerInfo = document.createElement('div');
    containerInfo.classList.add('containerInfo');
    conteinerOrder.appendChild(containerInfo);
    
    for( let j=0; j<4; j++){
        

        
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
                orderInfo.classList.add('uppercase');
                orderInfo.textContent = data[j]; 
                orderContent.appendChild(orderInfo);

            }

            let containerModify = document.querySelector('.containerModify');

            let containerButton = document.createElement('div');
            containerButton.classList.add('containerButton');
            conteinerOrder.appendChild(containerButton);
        
            let aDelete = document.createElement('a');
            aDelete.classList.add('button');
            aDelete.setAttribute('id', 'buttonNegative');
            aDelete.textContent = 'Cancella';
            let object = new String('mezzo');
            aDelete.href = ('delete.php?id='+ result[i].id_mezzo +'&object='+ object);
            containerButton.appendChild(aDelete);
    
             let a = document.createElement('a');
             a.classList.add('button');
             a.setAttribute('id', 'buttonPositive');
             a.textContent = 'Entra';
             a.href = ('controllo_mezzo.php?id=' + result[i].id_mezzo);
             containerButton.appendChild(a);

}


function Response(response){ 
    return response.text()
}

function TextReady(result){
const json = JSON.parse(result);

var camp = ['Modello','Sigla','Targa','Cilindrata','Chilimetri','Autista','Soccorritori','Numero Cinghie Carrozzelle','Autoradio','Radio 144','Clacson','Sirena','Lampeggiatori','Telecamere e Monitor','Fari Abbaglianti','Fari Fendinebbia','Fari Anabbaglianti','Luci di Arresto','Luci Vano Sanitario','Luci Retromarcia','Luci di Carico','Luci Cruscotto','Luci di Direzione','Luci Targa', 'Luci di Posizione','Luci Vano Guida','Sollevatore Carrozzelle','Ruota di Scorta','Kit Scasso','Triangolo','Catene','Libretto','Scheda Carburante','Tergicristalli','Cric','Chiave','Giubbino','Estintori','Faro Portatile','Tagliando Assicurativo','Card e Pin','Gancio di Traino','Suoneria Retromarcia','Segnalazioni'];

    data[0] = (json.modello);
    data[1] = (json.sigla_mezzo);
    data[2] = (json.targa);
    data[3] = (json.cilindrata);
    data[4] = (json.km);
    data[5] = (json.autista);
    data[6] = (json.soccorritori);
    data[7] = (json.n_cinghie_carrozzelle);
    data[8] = (json.autoradio);
    data[9] = (json.radio_144);
    data[10] = (json.clacson);
    data[11] = (json.sirena);
    data[12] = (json.lampeggiatori);
    data[13] = (json.telecamere_monitor);
    data[14] = (json.fari_abbaglianti);
    data[15] = (json.fari_fendinebbia);
    data[16] = (json.fari_anabbaglianti);
    data[17] = (json.luci_arresto);
    data[18] = (json.luci_vano_sanitario);
    data[19] = (json.luci_retromarcia);
    data[20] = (json.luci_carico);
    data[21] = (json.luci_cruscotto);
    data[22] = (json.luci_direzione);
    data[23] = (json.luci_targa);
    data[24] = (json.luci_posizione);
    data[25] = (json.luci_vano_guida);
    data[26] = (json.sollevatore_carrozzelle);
    data[27] = (json.ruota_scorta);
    data[28] = (json.kit_scasso);
    data[29] = (json.triangolo);
    data[30] = (json.catene);
    data[31] = (json.libretto);
    data[32] = (json.scheda_carburante);
    data[33] = (json.tergicristalli);
    data[34] = (json.cric);
    data[35] = (json.chiave);
    data[36] = (json.giubbino);
    data[37] = (json.estintori);
    data[38] = (json.faro_portatile);
    data[39] = (json.tagliando_assicurativo);
    data[40] = (json.card_pin);
    data[41] = (json.gancio_traino);
    data[42] = (json.suoneria_retromarcia);
    data[43] = (json.segnalazioni);


    let containerDown = document.querySelector('.containerDown');
    let conteinerOrder = document.createElement('div');
    conteinerOrder.classList.add('conteinerOrder');
    containerDown.appendChild(conteinerOrder );

    let containerInfo = document.createElement('div');
    containerInfo.classList.add('containerInfo');
    conteinerOrder.appendChild(containerInfo);

    
    for( let j=0; j<44; j++){

                     console.log(data[j]);
                     

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

                if(j>7 && j<43){
                    let orderInfo = document.createElement('div');
                    orderInfo.classList.add('orderInfo');
                    orderContent.appendChild(orderInfo);
                    
                    let img = document.createElement('img');
                    if( data[j]== '1'){
                        img.setAttribute('src','img/check.png');
                    }else{
                        img.setAttribute('src','img/uncheck.png');
                    }
                    orderInfo.appendChild(img);
                 }else{
                    let orderInfo = document.createElement('div');
                    orderInfo.classList.add('orderInfo');
                    orderInfo.classList.add('uppercase');
                    orderInfo.textContent = data[j]; 
                    orderContent.appendChild(orderInfo);
                 }

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
}





