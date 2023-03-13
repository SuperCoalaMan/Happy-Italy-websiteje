<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

  
    $users = file_get_contents('users.json');
    $users = json_decode($users, true);

    foreach ($users as $user) {
        if ($user['username'] == $username && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['username'];
            header('Location: ../index.php');
            exit();
        }
    }

    
    $_SESSION['error'] = "Invalid username or password";
    header('Location: login.html');
    exit();
}
?>