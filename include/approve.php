<?php
session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "miniproject";
 $con = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['feedback']))
{
$userID=$_POST['stuId'];
$status=$_POST['status'];
$feedback=$_POST['feedback'];

 
$uasql = "INSERT INTO application (status,feedback)
         VALUES ('$userID','$feedback') where userID='$userID'";

$uaquery=mysqli_query($con, $uasql);
	
 
 if($uaquery){
 echo ("Successfully Registered");
 ?> 
 <br>
 <a href = "sasadmin.php">Go back</a>
 <?php
 }
}



 mysqli_close($con);
?>