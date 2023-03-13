<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit();
}
?>

<?php if (isset($_SESSION['user_id'])) { ?>
            <h1>Welcome, <?php echo $_SESSION['user_id']; ?>!</h1>
            <p>Je bent ingelogt.</p>
        <?php } else { ?>
            <h1>welkom op de site</h1>
            <p>U moet eerst inloggen om op uw account te komen.</p>
        <?php } ?>

        
<?php
session_start();
?>