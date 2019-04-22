<?php
$db=mysqli_connect("localhost","root","","miniproject");

if(isset($_POST['apply'])){

$application_id=rand(0000,9999);
//$username=$_session['username'];
$id=$_session['id'];
$uni_id=$_POST['uni_id'];
$progrm_id=$_POST['progrm_id'];
$uni_name=$_session['uni_name'];
$progrm_name=$_session['progrm_name'];
$feedback=$_POST['feedback'];
	
$info= mysqli_query($db,"INSERT INTO application(application_id,id,uni_id,progrm_id,feedback) 
						VALUES ('$application_id','$id','$uni_id','$progrm_id','$feedback')");

//$apply=mysqli_fetch_array($info);

if ($info /*$apply*/) {
	echo 'successful';
}
else {
	echo 'unsuccessful';
}
}


/*
$info= mysqli_query($db,"INSERT INTO application(application_id,id,uni_id,progrm_id,feedback) 
						VALUES ('$application_id','$id','$uni_id','$progrm_id','$feedback') 
						WHERE id in (select * from user where id='$id') 
						and uni_id in (select * from university where uni_id='$uni_id');");

$apply=mysqli_fetch_array($info);
*/




?>