
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit();
}
?>




<!---->
<?php if (isset($_SESSION['user_id'])) { ?>




           <!--Als je bent ingelogt code-->




        <?php } else { ?>
            

            <!--Als je nog niet bent ingelogt code-->


        <?php } ?>

   
        
<!--Sessie starten-->     
<?php
session_start();
?>