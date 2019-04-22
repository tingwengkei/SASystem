<?php

/*if(isset($_POST['submit'])){*/
	session_start();
	session_unset();
	session_destroy();
	unset($_SESSION['username']);
	$_SESSION['message']='You are now logged out';
	header("Location:index.php");
	exit();

?>
