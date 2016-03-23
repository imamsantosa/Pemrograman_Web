<?php
if(isset($_POST['username'])){
	echo "Username : <strong> ".$_POST['username']."</strong><br>";
	echo "Password : <strong> ".$_POST['password1']."</strong><br>";
	echo "Confirm Password : <strong> ".$_POST['password2']."</strong>";
}

?>