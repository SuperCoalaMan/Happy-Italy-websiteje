let img = document.getElementById("foto")
let fotos = ["../index/img/Happy_Italy_kinderfeestje.jpeg", "../index/img/happy-italy_uiteten-met-kinderen.png", "../index/img/happy-italy-vrouw.png"]
let i=0
function Slide(s){
    if(s == 1){
        img.src= fotos[0]
        
    }

    else if(s == 2){
        img.src= fotos[1]
    }

    else if(s == 3){
        img.src= fotos[2]
    }
} 

setInterval(volgendefoto, 10000);

function volgendefoto(){
    i++
    if(i == 3){
        i = 0
    }
    img.src= fotos[i]
}

