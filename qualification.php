<?php
session_start();
$con=mysqli_connect("localhost","root","","miniproject");

$adminInfo = mysqli_query($con, "SELECT * FROM qualification;");

$cntua=1;

	if (isset($_GET['edit'])) {
		$qua_name = $_GET['edit'];
		$update = true;
		
		$rec = mysqli_query($con, "SELECT * FROM qualification WHERE qua_name='$qua_name'");
		$record = mysqli_fetch_array($rec);
		$cal_overall = $record['cal_overall'];
		$grade = $record['grade'];
		
		$qua_name = $record['qua_name'];
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
	<form action='include/q.php' class="form-container" method = "post">
		<input type="hidden" name="id" value="<?php echo $progrm_id; ?>"> <br>

		<?php if ($update == true): ?>
		<h1>Update</h1> <br>
			<label for = "qua_name"><b>Qualification Name</b></label> <br>
			<input type="text" value="<?php echo $qua_name; ?>" type="text" placeholder = "Enter qualification name" name="qua_name"> <br> <br>
			
			<label for = "cal_overall"><b>Calculation of overall result</b></label> <br>
			<input type="text" type="text" value="<?php echo $cal_overall; ?>" placeholder = "Enter CAlculation of overall result" name="cal_overall"> <br> <br>
			
			<label for = "grade"><b>Grading System</b></label> <br>
			<input type="text" type="text" value="<?php echo $grade; ?>" placeholder = "Enter Grading point" name="grade"> <br> <br>
			
			<input type="submit" class = "btn" name="update" value="Update"/>
		<?php else: ?>
		<h1>Registration</h1> <br>
			<label for = "qua_name"><b>Qualification Name</b></label> <br>
			<input type="text" type="text" placeholder = "Enter qualification name" name="qua_name"> <br> <br>
			
			<label for = "cal_overall"><b>Calculation of overall result</b></label> <br>
			<input type="text" type="text" placeholder = "Enter CAlculation of overall result" name="cal_overall"> <br> <br>
			
			<label for = "grade"><b>Grading System</b></label> <br>
			<input type="text" type="text" placeholder = "Enter Grading point" name="grade"> <br> <br>
			
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
		<tr><th colspan='7'><h3>Qualification</h3></th></tr>
			<tr>
			<th width='20%'>Qualification Name</th>
			<th width='35%'>CAlculation of overall result</th>
			<th width='35%'>Grading System</th>
			<th>Action</th>
			</tr>
		</thead>
		<tbody>	
			<?php while($row=mysqli_fetch_array($adminInfo)) { ?>
				<tr>
				<td><?php echo $row['qua_name'] ?></td>
				<td><?php echo $row['cal_overall'] ?></td>
				<td><?php echo $row['grade'] ?></td>
				<td>
					<a href='qualification.php?edit=<?php echo $row['qua_name']; ?>' onclick="editua()">Edit</a>
					<a href="include/p.php?id=<?php echo $row['qua_name']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">
					Delete</a>
				</td>
			</tr>
				<?php  } ?>

		</tbody>
	</table>


</div>

</div>
</body>

</html>