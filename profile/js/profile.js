let a = document.getElementById("card1")
let b = document.getElementById("card2")
let c = document.getElementById("card3")
let d = document.getElementById("card4")
let e = document.getElementById("card5")
let f = document.getElementById("card6")
let g = document.getElementById("card7")
let h = document.getElementById("card8")
let i = document.getElementById("card9")
let j = document.getElementById("card10")

document.addEventListener("DOMContentLoaded", function randomNumber() {
     
    

        const myArray = [a, b, c, d, e, f, g, h, i, j];
        
        myArray.sort(() => Math.random() - 0.5);
        const [card1, card2, card3] = myArray.slice(0, 3);
        
        console.log("1")

        card1.style = "display: block;"
        card2.style = "display: block;"
        card3.style = "display: block;"
        
  });

