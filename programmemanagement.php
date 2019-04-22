<?php
session_start();
$con=mysqli_connect("localhost","root","","miniproject");

$adminInfo = mysqli_query($con, "SELECT * FROM programme;");

$cntua=1;

	if (isset($_GET['edit'])) {
		$progrm_id = $_GET['edit'];
		$update = true;
		
		$rec = mysqli_query($con, "SELECT * FROM programme WHERE progrm_id='$progrm_id'");
		$record = mysqli_fetch_array($rec);
		$progrm_name = $record['progrm_name'];
		$duration_in_year = $record['duration_in_year'];
		$qualification = $record['qualification'];
		$progrm_id = $record['progrm_id'];
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
	<form action='include/p.php' class="form-container" method = "post">
		<input type="hidden" name="id" value="<?php echo $progrm_id; ?>"> <br>

		<?php if ($update == true): ?>
		<h1>Update</h1> <br>
			<label for = "progrm_id"><b>Programme ID</b></label> <br>
			<input type="text" value="<?php echo $progrm_id; ?>" type="text" placeholder = "Enter programme ID" name="progrm_id"> <br> <br>
			
			<label for = "progrm_name"><b>Programme Name</b></label> <br>
			<input type="text" type="text" value="<?php echo $progrm_name; ?>" placeholder = "Enter programme name" name="progrm_name"> <br> <br>
			
			<label for = "duration(year)"><b>Duration in Year</b></label> <br>
			<input type="text" type="text" value="<?php echo $duration_in_year; ?>" placeholder = "Enter duration in year" name="duration_in_year"> <br> <br>
			
			<label for = "qualification"><b>Qualification</b></label> <br>
			<input type="text" type="text" value="<?php echo $qualification; ?>" placeholder = "Enter qualification" name="qualification"> <br> <br>
			
			<input type="submit" class = "btn" name="update" value="Update"/>
		<?php else: ?>
		<h1>Registration</h1> <br>
			<label for = "progrm_id"><b>Programme ID</b></label> <br>
			<input type="text" type="text" placeholder = "Enter programme ID" name="progrm_id"> <br> <br>
			
			<label for = "progrm_name"><b>Programme Name</b></label> <br>
			<input type="text" type="text" placeholder = "Enter programme name" name="progrm_name"> <br> <br>
			
			<label for = "duration(year)"><b>Duration in Year</b></label> <br>
			<input type="text" type="text" placeholder = "Enter duration in year" name="duration(year)"> <br> <br>
			
			<label for = "qualification"><b>Qualification</b></label> <br>
			<input type="text" type="text" placeholder = "Enter qualification" name="qualification"> <br> <br>
			
			<input type="submit" class = "btn" name="register" value="Register"/>
		<?php endif ?>
	</form>
	</div>
</div>


<!--tables and edit and delete---------------------------------------------------------------------->
<div class = "managementtable">
<!--university admin--------------------------------->
	
	<table class="resulttable" width='200%'>
		
		<thead>
		<tr><th colspan='7'><h3>Programme</h3></th></tr>
			<tr>
			<th width=''>No.</th>
			<th width='20%'>Programme ID</th>
			<th width='35%'>Programme Name</th>
			<th width='17%'>Duration in year</th>
			<th width='35%'>Qualification</th>
			<th>Action</th>
			</tr>
		</thead>
		<tbody>	
			<?php while($row=mysqli_fetch_array($adminInfo)) { ?>
				<tr>	
				<td><?php echo $cntua; ?></td>
				<td><?php echo $row['progrm_id'] ?></td>
				<td><?php echo $row['progrm_name'] ?></td>
				<td><?php echo $row['duration_in_year'] ?></td>
				<td><?php echo $row['qualification'] ?></td>
				<td>
					<a href='programmemanagement.php?edit=<?php echo $row['progrm_id']; ?>' onclick="editua()">Edit</a>
					<a href="include/p.php?id=<?php echo $row['progrm_id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">
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