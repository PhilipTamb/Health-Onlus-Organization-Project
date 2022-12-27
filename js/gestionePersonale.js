const form = document.querySelector('form');

form.addEventListener('submit', controlSubmit);

function controlSubmit(event){
    let exist_error = document.querySelectorAll(".errore");
    if(exist_error !== null){
        for(let i=0; i<exist_error.length; i++){
           exist_error[i].remove();
        }
    }
    let conferma1 = form.psw.value;
    let conferma2 = form.conferma.value;
    if(conferma1 !== conferma2){
        console.log(conferma1);
        console.log(conferma2);
        
        let div_errore = document.createElement("div");
        div_errore.classList.add("errore");
        div_errore.textContent = "Errore nell'inserimanto della password";
        form.appendChild(div_errore);
        event.preventDefault();
}

}