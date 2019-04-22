<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'miniproject');

//register
	if (isset($_POST['register'])) {
		$qua_name = $_POST['qua_name'];
		$cal_overall = $_POST['cal_overall'];
		$grade = $_POST['grade'];

		$uasql = "INSERT INTO qualification (qua_name,cal_overall,grade)
				 VALUES ('$qua_name','$cal_overall','$grade')";

		$uaquery=mysqli_query($db, $uasql);	
		
		$_SESSION['message'] = "Register successful"; 
		header('location: ../qualification.php');
	}
	else {
		$_SESSION['message'] = "Register unsuccessful"; 
		header('location: ../qualification.php');
	}
	
//update
	if (isset($_POST['update'])) {
		$qua_name = $_POST['qua_name'];
		$cal_overall = $_POST['cal_overall'];
		$grade = $_POST['grade'];
		
		$uasql = "UPDATE qualification SET qua_name='$qua_name', cal_overall='$cal_overall', grade='$grade' 
					WHERE qua_name=$qua_name";

		$uaquery=mysqli_query($db, $uasql);
		
		$_SESSION['message'] = "Update successful"; 
		header('location: ../qualification.php');
	}
	else {
		$_SESSION['message'] = "Update unsuccessful"; 
		header('location: ../qualification.php');
	}
	
//delete
	if(isset($_POST['del']))
	{
		 $qua_name=$_GET['del'];
		 mysqli_query($db, "DELETE FROM qualification WHERE qua_name=$qua_name");
		 
		 $_SESSION['message'] = "Delete successful"; 
		 header('location: ../qualification.php');
	}
	else {
		
		$_SESSION['message'] = "Delete unsuccessful"; 
		header('location: ../qualification.php');
	}
	
	
	
	
?>