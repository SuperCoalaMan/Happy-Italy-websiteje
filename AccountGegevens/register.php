<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

   
    if ($password != $confirm_password) {
        $_SESSION['error'] = "Passwords do not match";
        header('Location: regi.html');
        exit();
    }

   
    $users = file_get_contents('users.json');
    $users = json_decode($users, true);

    foreach ($users as $user) {
        if ($user['username'] == $username) {
            $_SESSION['error'] = "Username already exists";
            header('Location: regi.html');
            exit();
        }
    }

    $user = [
        'username' => $username,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ];

    $users[] = $user;
    $users = json_encode($users, JSON_PRETTY_PRINT);
    file_put_contents('users.json', $users);

    $_SESSION['success'] = "User account created successfully";
    header('Location: login.html');
    exit();
}
?>