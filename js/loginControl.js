var query = window.location.search.substring(1);
var strList = query.split('&');
var parts = strList[0].split('=');
var id = parts[1];

console.log(id);


if(id !== undefined){
    const form = document.querySelector('form');

    let exist_error = document.querySelectorAll(".errore");
        if(exist_error !== null){
            for(let i=0; i<exist_error.length; i++){
            exist_error[i].remove();
            }
        }

        let div_errore = document.createElement("div");
        div_errore.classList.add("errore");
        div_errore.textContent = "*Credenziali Errate";
        form.appendChild(div_errore);
}



 




