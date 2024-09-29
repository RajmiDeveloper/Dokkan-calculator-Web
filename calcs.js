/*/document.getElementById("turns").addEventListener("input", (turns)=>{
    let content = '';
    const  quant = turns.target.value;

    for(let i=0; i < quant; i++){
        content += `<div> <label>Invitado ${i} </label></div> <?php echo $character['SubName'];?>`;

    }
    document.getElementById("divTurns").innerHTML = content;
})/*/