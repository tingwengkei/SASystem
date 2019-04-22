 <?php
	session_start();
	$db=mysqli_connect("localhost","root","","miniproject");
	if (isset($_POST['create'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];

	
    if($password==$password2){
      //create user
    //  $password=md5($password); //hash password before storing for securtity purpose
      $sql="INSERT INTO user (username,password,user_type) VALUES('$username','$password','user')";
      $qwe="INSERT INTO student (username) VALUES('$username')";

	  mysqli_query($db,$sql);
	  mysqli_query($db,$qwe);
      $_SESSION['message']="You are registered. You may create a profile";
	  
      $_SESSION['username']=$username;
      header("location:do_profile.php");
    }else{
      //failed
	  header("location:login.php");
      $_SESSION['message']="The two passwords do not match";
    }
  }
 ?>

