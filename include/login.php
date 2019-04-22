
<?php
session_start();

$db=mysqli_connect("localhost","root","","miniproject");

if(isset($_POST['login'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$usertype=$_POST['usertype'];

//	$password=md5($password);
	$sql="SELECT * FROM user WHERE username='$username'and password='$password' and usertype='$usertype';";
	$result=mysqli_query($db, $sql);


//  		$row=mysqli_fetch_array($result);
		//if ($result)
		//{
			$_SESSION['username']=$username;
			if ($usertype=='user')
			header("Location:../user.php");
			else if ($usertype=='sasAdmin')
			header("Location:../SASadminHome.php");
			else if ($usertype=='ua')
			header("Location:../universityadmin.php");

		//}
		else{
			echo 'Incorret username and password';
			?> 
			<br>
			<a href = "login.html">Go back</a>
			<?php
		}
}

?>
