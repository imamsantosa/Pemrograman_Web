<?php
$cd_order = 0; 
$dvd_order = 0;
if (isset($_COOKIE['cd_order'])) {
	$cd_order = $_COOKIE['cd_order'];
}
if (isset($_COOKIE['dvd_order'])) {
	$dvd_order = $_COOKIE['dvd_order'];
}

if (!isset($_SESSION['credential'])) {
	echo "<script>alert('Insufficient Credential'); </script>";
	header('location: login.php');
} else {
	session_start();
	$uname = $_SESSION['credential']['username'];
}

?>
<html>
<head>
	<title>Order Form</title>
</head>
<body>
	<p>Welcome, <?php echo $uname ?></p>
	<p><a href="logout.php">Logout</a></p>
	<form action="proses.php" method="POST">
		<p> Order CD, amount : 
		<input type="text" name="cd_order" value=<?php echo "\"$cd_order\"" ?> size="2" 
		maxlength="2" />
		</p>
		<p> Order DVD, amount :
		<input type="text" name="dvd_order" value=<?php echo "\"$dvd_order\"" ?> size="2" 
		maxlength="2" />
		</p>
		<input type="submit" value="Add To Cart" name="submit" />
	</form>
</body>
</html>