<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'miniproject');

//register
	if (isset($_POST['register'])) {
		$progrm_id=$_POST['progrm_id'];
		$progrm_name=$_POST['progrm_name'];
		$duration_in_year = $_POST['duration_in_year'];
		$qualification = $_POST['qualification'];
		 
		$psql = "INSERT INTO programme (progrm_id,progrm_name,duration_in_year,qualification)
				 VALUES ('$progrm_id','$progrm_name','$duration_in_year','$qualification')";

		$pquery=mysqli_query($db, $psql);
		
		$_SESSION['message'] = "Register successful"; 
		header('location: ../programmemanagement.php');
	}
	else {
		$_SESSION['message'] = "Register unsuccessful"; 
		header('location: ../programmemanagement.php');
	}
	
//update
	if (isset($_POST['update'])) {
		$progrm_id=$_POST['progrm_id'];
		$progrm_name=$_POST['progrm_name'];
		$duration_in_year = $_POST['duration_in_year'];
		$qualification = $_POST['qualification'];

		$sql = "UPDATE programme SET progrm_name='$progrm_name', duration_in_year='$duration_in_year', qualification='$qualification'
				WHERE progrm_id='$progrm_id'";

		$query=mysqli_query($db, $sql);
		
		$_SESSION['message'] = "Update successful"; 
		header('location: ../programmemanagement.php');
	}
	else {
		$_SESSION['message'] = "Update unsuccessful"; 
		header('location: ../programmemanagement.php');
	}
	
//delete
	if(isset($_POST['del']))
	{
		 $progrm_id=$_POST['progrm_id'];

		 $sql = "delete from programme where progrm_id = '$progrm_id'";

		 $query=mysqli_query($db, $sql);
		 
		 $_SESSION['message'] = "Delete successful"; 
		 header('location: ../programmemanagement.php');
	}
	else {
		$_SESSION['message'] = "Delete unsuccessful"; 
		header('location: ../programmemanagement.php');
	}
	
	
	
	
?>