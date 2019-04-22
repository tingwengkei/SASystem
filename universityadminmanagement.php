<?php
session_start();
$con=mysqli_connect("localhost","root","","miniproject");

$adminInfo = mysqli_query($con, "SELECT * FROM user  WHERE user_type='ua' OR user_type='UA';");

$cntua=1;

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		
		$rec = mysqli_query($con, "SELECT * FROM user WHERE id=$id");
		$record = mysqli_fetch_array($rec);
		$username = $record['username'];
		$password = $record['password'];
		$id = $record['id'];
	}
?>
<!DOCTYPE HTML>
<html lang = "en">
<head>
<title>SASystem | SASAdmin Portal</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/sasadmin.css">
<header>
<a href="SASadminHome.php"><h2 class = "SASYSTEM" style="float:left; width:80%;">EDU CHOICE</h2></a>
<form class = "headRight" action = "logout.php" method = "post">
	<input class = "logout" type="submit" name="logout" value="Logout"/>
</form>


</header>
</head>

<body style = "margin:0; background-image:url(bg-sasadmin.png);">
<div id = "container">
<!--Option---------------------------------------------------------------------->
<div id = "managementform">
<!--University Admin-------------------->
	<!--university admin-------------------->
	<div class = "pop-up-form" id = "ua">
	<form action='include/ua.php' class="form-container" method = "post">
		<input type="hidden" name="id" value="<?php echo $id; ?>"> <br>

		<?php 
		if ($update == true): ?>
		<h1>Update</h1> <br>
			<label for = "username"><b>Username</b></label> <br>
			<input type="text" value="<?php echo $username; ?>" type="text" placeholder = "Enter username" name="username"> <br> <br>
			
			<label for = "password"><b>Password</b></label> <br>
			<input type="text" type="text" value="<?php echo $password; ?>" placeholder = "Enter password" name="password"> <br> <br>
			
			<input type="submit" class = "btn" name="update" value="Update"/>
		<?php else: ?>
		<h1>Registration</h1> <br>
			<label for = "username"><b>Username</b></label> <br>
			<input type="text" type="text" placeholder = "Enter username" name="username"> <br> <br>
			
			<label for = "password"><b>Password</b></label> <br>
			<input type="text" type="text" placeholder = "Enter password" name="password"> <br> <br>
			
			<input type="submit" class = "btn" name="register" value="Register"/>
		<?php endif ?>
	</form>
	</div>
</div>


<!--tables and edit and delete---------------------------------------------------------------------->
<div class = "managementtable">
<!--university admin--------------------------------->
	
	<table class="resulttable">
		
		<thead>
		<tr><th colspan='7'><h3>University</h3></th></tr>
			<tr>
			<th >No.</th>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>User Type</th>
			<th>Action</th>
			</tr>
		</thead>
		<tbody>	
			<?php while($row=mysqli_fetch_array($adminInfo)) { ?>
				<tr>	
				<td><?php echo $cntua; ?></td>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['username'] ?></td>
				<td><?php echo $row['password'] ?></td>
				<td><?php echo $row['user_type'] ?></td>
				<td>
					<a href='universityadminmanagement.php?edit=<?php echo $row['id']; ?>' onclick="editua()">Edit</a>
					<a href="include/ua.php?del=<?php echo $row['id']?>" onClick="return confirm('Are you sure you want to delete?')">
					Delete</a>
				</td>
			</tr>
				<?php $cntua++; } ?>

		</tbody>
	</table>


</div>

</div>
</body>

</html>