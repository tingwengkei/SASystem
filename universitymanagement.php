<?php
session_start();
$con=mysqli_connect("localhost","root","","miniproject");

$adminInfo = mysqli_query($con, "SELECT * FROM university;");

$cntua=1;

	if (isset($_GET['edit'])) {
		$uni_id = $_GET['edit'];
		$update = true;
		
		$rec = mysqli_query($con, "SELECT * FROM university WHERE uni_id='$uni_id'");
		$record = mysqli_fetch_array($rec);
		$uni_name=$record['uni_name'];
		$contactno=$record['contactno'];
		$address=$record['address'];
		$university_admin=$record['university_admin'];
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
	<div id = 'university' class = "pop-up-form" id = "ua">
	<form action='include/u.php' class="form-container" method = "post">
		<input type="hidden" name="id" value="<?php echo $progrm_id; ?>"> <br>

		<?php if ($update == true): ?>
		<h1>Update</h1> <br>
			<table id = "university" width='213%'>
			<tr>
				<td width='50%'><b>University ID</b></td>
				<td width='50%'><b>University Name</b></td>
			</tr>
			<tr>
				<td><input value="<?php echo $uni_id; ?>" type="text" placeholder = "Last ID is XXXXX" name="uni_id"> </td>
				<td><input value="<?php echo $uni_name; ?>" type="text" placeholder = "Enter University Name" name="uni_name"></td>
			</tr>
			<tr>
				<td><b>Contact No.</b></td>
				<td><b>Address</b></td>
			</tr>
			<tr>
				<td><input value="<?php echo $contactno; ?>" type="text" placeholder = "Enter Contact No." name="contactno"></td>
				<td><textarea value="<?php echo $address; ?>" placeholder = "Enter address" name="address" rows="10" cols="30"></textarea></td>
			</tr>
			<tr>
				<td colspan='2'><b>Administrator ID</b></td>
			</tr>
			<tr>
				<td><input value="<?php echo $university_admin; ?>" type="text" placeholder = "Enter University Admin ID" name="university_admin"></td>
				<td><input type="submit" class = "btn" name="update" value="Update"/></td>
			</tr>
			</table>
		<?php else: ?>
		<h1>Registration</h1> <br>
			<table id = "university" width='213%'>
			<tr>
				<td width='50%'><b>University ID</b></td>
				<td width='50%'><b>University Name</b></td>
			</tr>
			<tr>
				<td><input type="text" placeholder = "Last ID is XXXXX" name="uni_id"> </td>
				<td><input type="text" placeholder = "Enter University Name" name="uni_name"></td>
			</tr>
			<tr>
				<td><b>Contact No.</b></td>
				<td><b>Address</b></td>
			</tr>
			<tr>
				<td><input type="text" placeholder = "Enter Contact No." name="contactno"></td>
				<td><textarea placeholder = "Enter address" name="address" rows="10" cols="30"></textarea></td>
			</tr>
			<tr>
				<td colspan='2'><b>Administrator ID</b></td>
			</tr>
			<tr>
				<td><input type="text" placeholder = "Enter University Admin ID" name="university_admin"></td>
				<td><input type="submit" class = "btn" name="register" value="Register"/></td></td>
			</tr>
			</table>
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
				<th>University ID</th>
				<th>Name</th>
				<th>Contact N0.</th>
				<th>Address</th>
				<th>Admin</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php 
				while($row=mysqli_fetch_array($adminInfo)){?>
			<tr>
				<td><?php echo $cntua?></td>
				<td><?php echo $row['uni_id']?></td>
				<td><?php echo $row['uni_name']?></td>
				<td><?php echo $row['contactno']?></td>
				<td><?php echo $row['address']?></td>
				<td><?php echo $row['university_admin']?></td>
				<td>
					<a href='universitymanagement.php?edit=<?php echo $row['uni_id']; ?>' onclick="editu()">Edit</a>
					<a href="include/u.php?id=<?php echo $row['uni_id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
				</td>
			</tr>
				<?php $cntua++; } ?>

		</tbody>
	</table>


</div>

</div>
</body>

</html>