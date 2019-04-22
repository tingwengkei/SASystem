<?php
session_start();
$con=mysqli_connect("localhost","root","","miniproject");
?>
<!DOCTYPE HTML>
<html lang = "en">
<head>
<title>SASystem | SASAdmin Portal</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
<link rel="stylesheet" type="text/css" href="css/sasadmin.css">
<style>
	.ad {
		background-color: #4CAF50;
		color: white;
		padding: 16px 20px;
		border: none;
		cursor: pointer;
		width:100%;
		margin-bottom:10px;
		opacity: 0.8;
	}
	
	a {
		text-decoration:none;
		color:white;
	}
</style>
<a href="index.php"><h2 class = "SASYSTEM" style="float:left; width:80%;">EDU CHOICE</h2></a>
<form class = "headRight" action = "logout.php" method = "post">
	<input class = "logout" type="submit" name="logout" value="Logout"/>
</form>


</header>
</head>

<body style = "margin:0; background-image:url(bg-sasadmin.png);">
<div id = "container">
	<a href='universityadminmanagement.php'><button class='ad'>University Administrator</button></a>
	<a href='universitymanagement.php'><button class='ad'>University</button></a>
	<a href='programmemanagement.php'><button class='ad'>Programme</button></a>
	<a href='qualification.php'><button class='ad'>Qualification</button></a>



</div>
</body>

</html>