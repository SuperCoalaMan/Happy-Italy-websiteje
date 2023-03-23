let div = document.createElement("div")
let eerste = false
let array = []

function addToCart(id){
   let product = document.getElementById("pro"+id)
   console.log(product)
   let Naam = document.querySelector("#pro"+id+" :nth-child(1)").innerHTML;
   let Prijs = document.querySelector("#pro"+id+" :nth-child(2)").innerHTML;
   let aantal = 1
   let proinhoud = product.innerHTML
   
   console.log(proinhoud)
   console.log(Naam)
   console.log(Prijs)

   if(eerste==false){
    let div = document.createElement("div")
    div.innerHTML = '<div class="winkelinhoud'+id+'"><div class="tekst"><p id="naam"class="naam">' + Naam +'</p><p id="prijs"class="prijs">'+ Prijs + '</p></div><div class="aantal"><p id="aantal'+id+'">'+aantal+'</p></div><div id="knoppen" class="knoppen"><div id="plus" class="plus" onclick="knop(plus, '+id+')">+</div><div id="min" class="min" onclick="knop(min, '+id+')">-</div></div></div>'    
    document.getElementById("winkelwagen").appendChild(div)
    array.push(id)
    console.log(array)
    eerste = true
    }
   else{
    let inArray = false;
    for (let i = 0; i < array.length; i++){
     if (array[i] == id){
         let kaas = document.getElementById("aantal"+id);
         let aantallen = kaas.innerHTML
         aantallen++
         document.getElementById("aantal"+id).innerHTML = aantallen;
         return;
     }
    }
    let div = document.createElement("div")
    div.innerHTML = '<div class="winkelinhoud'+id+'"><div class="tekst"><p id="naam"class="naam">' + Naam +'</p><p id="prijs"class="prijs">'+ Prijs + '</p></div><div class="aantal"><p id="aantal'+id+'">'+aantal+'</p></div><div id="knoppen" class="knoppen"><div id="plus" class="plus" onclick="knop(plus, '+id+')">+</div><div id="min" class="min" onclick="knop(min, '+id+')">-</div></div></div>'
    document.getElementById("winkelwagen").appendChild(div)
    array.push(id)
    console.log(array)}
}

function knop(welke, id){
    if(welke=="plus"){ 
    let kaas = document.getElementById("aantal"+id);
    let aantallen = kaas.innerHTML
    aantallen++
    document.getElementById("aantal"+id).innerHTML = aantallen;}
    else if(welke=="min"){
        
    }
}