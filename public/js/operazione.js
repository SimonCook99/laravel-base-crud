console.log("ciao");

let operazioneRiuscita = document.getElementById("prova");
console.log(operazioneRiuscita);

if(operazioneRiuscita){
    setTimeout(rimuovi, 3000);
}

function confermaEliminazione(){
    confirm("Sicuro di voler cancellare il seguente dato?");
}

function rimuovi(){
    operazioneRiuscita.remove();
}