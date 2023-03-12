<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit();
}
?>

<?php if (isset($_SESSION['user_id'])) { ?>
            <h1>Welcome, <?php echo $_SESSION['user_id']; ?>!</h1>
            <p>You are now logged in.</p>
        <?php } else { ?>
            <h1>Welcome to My Website</h1>
            <p>Please log in to access your account.</p>
        <?php } ?>

        
<?php
session_start();
?>