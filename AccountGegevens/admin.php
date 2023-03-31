<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit();
}


if ($_SESSION['user_id'] !== 'admin') {
    header('Location: index.html');
    exit();
}


if (isset($_POST['delete'])) {
    $username = $_POST['username'];

    
    $users = file_get_contents('users.json');
    $users = json_decode($users, true);

   
    foreach ($users as $key => $user) {
        if ($user['username'] === $username) {
            unset($users[$key]);
        }
    }

    
    file_put_contents('users.json', json_encode($users));

   
    header('Location: admin.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registered Users</title>
    <link rel="stylesheet" href="Css/login.css">
</head>
<body>
<div class="fixed-header">
      <div class="container">
        <nav id="nav">
          <a href="../menu/Menu.php">bestellen/menu</a>
		  <a href="../Info/Info.php">Info</a>
          <a href="../index.html">Home</a>
          <?php if (isset($_SESSION['user_id'])) { ?>
            <a href="../profile/profile.php">Profiel</a>
            <h1>Welkom terug, <?php echo $_SESSION['user_id']; ?>!</h1>
        <?php } else { ?>
          
        <?php } ?>
        </nav>
      </div>
    </div>
    <div class="users">
	<h1>Aangemelde mensen op de site</h1>
	<table>
		<tr>
			<th>Username</th>
			<th>Encrypted Password</th>
			<th>Action</th>
		</tr>
		<?php
		

		$users = file_get_contents('users.json');
		$users = json_decode($users, true);

		foreach ($users as $user) {
			echo '<tr>';
			echo '<td>' . $user['username'] . '</td>';
			echo '<td>' . $user['password'] . '</td>';
			echo '<td>';
			echo '<form method="post">';
			echo '<input type="hidden" name="username" value="' . $user['username'] . '">';
			echo '<button type="submit" name="delete">Delete</button>';
			echo '</form>';
			echo '</td>';
			echo '</tr>';
		}
		?>
	</table>
    </div>
    <div class="fixed-footer">
      <div class="container"></div>
    </div>
</body>
</html>
