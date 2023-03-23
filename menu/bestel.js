let div = document.createElement("div")

function addToCart(id){
   let product = document.getElementById("pro"+id)
   console.log(product)
   let proinhoud = product.innerHTML
   console.log(proinhoud)
   let div = document.createElement("div")
    div.innerHTML = proinhoud
    document.getElementById("winkelwagen").appendChild(div)


}