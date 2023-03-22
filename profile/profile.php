<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../AccountGegevens/login.html');
    exit();
}
?>
<?php include 'sendMail.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="shortcut icon" type="image/x-icon" href="../belangrijkeimages/pictogram.png">
    <title>Profiel - Happy Italy</title>
</head>
<body>
    <div class="fixed-header">
        <div class="container">
            <!--Als de user admin is komt er een tabje admin bij-->
        <?php if ($_SESSION['user_id'] == 'admin') { ?>
            <a class="aPanel" href="../AccountGegevens/admin.php">Admin panel</a>
            
        <?php } else { ?>
        <?php } ?>
        
          <nav id="nav">
            <a href="../Info/Info.php">info</a>
            <a href="#">bestellen</a>
            <a href="#">menu</a>
            <a href="../index.php">Home</a>
            <?php if (isset($_SESSION['user_id'])) { ?>
            <h1>Welkom terug, <?php echo $_SESSION['user_id']; ?>! -Profiel</h1>
        <?php } else { ?>

        <?php } ?>
        <form action="logout.php" method="post">
		      <button class="logout" type="submit" name="logout">Logout</button>
	      </form>
        <select name="pets" id="pet-select">
          <option value="NL">NL</option>
          <option value="ENG">ENG</option>
        </select>
          </nav>
        </div>
      </div>
      <div class="label">
      </div>
      <div class="text">
        <h2>Speciaal voor u!</h2>
      </div>
    <div class="cards">
    <div class="card" id="card1">
        <h2>Combi-deal <br> 2 + 1 gratis</h2>
        <img class="img" src="css/spagetti.jpeg">
        <p>U kunt bij bestelling van 2 spagetti, 1 gratis krijgen.</p>
        <div class="infoBtn"><h2>Meer info</h2></div>
    </div>
    <div class="card" id="card2">
      <h2>20% korting!</h2>
        <img class="img" src="css/pizza-margharita.jpg">
        <p>U kunt bij bestelling van een pizza margharita <br>wel 20% korting krijgen.</p>
        <div class="infoBtn"><h2>Meer info</h2></div>
    </div>
    <div class="card" id="card3">
      <h2>Combi-deal <br> 2 + 1 gratis</h2>
        <img class="img" src="css/SCHAR_PRODOTTI_PIZZA_PROSCIUTTO&FUNGHI.jpg">
        <p>U kunt bij bestelling van 2 proscuitto pizza's, 1 gratis krijgen.</p>
        <div class="infoBtn"><h2>Meer info</h2></div>
    </div>
    <div class="card" id="card4">
      <h2>10% korting</h2>
        <img class="img" src="css/download.jpeg">
        <p>U kunt bij bestelling van een pizza peperoni, 10% korting krijgen.</p>
        <div class="infoBtn"><h2>Meer info</h2></div>
    </div>
    <div class="card" id="card5">
      <h2>10% korting</h2>
        <img class="img" src="css/k_Edit_09-2022-sausage-pasta_sausage-pasta-4.jpeg">
        <p>Krijg 10% korting bij het bestellen van pennen.</p>
        <div class="infoBtn"><h2>Meer info</h2></div>
    </div>
    <div class="card" id="card6">
      <h2>30% korting</h2>
        <img class="img" src="css/pasta-recept-met-boursin_1.jpeg">
        <p>U kunt bij bestelling van 1 vlinderpasta, 1 30% korting krijgen.</p>
        <div class="infoBtn"><h2>Meer info</h2></div>
    </div>
    <div class="card" id="card7">
      <h2>NEW, krijg een gratis pizza Döner</h2>
        <img class="img" src="css/images.jpeg">
        <p>Krijg een gratis pizaa Döner, ook ter verkijgen met kipdöner.</p>
        <div class="infoBtn"><h2>Meer info</h2></div>
    </div>
    <div class="card" id="card8">
      <h2>2 + 1 gratis</h2>
        <img class="img" src="css/ba-recipe-pasta-al-limone.webp">
        <p>Krijg 1 extra bij het bestellen van 2 limoen pasta's.</p>
        <div class="infoBtn"><h2>Meer info</h2></div>
    </div>
    <div class="card" id="card9">
      <h2>5% korting</h2>
        <img class="img" src="css/vegan-pizza-bij-happy-italy-1.jpg">
        <p>U krijgt bij bestelling van de vegan pizza 5% korting</p>
        <div class="infoBtn"><h2>Meer info</h2></div>
    </div>
    <div class="card" id="card10">
      <h2>NEW, krijg een gratis pizza fragola</h2>
        <img class="img" src="css/images (1).jpeg">
        <p>Krijg een gratis pizaa fragola bij besteding van minimaal 10 euro.</p>
        <div class="infoBtn"><h2>Meer info</h2></div>
    </div>
    <div class="popup" id="popup">
          <img id="check" class="popImg" src="<?php echo $check; ?>">
          <img id="x" class="popImg" src="<?php echo $x; ?>">
         <p class="success"> <?php echo $success;  ?></p>
         <p class="failed"> <?php echo $failed;  ?></p>
         <button class="closePopBtn" onclick="closePopup()">Oke</button>
      </div>
    <div id="button" class="res" onclick="res()"><p class="rText">Reserveer</p></div>
    <div id="bestel1" class="bestel1">
    <a href="javascript:void(0)" class="closebtn" onclick="closeRes()">&times;</a>
      <form id="contact" action="" method="post">
        <h>Reserveren</h><br>
        <input class="date" type="date" placeholder="Datum" class="datepicker-input" name="datum" required><br>
        <select class="date" placeholder="personen" name="personen" name="personen" id="personen" required>
          <option>Personen</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
        <input class="opmerking" type="email" name="email" placeholder="Email" required>
        <input class="opmerking" type="text" name="name" placeholder="Naam" required>
        <textarea class="opmerking" id="opmerking" name="message" placeholder="opmerking"></textarea><br>
      <button class="closePopBtn" type="submit" name="submit" id="contact-submit" data-submit="...Sending">Verzenden</button>
        
        </form>
    </div>
    
</div>
    <div class="fixed-footer">
        <div class="container"></div>
      </div>
<script src="./js/profile.js"></script>
<?php

    if(isset($_POST['submit'])){
      echo $script;
     } 
     ?>
</body>
</html>