<?php 
	require_once('scripts/config.php');
	if(empty($_POST['username']) || empty($_POST['password'])){
		$message = 'Missing Fields';
	}else{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$message = login($username,$password);
	}
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
</head>
<body>
	<form action="admin_login.php" method="post">
		<label>Username:
			<input type="text" name="username" value="" required>
		</label>
		<br>
		<label>Password:
			<input type="password" name="password" required>
		</label>
		<br>
		<button type="submit">Submit</button>
	</form>
</body>
</html>