<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="belangrijkeimages/pictogram.png">
    <title>Welkom - Happy Italy</title>
    <link rel="stylesheet" href="index/css/index.css">
    <script src="index/js/index.js" defer></script>
</head>
<body>
    <div class="fixed-header">
        <div class="container">
          <nav>
            <a href="Info/Info.php">info</a>
            <a href="#">bestellen</a>
            <a href="#">menu</a>
            <?php if (isset($_SESSION['user_id'])) { ?>
            <a href="../profile/profile.php">Profiel</a>
            <h1>Welkom terug, <?php echo $_SESSION['user_id']; ?>!</h1>
        <?php } else { ?>
          <a href="../AccountGegevens/login.html">Login</a>
        <?php } ?>
          <!--Als de user admin is komt er een tabje admin bij-->
        <?php if ($_SESSION['user_id'] == 'admin') { ?>
            <a href="../AccountGegevens/admin.php">Admin</a>
            
        <?php } else { ?>
        <?php } ?>
          </nav>
        </div>
      </div>
      <!--Main body en inhoud-->
      <div class="imageSlider">
        <img id="foto" src="Happy_Italy_kinderfeestje.jpeg">
        <p id="titel">Welkom</p>
        <p id="tekst">Op de Happy Italy bestel pagina.<br>
          Bestel hier al uw favoriete pizza's en pasta
        </p>
      </div>
      <a href="#"><div id="knop">Bestel Hier</div></a>
        

        <div id="stippen">
            <span class="stip" id=stip1 onclick="Slide(1)"></span>
            <span class="stip" id=stip2 onclick="Slide(2)"></span>
            <span class="stip" id=stip3 onclick="Slide(3)"></span>
        </div>

        <a href="Info/Info.php"><div id="knop2">meer informatie</div></a>
        <div id="lijn"></div>
        <div id="foto3div"><img src="index/img/logo.png" alt="" id="foto3"></div>

      </div>
    
  </div>
      <!--------------------------->
      <div class="fixed-footer">
        <div class="container"></div>
      </div>
</body>
</html>