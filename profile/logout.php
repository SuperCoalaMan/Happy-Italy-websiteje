<?php
session_start();
session_unset();
session_destroy();
header('Location: ../AccountGegevens/login.html');
exit();
?>