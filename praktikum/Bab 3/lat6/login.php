<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="login.php" method="POST">
		<p> Username : 
		<input type="text" name="uname" value="" size="10" 
		maxlength="10" />
		</p>
		<p> Password :
		<input type="password" name="pass" value="" size="10" 
		maxlength="10" />
		</p>
		<input type="submit" value="Login" name="submit" />
	</form>
</body>
</html>
<?php
if (isset($_POST['uname']) && isset($_POST['pass'])) {
	if ($_POST['uname'] == 'admin' && $_POST['pass'] == 'admin') {
		session_start();
		$_SESSION['credential'] = ['username' => $_POST['uname'], 'logged_in' => 1];
		header('location: input_order.php');
	} else {
		echo "<script>alert('Insufficient Credential'); </script>";
	}
}
?>