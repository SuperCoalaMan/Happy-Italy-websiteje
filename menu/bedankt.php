<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../AccountGegevens/login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../belangrijkeimages/pictogram.png">
    <title>Bedankt! - Happy Italy</title>
    <link rel="stylesheet" href="css/bedankt.css">
</head>
<body>
    <script src="js/confetti.js"></script>
    <div class="fixed-header">
        <div class="container">
          <nav>
            <a href="../Info/Info.php">info</a>
            <a href="../menu/Menu.php">bestellen/menu</a>
            <a href="../index.php">Home</a>
          </nav>
        </div>
      </div>

      <?php if (isset($_SESSION['user_id'])) { ?>
        <div class="bedankt">
        <h2 >Bedankt voor uw bestelling <?php echo $_SESSION['user_id']; ?>!</h2>
        <p>klik <a href="../index.php">hier</a> om terug naar de home pagina te gaan</p>
      </div>
        <?php } else { ?>
          <div class="bedankt"><h2>Error</h2></div>
        <?php } ?>
      <div class="fixed-footer">
      </div>
</body>
</html>