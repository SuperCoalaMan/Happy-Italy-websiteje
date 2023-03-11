<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="POST">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <label>Confirm Password:</label>
        <input type="password" name="confirm_password" required>
        <br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the user input
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate the password
    if ($password != $confirm_password) {
        $_SESSION['error'] = "Passwords do not match";
        header('Location: register.html');
        exit();
    }

    // Create a new user account
    $users = file_get_contents('users.json');
    $users = json_decode($users, true);

    foreach ($users as $user) {
        if ($user['username'] == $username) {
            $_SESSION['error'] = "Username already exists";
            header('Location: register.html');
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="POST">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <label>Confirm Password:</label>
        <input type="password" name="confirm_password" required>
        <br>
        <input type="submit" value="Register">
    </form>
</body>
</html>