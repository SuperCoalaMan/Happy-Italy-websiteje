//12:50

let productenInWagen = []
const parentElement = document.querySelector("#koopProducten");
const wagenTotaalPrijs = document.querySelector("#totaalPrijzen");
const producten = document.querySelectorAll('.producten')


function updateProductsInCart(product){
    for(let i=0; i < updateProductenInWagen.length; i++){
        if(productenInWagen[i].id == product.id){
           productenInWagen[i].count += 1;
           productenInWagen[i].price = productenInWagen[i].basePrice * productenInWagen[i].count;
           return;
        }
    }
}


producten.forEach(product =>{
    product.addEventListener('click', (e) =>{
        if(e.target.classList.contains('addToCart')){
            const productID = e.target.dataset.productID
            const productNaam = product.quarySelector('').innerHTML;//voeg de class toe van de producten
            const productPrijs = product.quarySelector('').innerHTML;//voeg de class toe van de prijs
            let productToCart = {
                name: productNaam,
                id: productID,
                count : 1,
                price: +productPrijs,
                basePrice : +productPrijs
            }
            updateProductsInCart(productToCart);
            updateHTMLCart()

        }
    })
})