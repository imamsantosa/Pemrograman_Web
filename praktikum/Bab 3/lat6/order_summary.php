<html>
<head>
	<title>Order Form</title>
</head>
<body>
	<p><u>Order Summary</u></p>
	<?php 
	$num_cd_order = $_COOKIE['cd_order'];  
	$num_dvd_order = $_COOKIE['dvd_order'];  
	echo "Ordered CD : ".$num_cd_order." pieces <br />"; 
	echo "Ordered DVD : ".$num_dvd_order." pieces <br />";
	//echo "<a href=\"Lat3_5a.php?cd_order=$num_cd_order&dvd_order=$num_dvd_order\">Change order</a> <br>";
	echo "<a href=\"input_order.php\">Change order</a> <br>";   
	?>
</body>
</html>