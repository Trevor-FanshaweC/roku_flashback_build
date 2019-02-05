<?php 
	require_once('scripts/config.php');
	if(empty($_POST['username']) || empty($_POST['password'])){
		$message = 'Missing Fields';
	}else{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$ip = $_SERVER['REMOTE_ADDR'];

		$message = login($username,$password,$ip);
	}
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
</head>
<body>
	<?php if(!empty($message)):?>
		<p><?php echo $message;?></p>
	<?php endif;?>
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