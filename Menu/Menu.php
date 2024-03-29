<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="css/Menu(Nick).css" />
  <link rel="stylesheet" href="css/.css" />
  <script src="js/bestel.js" defer></script>
</head>
 
<body>
  <h1 class="pasta">Pasta &#127837</h1>
  <h1 class="pizza">Pizza &#127829</h1>
  <h1 class="drinks">Drinks &#129380</h1>
  <div class="fixed-header">
    <div class="container">
      <img class="logo" src="images copy.png" alt="image" height="99">
      <nav>
        <div class="bestel"><a href="menu/Menu.php">Menu/Bestellen</a></div>
        <a href="Info/Info.php">Info</a>
        <a href="index.php">Home</a>
      <?php if (isset($_SESSION['user_id'])) { ?>
        <a href="profile/profile.php">Profiel</a>
        <h1>Welkom terug, <?php echo $_SESSION['user_id']; ?>!</h1>
    <?php } else { ?>
      <a href="AccountGegevens/login.html">Login</a>
    <?php } ?>
    </nav>

    </div>
  </div>
  <div class="container">
    <div class="grid-container">
      <div onclick="addToCart(1)" id="pro1" class="grid-item">
        <p id="naam">Pasta Bianca</p>
        <p id="prijs">7.75</p>
        <p id="ingriedenten">
          Knoflook, rode pepers, peterselie en olijfolie
        </p>
      </div>
      <div onclick="addToCart(2)" id="pro2" class="grid-item">
        <p id="naam">Pasta Pomodore</p>
        <p id="prijs">8.95</p>
        <p id="ingriedenten">Tomatensaus, cherrytomaten en basilicum</p>
      </div>
      <div onclick="addToCart(3)" id="pro3" class="grid-item">
        <p id="naam">Pasta Pesto</p>
        <p id="prijs">9.45</p>
        <p id="ingriedenten">
          Roomsaus, pesto, basilicum en Parmezaanse kaas
        </p>
      </div>
      <div onclick="addToCart(4)" id="pro4" class="grid-item">
        <p id="naam">Pasta Verdure</p>
        <p id="prijs">8.95</p>
        <p id="ingriedenten">
          Tomatensaus, champignons, paprika, courgette, aubergine, zwarte
          olijven, Parmezaanse kaas en peterselie
        </p>
      </div>
      <div onclick="addToCart(5)" id="pro5" class="grid-item">
        <p id="naam">Pasta Funghi</p>
        <p id="prijs">9.45</p>
        <p id="ingriedenten">
          Roomsaus, champignons, peterselie en Parmezaanse kaas
        </p>
      </div>
      <div onclick="addToCart(6)" id="pro6" class="grid-item">
        <p id="naam">Pasta Gamberi Rosso</p>
        <p id="prijs">10.95</p>
        <p id="ingriedenten">
          Tomatensaus, garnalen, cherrytomaten, rode pepers en basilicum
        </p>
      </div>
      <div onclick="addToCart(7)" id="pro7" class="grid-item">
        <p id="naam">pasta Pollo e Limone</p>
        <p id="prijs">11.95</p>
        <p id="ingriedenten">
          Roomsaus, gegrilde kip, cherrytomaten, citroen, peterselie en
          Parmezaanse kaas
        </p>
      </div>
      <div onclick="addToCart(8)" id="pro8" class="grid-item">
        <p id="naam">Pasta Con Polpette</p>
        <p id="prijs">11.45</p>
        <p id="ingriedenten">
          Tomatensaus, roomsaus, rundergehaktballetjes, basilicum,
          cherrytomaten, peterselie en Parmezaanse kaas
        </p>
      </div>
      <div onclick="addToCart(9)" id="pro9" class="grid-item">
        <p id="naam">Pasta Pomodori Secchi</p>
        <p id="prijs">10.95</p>
        <p id="ingriedenten">
          Tomatensaus, zongedroogde tomaten, cherrytomaten, pijnboompitten,
          Parmezaanse kaas en rucola
        </p>
      </div>
      <div onclick="addToCart(10)" id="pro10" class="grid-item">
        <p id="naam">Pasta Bolognese</p>
        <p id="prijs">11.45</p>
        <p id="ingriedenten">
          Bolognesesaus, rundergehakt, Parmezaanse kaas en peterseli
        </p>
      </div>
      <div onclick="addToCart(11)" id="pro11" class="grid-item">
        <p id="naam">Pizza Contadina</p>
        <p id="prijs">7.45</p>
        <p id="ingriedenten">
          Tomatensaus, cherrytomaten, rucola en Parmezaanse kaas
        </p>
      </div>
      <div onclick="addToCart(12)" id="pro12" class="grid-item">
        <p id="naam">Pizza Margherita</p>
        <p id="prijs">7.95</p>
        <p id="ingriedenten">Tomatensaus, mozzarella en basilicum</p>
      </div>
      <div onclick="addToCart(13)" id="pro13" class="grid-item">
        <p id="naam">Pizza Tonno</p>
        <p id="prijs">9.95</p>
        <p id="ingriedenten">
          Tomatensaus, tonijn, ansjovis, rode paprika, zwarte olijven en
          kappertjes
        </p>
      </div>
      <div onclick="addToCart(14)" id="pro14" class="grid-item">
        <p id="naam">Pizza Delizioza</p>
        <p id="prijs">8.95</p>
        <p id="ingriedenten">
          Tomatensaus, mozzarella, rode paprika en basilicum
        </p>
      </div>
      <div onclick="addToCart(15)" id="pro15" class="grid-item">
        <p id="naam">Pizza Quattro formaggi</p>
        <p id="prijs">10.95</p>
        <p id="ingriedenten">
          Mozzarella, gorgonzola, provolone en Parmezaanse kaas
        </p>
      </div>
      <div onclick="addToCart(16)" id="pro16" class="grid-item">
        <p id="naam">Pizza Salame</p>
        <p id="prijs">9.45</p>
        <p id="ingriedenten">Tomatensaus, mozzarella en salami Milano</p>
      </div>
      <div onclick="addToCart(17)" id="pro17" class="grid-item">
        <p id="naam">Pizza Rustica</p>
        <p id="prijs">9.95</p>
        <p id="ingriedenten">
          Tomatensaus, mozzarella, gekruid rundergehakt en rode pepers
        </p>
      </div>
      <div onclick="addToCart(18)" id="pro18" class="grid-item">
        <p id="naam">Pizza Fiamma﻿</p>
        <p id="prijs">10.95</p>
        <p id="ingriedenten">
          Tomatensaus, mozzarella, salami pepperone en rode pepers
        </p>
      </div>
      <div onclick="addToCart(19)" id="pro19" class="grid-item">
        <p id="naam">Coca-Cola regular</p>
        <p id="prijs">2.50</p>
      </div>
      <div onclick="addToCart(20)" id="pro20" class="grid-item">
        <p id="naam">Coca-Cola zero</p>
        <p id="prijs">2.50</p>
      </div>
      <div onclick="addToCart(21)" id="pro21" class="grid-item">
        <p id="naam">Fanta Orange</p>
        <p id="prijs">2.50</p>
      </div>
      <div onclick="addToCart(22)" id="pro22" class="grid-item">
        <p id="naam">Sprite</p>
        <p id="prijs">2.50</p>
      </div>
      <div onclick="addToCart(23)" id="pro23" class="grid-item">
        <p id="naam">Ice Tea green</p>
        <p id="prijs">2.50</p>
      </div>
      <div onclick="addToCart(24)" id="pro24" class="grid-item">
        <p id="naam">Red Bull</p>
        <p id="prijs">2.80</p>
      </div>
    </div>
  </div>
  <div class="cart">
    <h2>winkelmandje &#128722;</h2>
    <div id="winkelwagen"></div>
    <?php if (isset($_SESSION['user_id'])) { ?>

      

      <button onclick="window.location.href = 'bedankt.php';"  class="button"><p>Bestellen</p><div id="totaalPrijs">0.00</div></button>
 
<?php } else { ?>
<button class="button"><a href="../AccountGegevens/login.html">Log-in</a><div id="totaalPrijs"></div></button>
<?php } ?>
  </div>
  
  <div class="fixed-footer"></div>
</body>

</html>