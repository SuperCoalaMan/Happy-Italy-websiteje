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
function res()
{
      let button = document.getElementById("button");
      let bestel1 = document.getElementById("bestel1");
      button.style = "display: none;";

      bestel1.style = "display: block;";
}
function closeRes()
{
      let button = document.getElementById("button");
      let bestel1 = document.getElementById("bestel1");
      button.style = "display: block;";

      bestel1.style = "display: none;";
}

function openPopup(staat)
{     
      let check = document.getElementById("check");
      let x = document.getElementById("x");
      let popup = document.getElementById("popup");
      if (staat == 'check'){
            check.style = "display: block";
      } else {
            x.style = "display: block";
      }
      popup.style = "display: block";
      
}
function closePopup()
{

      let popup = document.getElementById("popup");

      popup.style = "display: none";
}
