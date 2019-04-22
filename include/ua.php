<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'miniproject');

//register
	if (isset($_POST['register'])) {
		$id=rand(0000,9999);
		$username=$_POST['username'];
		$password=$_POST['password'];

		$uasql = "INSERT INTO user (id,username,password,user_type)
				 VALUES ('$id','$username','$password','ua')";

		$uaquery=mysqli_query($db, $uasql);	
		
		$_SESSION['message'] = "Register successful"; 
		header('location: ../universityadminmanagement.php');
	}
	else {
		$_SESSION['message'] = "Register unsuccessful"; 
		header('location: ../universityadminmanagement.php');
	}
	
//update
	if (isset($_POST['update'])) {
		$id=$_POST['id'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$uasql = "UPDATE user SET username='$username', password='$password' 
					WHERE id=$id";

		$uaquery=mysqli_query($db, $uasql);
		
		$_SESSION['message'] = "Update successful"; 
		header('location: ../universityadminmanagement.php');
	}
	else {
		$_SESSION['message'] = "Update unsuccessful"; 
		header('location: ../universityadminmanagement.php');
	}
	
//delete
	if(isset($_POST['del']))
	{
		 $id=$_GET['del'];
		 mysqli_query($db, "DELETE FROM user WHERE id=$id");
		 
		 $_SESSION['message'] = "Delete successful"; 
		 header('location: ../universityadminmanagement.php');
	}
	else {
		
		$_SESSION['message'] = "Delete unsuccessful"; 
		header('location: ../universityadminmanagement.php');
	}
	
	
	
	
?>