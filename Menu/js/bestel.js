let div = document.createElement("div")
let eerste = false
let array = []


function addToCart(id){
        let product = document.getElementById("pro"+id)
        let Naam = document.querySelector("#pro"+id+" :nth-child(1)").innerHTML;
        let Prijs = document.querySelector("#pro"+id+" :nth-child(2)").innerHTML;
        let aantal = 1

        if(eerste==false){
            let div = document.createElement("div")
            div.innerHTML = '<div id="winkelinhoud'+id+'" class="winkelinhoud"><div class="tekst"><p id="naam"class="naam">' + Naam +'</p><p id="prijs'+id+'"class="Prijs">'+ Prijs + '</p></div><div class="aantal"><p id="aantal'+id+'">'+aantal+'</p></div><div id="knoppen" class="knoppen"><div id="plus" class="plus" onclick="knop(`plus`,'+id+')">+</div><div id="min" class="min" onclick="knop(`min`,'+id+')">-</div></div></div>'    
            document.getElementById("winkelwagen").appendChild(div)
            array.push(id)
            eerste = true
            }
        else{
            for (let i = 0; i < array.length; i++){
                if (array[i] == id){
                    let kaas = document.getElementById("aantal"+id);
                    let aantallen = kaas.innerHTML
                    aantallen++
                    let nieuwePrijs = parseFloat(Prijs) * aantallen
                    document.getElementById("aantal"+id).innerHTML = aantallen;
                    document.getElementById("prijs"+id).innerHTML = nieuwePrijs.toFixed(2)
                    let ELEMENTEN = document.getElementsByClassName("Prijs")
                    let totaalprijs = 0;
                    for (let i = 0; i < ELEMENTEN.length; i++){
                        totaalprijs += parseFloat(ELEMENTEN[i].innerHTML);
                        totaalprijs.toFixed(2)
                    }
                    totaalprijs = totaalprijs.toFixed(2)
                    document.getElementById("totaalPrijs").innerHTML = totaalprijs;
                    return;
                    
                }
            }
            let div = document.createElement("div")
            div.innerHTML = '<div id="winkelinhoud'+id+'" class="winkelinhoud"><div class="tekst"><p id="naam"class="naam">' + Naam +'</p><p id="prijs'+id+'"class="Prijs">'+ Prijs + '</p></div><div class="aantal"><p id="aantal'+id+'">'+aantal+'</p></div><div id="knoppen" class="knoppen"><div id="plus" class="plus" onclick="knop(`plus`,'+id+')">+</div><div id="min" class="min" onclick="knop(`min`,'+id+')">-</div></div></div>'
            document.getElementById("winkelwagen").appendChild(div)
            array.push(id)
    } 
    let ELEMENTEN = document.getElementsByClassName("Prijs")
    let totaalprijs = 0;
    for (let i = 0; i < ELEMENTEN.length; i++){
        totaalprijs += parseFloat(ELEMENTEN[i].innerHTML);
        totaalprijs.toFixed(2)
    }
    totaalprijs = totaalprijs.toFixed(2)
    document.getElementById("totaalPrijs").innerHTML = totaalprijs;
}

function knop(welke,id){
    let Prijs = document.querySelector("#pro"+id+" :nth-child(2)").innerHTML;
    if(welke == "plus"){ 
        let kaas = document.getElementById("aantal"+id);
        let aantallen = kaas.innerHTML
        aantallen++
        let nieuwePrijs = parseFloat(Prijs) * aantallen
        document.getElementById("aantal"+id).innerHTML = aantallen;
        document.getElementById("prijs"+id).innerHTML = nieuwePrijs.toFixed(2)
    }
    else if(welke == "min"){
        let kaas = document.getElementById("aantal"+id);
        let aantallen = kaas.innerHTML
        aantallen--
        let nieuwePrijs = parseFloat(Prijs) * aantallen
        document.getElementById("aantal"+id).innerHTML = aantallen;
        document.getElementById("prijs"+id).innerHTML = nieuwePrijs.toFixed(2)
        
            
        if(aantallen == 0){
            const divje = document.getElementById("winkelinhoud"+id)
            divje.remove()
            eerste = false

            const index = array.indexOf(id);
            if (index > -1) { // only splice array when item is found
                array.splice(index, 1); // 2nd parameter means remove one item only
            }
        }
    }
    let ELEMENTEN = document.getElementsByClassName("Prijs")
    let totaalprijs = 0;
    for (let i = 0; i < ELEMENTEN.length; i++){
        totaalprijs += parseFloat(ELEMENTEN[i].innerHTML);
        totaalprijs.toFixed(2)
    }
    totaalprijs = totaalprijs.toFixed(2)
    document.getElementById("totaalPrijs").innerHTML = totaalprijs;
}