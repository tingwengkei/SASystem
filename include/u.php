<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'miniproject');

//register
	if (isset($_POST['register'])) {
		$uni_id=$_POST['uni_id'];
		$uni_name=$_POST['uni_name'];
		$contactno=$_POST['contactno'];
		$address=$_POST['address'];
		$university_admin=$_POST['university_admin'];
		 
		$psql = "INSERT INTO university (uni_id,uni_name,contactno,address,university_admin)
				VALUES ('$uni_id','$uni_name','$contactno','$address','$university_admin')";

		$pquery=mysqli_query($db, $psql);
		
		$_SESSION['message'] = "Register successful"; 
		header('location: ../universitymanagement.php');
	}
	else {
		$_SESSION['message'] = "Register unsuccessful"; 
		header('location: ../universitymanagement.php');
	}
	
//update
	if (isset($_POST['update'])) {
		$uni_id=$_POST['uni_id'];
		$uni_name=$_POST['uni_name'];
		$contactno=$_POST['contactno'];
		$address=$_POST['address'];
		$university_admin=$_POST['university_admin'];

		$usql = "UPDATE university 
			SET uni_name='$uni_name' 
			contactno='$contactno' 
			address='$address' 
			university_admin='$university_admin' 
			WHERE uni_id='$uni_id'";

		$query=mysqli_query($db, $usql);
		
		$_SESSION['message'] = "Update successful"; 
		header('location: ../universitymanagement.php');
	}
	else {
		$_SESSION['message'] = "Update unsuccessful"; 
		header('location: ../universitymanagement.php');
	}
	
//delete
	if(isset($_POST['del']))
	{
		 $uni_id=$_GET['uni_id'];

		 $sql = "delete from university where uni_id = '$uni_id'";

		 $query=mysqli_query($db, $sql);
		 
		 $_SESSION['message'] = "Delete successful"; 
		 header('location: ../universitymanagement.php');
	}
	else {
		$_SESSION['message'] = "Delete unsuccessful"; 
		header('location: ../universitymanagement.php');
	}
	
	
	
	
?>