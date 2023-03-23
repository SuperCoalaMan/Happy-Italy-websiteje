let div = document.createElement("div")

function addToCart(id){
   let product = document.getElementById("pro"+id)
   console.log(product)
   let proinhoud = product.innerHTML
   console.log(proinhoud)
   let div = document.createElement("div")
    div.innerHTML = '<div class="winkelinhoud"><div class="tekst"><p id="naam"class="naam">Naam</p><p id="prijs"class="prijs">0,00</p></div><div class="aantal"><p id="aantal">2</p></div><div id="knoppen" class="knoppen"><div id="plus" class="plus" onclick="knop(plus)">+</div><div id="min" class="min" onclick="knop(min)">-</div></div></div>'
    document.getElementById("winkelwagen").appendChild(div)


}