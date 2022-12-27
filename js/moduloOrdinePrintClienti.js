

fetch('http://localhost/misericordia/php/queryModuloOrdinePrintClienti.php').then(onResponse).then(onTextReady);


function onResponse(response){ 
    return response.json()
}

function onTextReady(result){
    let select = document.querySelector('#routine');
    console.log(select);
    console.log(result);

    console.log(result.length);

    for( let i=0; i<result.length; i++){

        console.log(result[i].nome );
        
        let option = document.createElement('option');
        option.setAttribute('value', result[i].nome );
        option.textContent = result[i].nome;
        select.appendChild(option);
    }
    
    
    

}