<?php
session_start();
$con=mysqli_connect('localhost','root','','miniproject');

$sql="select * from student";
$result=mysqli_query($con,$sql);

if (isset($_GET['edit'])) {
		$stuId = $_GET['edit'];
		$update = true;
		
		$rec = mysqli_query($con, "SELECT * FROM student WHERE stuId='$stuId'");
		$record = mysqli_fetch_array($rec);
		
		$stuId=$record['stuId'];
		$username=$record['username'];
		$name=$record['name'];
		$email=$record['email'];
		$gender=$record['gender'];
		$mojor=$record['major'];
		$birthday=$record['birthday'];
		$phone = $record['phone'];
		$qualidication = $record['qualification'];
		$grade = $record['grade'];
		
		$rec2 = mysqli_query($con, "SELECT * FROM application WHERE userID='$stuId'");
		$record2 = mysqli_fetch_array($rec2);
		
		$application_id=$record2['application_id'];
		$userID=$record2['userID'];
		$uni_id = $record2['uni_id'];
		$progrm_id=$record2['progrm_id'];
		$feedback = $record2['feedback'];
		$status = $record2['status'];
		
		$rec4 = mysqli_query($con, "SELECT * FROM application WHERE userID='$stuId'");
		$record4 = mysqli_fetch_array($rec4);
		
		$application_id=$record4['application_id'];
		$userID=$record4['userID'];
		$uni_id = $record4['uni_id'];
		$progrm_id=$record4['progrm_id'];
		
		$rec3 = mysqli_query($con, "SELECT * FROM programme WHERE progrm_id='$progrm_id'");
		$record3 = mysqli_fetch_array($rec3);
		
		$progrm_id=$record3['progrm_id'];
		$progrm_name=$record3['progrm_name'];
		$duration_in_year = $record3['duration_in_year'];
		$qualification=$record3['qualification'];
		
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>EDU CHOICE | University Administrator</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html {
  font-family:'Open Sans', Arial, sans-serif;
}

body {
  background-repeat:no-repeat;
  background-size:cover;
}

#container {
  margin:auto;
  width:90%;
  height:100%;
}

.sasystem {
  font-size: 50px;
  font-weight: 600;
  margin-left: 20px;
  margin-top:10px;
  letter-spacing: 1px;
  color: black;
  padding: 0px 0;
  border: none;
  text-transform: capitalize;
}

#logout {
  float:right;
  font-family:'Open Sans', Arial, sans-serif;
  font-size:10px;
  font-weight:bold;
  margin-right:10px;
  margin-top:10px;
}

.logout {
  text-align:right;
  background-color: #555;
  color:white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  font-size:20px;
}

a {
  text-decoration: none;
  font-size: 10px;
  color: red;
}

button:hover, a:hover {
  opacity: 0.7;
}

/* student list */

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 45%;
  height:100%;
  margin: auto;
  padding:10px;
  padding-top:0;
  float: left;
  background-color:white;
  box-sizing: border-box;
}

ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

ul li {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
  position: relative;
}

ul li:hover {
  background-color: #eee;
}

.close {
  cursor: pointer;
  position: absolute;
  top: 50%;
  right: 0%;
  padding: 12px 16px;
  transform: translate(0%, -50%);
}

.close:hover {background: #bbb;}

.list {
  width:95%;
}

.list tr td {
  width:50%;
}

.card .studentopen {
  border: none;
  outline: 0;
  display: inline-block;
  margin:2px;
  color: white;
  background-color: red;
  text-align: center;
  cursor: pointer;
  width: 50%;
  font-size: 15px;
}

/* student */

.student {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 45%;
  height:100%;
  margin: auto;
  padding:10px;
  padding-top:0;
  float: right;
  background-color:white;
}



.profile {
  margin:auto;
  width:90%;
  height:100%;
}

.student1 {
  float:left;
  width:45%;
}

.student2 {
  float:right;
  width:45%;
}

.profile .cancel, .profile input[type=submit] {
  border: none;
  outline: 0;
  display: inline-block;
  margin:2px;
  padding: 8px;
  color: white;
  background-color: #4CAF50;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.profile .cancel {
  background-color: red;
}

textarea {
  line-height:90%;
}
</style>
</head>
<body>
<div id = "container">
<a href="index.php"><h2 class = "sasystem" style="float:left; width:80%;">EDU CHOICE</h2></a>
<form style = "float:right" id = "logout" action = "logout.php" method = "post">
	<input class = "logout" type="submit" name="logout" value="Logout"/>
</form>

<div class="card">
	<h1>Student List</h1>
	<p></p>
<ul>
<?php  $cnt=1;
				while($row=mysqli_fetch_array($result)){?>
  <li>
	<table class = "list">
		<thead>
		<tr>
			<td><?php echo $row['stuId']?></td>
			<td><?php echo $row['name']?></td>
		</thead>
		<tr>
			<td><?php echo $row['major']?></td>
			<td style = "text-align:right;"><a href='universityadmin.php?edit=<?php echo $cnt; ?>' type="button" class="btn studentopen">Modify&#8594;</a></td>
		</tr>
	</table>
	<span class="close">&times;</span>
  </li>
  <?php $cnt++; } ?>
</ul>
</div>

<div class = "student" id = "student">
	<?php if ($update == true): ?>
	<h1>Student Profile</h1>
	<form class = "profile" method="post" action="include/approve.php">
	<div class = "student1">
	  <label for = "id"><b>ID</b></label> <br>
	  <label for = "stuId" name='stuId'><?php echo $stuId; ?></label> <br> <br>
	  
	  <label for = "name"><b>Name</b></label> <br>
	  <label for = "name"><?php echo $name; ?></label> <br> <br>
	  
	  <label for = "email"><b>Email</b></label> <br>
	  <label for = "email"><?php echo $email; ?></label> <br> <br>
	  
	  <label for = "qualification"><b>Qualification</b></label> <br>
	  <label for = "qualification"><?php echo $qualification; echo $grade; ?></label> <br> <br>
	
	  <label for = "major"><b>Major</b></label> <br>
	  <label for = "major"><?php echo $record['major']; ?></label> <br> <br>
	
	  <label for = "gender"><b>Gender</b></label> <br>
	  <label for = "gender"><?php echo $gender; ?></label> <br> <br>
	
	  <label for = "date_of_birth"><b>Date of Birth</b></label> <br>
	  <label for = "date_of_birth"><?php echo $birthday; ?></label> <br> <br>
	  
	  <input type = "submit" class = "btn submit" name = "feedback" value = "Submit"/>
	</div>
	
	<div class = "student2">
	  <label for = "contact_no"><b>Contace No.</b></label> <br>
	  <label for = "contact_no"><?php echo $record['phone']; ?></label> <br> <br>
	  
	  <label for = "progrm_id"><b>Programme ID</b></label> <br>
	  <label for = "progrm_id"><?php echo $record4['progrm_id']; ?></label> <br> <br>
	  
	  <label for = "progrm_name"><b>Program Name</b></label> <br>
	  <label for = "progrm_name"><?php echo $record3['progrm_name']; ?></label> <br> <br>
	  
	  <label for = "status"><b>Status</b></label> <br>
	  <input type="radio" name="status" value="1" checked> Approve<br>
	  <input type="radio" name="status" value="0"> Reject<br> <br>
	  
	  <label for = "progrm_name"><b>Feedback</b></label> <br>
	  <textarea placeholder = "Feedback to student" name="feedback" rows="10" cols="30"></textarea>
	
	
	<?php else: ?>
	
	<?php endif ?>
	  
	 </div>
    </form>
	
</div>
</div>
<script>
function student() {
  document.getElementById("student").style.display = "block";
}

function close() {
  document.getElementById("student").style.display = "none";
}
</script>
<script type="text/javascript">
var closebtns = document.getElementsByClassName("close");
var i;

for (i = 0; i < closebtns.length; i++) {
  closebtns[i].addEventListener("click", function() {
    this.parentElement.style.display = 'none';
  });
}
</script>
</body>
</html>
