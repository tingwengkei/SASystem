<?php
session_start();
$db=mysqli_connect("localhost","root","","miniproject");


$sql2="select * from programme";
$proresult=mysqli_query($db,$sql2);

$gsql="select * from qualification";
$grade=mysqli_query($db,$gsql);

if(isset($_POST['submit']))
{
  if (isset($_POST['uni_name'])) {
	  
  
$uni_id=$_POST['uni_id'];
$uni_name=$_POST['uni_name'];
$intake=$_POST['intake'];
$requirement=$_POST['requirement'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
$university_admin=$_POST['university_admin'];
$photo=$_POST['photo'];
  }
$sql="select * from university";
$row=mysqli_query($db,$sql);
$result=mysqli_fetch_array($row);

	if (isset($_GET['edit'])) {
		$progrm_name = $_GET['edit'];
		$update = true;
		
		$rec = mysqli_query($db, "SELECT * FROM university WHERE progrm_name=$progrm_name");
		$record = mysqli_fetch_array($rec);
		$progrm_name = $record['progrm_name'];
	}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>EDU CHOICE | Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Collegian a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<style>
	.inner-sec-wthree-w3ls img {
		margin-left:500px;
	}

	#border {
		border:solid 1px grey;
		border-radius: 50px 50px 50px 50px;
		padding:15px;
		margin:10px;
	}
	
	#myInput, #Input {
	  background-image: url('/css/searchicon.png');
	  background-position: 10px 12px;
	  background-repeat: no-repeat;
	  width: 100%;
	  font-size: 16px;
	  padding: 12px 20px 12px 40px;
	  border: 1px solid #ddd;
	  margin-bottom: 12px;
	}

	#myUL {
	  list-style-type: none;
	  padding: 0;
	  margin: 0;
	  border: 1px solid #ddd;
	  margin-top: -1px; /* Prevent double borders */
	  background-color: #f6f6f6;
	  padding: 12px;
	  text-decoration: none;
	  font-size: 18px;
	  color: black;
	  display: block;
	  
	  .btnApply{
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;

	}
	</style>

    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/examples.css" rel="stylesheet" type="text/css">
    <link href="css/slider-pro.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
    <link href="css/nav.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
    <div class="inner-page" id="home">
      <!--/nav-->
        <div class="top_nav">
            <h1>
                <a class="logo" href="index.php">EDU CHOICE</a>
            </h1>
            <?php
            if(isset($_SESSION['message'])){
              echo"<div id='error_msg'>".$_SESSION['message']."</div>";
              unset($_SESSION['message']);
            }
            ?>
            <div class="top-btns">
              <div class="sign-btn">
                    <a href="logout.php">
                        Logout</a>

                </div>
            </div>
            <div class="container-btn" id="btn">
                <div class="text">Menu</div>
                <div id="bars">
                    <div class="bar first"></div>
                    <div class="bar second"></div>
                    <div class="bar third"></div>
                </div>
            </div>


            <!-- top-overlay -->
            <div class="top-overlay fade-out" id="menu">
                <nav class="top-overlay-content" id="nav">
                    <span class="top-overlay-close" id="close-btn"> &times; </span>
                    <div class="container" id="container">
                        <div class="first-nav text-center">
                            <ul class="first-nav text-center">
                            <li><a href="index.php" class="active">Home</a></li>
                            <li><a href="#aboutus">About Us</a></li>
							<li><a href="#apply">Application Guideline</a></li>
                            <li><a href="institution.php">Insitutions</a></li>


                        </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--//nav-->
        </div>

    </div>
       <ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="index.php">Home</a>
					</li>
					<li class="breadcrumb-item active">University Profile</li>
				</ol>
    <!---->
    <!--contenttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->
    <section class="banner-bottom-w3layouts py-md-5 py-4">
        <div class="container">
            <div class="inner-sec-wthree-w3ls py-md-5 py-4">
                <h3 class="tittle-w3l text-center mb-lg-5 mb-3">
                     <?php echo $result['uni_name'] ;?></h3>
					 
                       <div class="card">
                       	<label for = "uni_id"><b>University ID</b></label> <br>
                       	<label for = "uni_id"><?php echo $result['uni_id'];?></label> <br> <br>

                       	<label for = "contactno"><b>Contact No.</b></label> <br>
                       	<label for = "contactno"><?php echo $result['contactno'];?></label> <br> <br>

                       	<label for = "address"><b>Address</b></label> <br>
                       	<label for = "address"><?php echo $result['address'];?></label> <br> <br>



                       </div>
					   		    <h3 class="tittle-w3l text-center mb-lg-5 mb-3">
								<span>List of </span>Programmes</h3>
								<div class="row serve-gd-ingo" style='box-sizing: border-box;' width='100%'>
								<?php while($pro=mysqli_fetch_array($proresult)) { ?>
                                <div class="col-md-9 s-info text-left">
									<ul id="myUL">
									  <li><b>Programme Name:</b> <?php echo $pro['progrm_name']; ?></li>
									   <input type="hidden" name="progrm_id" value="<?php echo $pro['progrm_id']; ?>">

									   <!--button to pop up form  code in 287-->
									    <button class="btnApply" value="apply"><a href="up.php?edit=<?php echo $pro['progrm_name']; ?>" data-toggle="modal" data-target="#exampleModalCenter">Apply Now </a></button>
										
										 <!--button to pop up form -->
										 <button class="btnApply" value="info"><a href="up.php?qua=<?php echo $pro['progrm_name']; ?>" data-toggle="modal" data-target="#exampleModalCenter2">View Info</a></button>
									</ul>
									 
								</div>
								<?php } ?>
							  </div>
								<br>
								<h3 class="tittle-w3l text-center mb-lg-5 mb-3">
								<span>List of </span>Qualification</h3>
								<div class="row serve-gd-ingo" style='box-sizing: border-box;' width='100%'>
								<div class="col-md-9 s-info text-left">
									
									<table>
										
										<thead>
											<tr>
											<th width='40%' ><b>Qualification Name</b></th>
											<th width = '35%'><b>CAlculation of overall result</b></th>
											<th width = '50%'><b>Grading System</b></th>
											</tr>
										</thead>
										<tbody>	
											<?php while($row=mysqli_fetch_array($grade)) { ?>
												<tr>	
												<td><?php echo $row['qua_name']; ?></td>
												<td><?php echo $row['cal_overall'] ?></td>
												<td><?php echo $row['grade'] ?></td>
											</tr>
												<?php  } ?>

										</tbody>
									</table>
									 
								</div>
							  </div>
                       </div>
        </div>
     </div>
    </section>
    <!-- footer -->
<section class="footer py-5">
	<div class="footer-top-w3layouts py-lg-3">
		<div class="container">
			<div class="row footer-grids">
				<div class="col-lg-4 col-md-6 footer-grid text-left">
					<div class="footer-logo">
						<h3 class="mb-3"><a class="logo" href="index.php">EDU CHOICES</a></h3>
						<p>It is a new Student Application System (SAS) for all the graduates</p>
					</div>
				</div>
                <div class="col-lg-2 col-md-6 col-sm-5 mt-lg-0 mt-sm-5 mt-4 footer-grid links text-left">
					<h3 class="mb-4"> links </h3>
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="#aboutus">About Us</a>
						</li>
						<li>
							<a href="#apply">Application Guidelines</a>
						</li>
						<li>
							<a href="institution.php">Institutions</a>
						</li>


					</ul>
				</div>
                <div class="col-lg-3 col-md-6 col-sm-7 mt-lg-0 mt-sm-5 mt-4 footer-grid links text-left">
					<h3 class="mb-4">contact Us </h3>
					<ul>
						<li><strong>Address</strong> : 15, Jalan Sri Semantan 1, Damansara Heights, 50490 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</li>
						<li><strong>mobile</strong> : +01(24) 3212 9436</li>
						<li><strong>phone</strong> : +01(24) 8543 8088</li>
						<li><strong>Mail</strong> : <a href="mailto:info@example.com">info@example.com</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 mt-md-0 mt-sm-5 mt-4 edu-footer-grid text-left">
					<h3 class="mb-4">Subscribe Now </h3>
					<form action="#" method="post">
						<input type="text" name="text" placeholder="Name" required="">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="submit" value="Subscribe">
					</form>
				</div>


			</div>
		</div>
	</div>
</section>
<!-- //footer -->

<!-- copyright -->
<div class="copy_right_w3ls py-4 text-center">
    <p>? 2018 EduChoice. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>

</div>
<!-- //copyright -->


    <!--model-forms-->
    <!--/Apply-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Application Form</h5>

                        <form method="post" action="include/apply.php">
							<input type="hidden" name="progrm_id" value="<?php echo $progrm_id; ?>">

                            <div class="form-group">
                                <label class="mb-2"><b>University Name</b></label>
								<label class="mb-2" name='uni_name'><?php echo $result['uni_name']; ?></label>

                            </div>
							 <div class="form-group">
                                <label class="mb-2"><b>Programme Name</b></label>
								<?php $program=mysqli_query($db, "select * from programme where progrm_name='$progrm_name'");
										$ress=mysqli_fetch_array($program);
								?>
								<label class="mb-2" name='progrm_name'><?php echo $ress['progrm_name']; ?></label>
                            </div>
							
						    <div class="form-group">
								<label>Message</label>
								<textarea id="textarea" name="feedback" placeholder=""></textarea>
							</div>
                            <button type="submit" name='apply' class="btn btn-primary submit mb-4" value="confirm">Submit</button> <!---- this button bring user to user page-->
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--------//Qualification----------------------------->
<?php
$db=mysqli_connect("localhost","root","","miniproject");

if (isset($_GET['qua'])) {
		$progrm_name = $_GET['edit'];
		
		$rec = mysqli_query($con, "SELECT * FROM university WHERE progrm_name=$progrm_name");
		$record = mysqli_fetch_array($rec);
		$progrm_name = $record['progrm_name'];
		$duration_in_year = $record['duration_in_year'];
		$qualification = $record['qualification'];
		$progrm_id = $record['progrm_id'];
	}


?>
	<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Programme Details</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>Duration</label>
							     <label><?php echo $duration_in_year; ?></label> 
                                
                            </div>
                            <div class="form-group">
                                <label>Qualification</label>
                                <label><?php echo $qualification; ?></label>
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4">Ok</button>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//model-form-->

    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- menu -->
    <script src="js/index.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!-- //menu -->
    <!--slider-->
    <script src="js/jquery.sliderPro.min.js"></script>
    <script>
        $(document).ready(function ($) {
            $('#example1').sliderPro({
                width: 1980,
                height: 800,
                arrows: true,
                buttons: false,
                waitForLayers: true,
                thumbnailWidth: 270,
                thumbnailHeight: 100,
                thumbnailPointer: true,
                autoplay: false,
                autoScaleLayers: false,
                breakpoints: {
                    500: {
                        thumbnailWidth: 120,
                        thumbnailHeight: 50
                    }
                }
            });
        });
    </script>
    <!--//slider-->
    <!-- stats -->
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
    <!-- //stats -->

    <!-- carousel -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    900: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->
    <!-- //js -->
    <script src="js/bootstrap.js"></script>
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear'
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
</body>

</html>
<?php
}
?>