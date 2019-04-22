<?php
$dh=mysqli_connect('localhost','root','','miniproject');

$sql="select * from university";
$result=mysqli_query($dh,$sql);

$sql2="select * from programme";
$proresult=mysqli_query($dh,$sql2);


?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>EDU CHOICE | List of Institution</title>
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
	#border {
		border:solid 1px grey;
		border-radius: 50px 50px 50px 50px;
		padding:15px;
		margin:10px;
	}
	
	* {
  box-sizing: border-box;
}

#myInput {
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
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
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
            <div class="top-btns">
                <div class="sign-btn">
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                        Sign In</a>
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">
                       Register</a>
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
					<li class="breadcrumb-item active">Institutions</li>
				</ol>
    <!--contenttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->
    <!--banner-bottom-w3layouts-->
    <section class="banner-bottom-w3layouts py-md-5 py-4">
        <div class="container">
            <div class="inner-sec-wthree-w3ls py-md-5 py-4">
                <h3 class="tittle-w3l text-center mb-lg-5 mb-3">
                    <span>List of </span>Universities</h3>
                   <div class="row mt-5" width="100%">
                       
					   <input type="text" id="myInput" onkeyup="search()" placeholder="Search for names.." title="Type in a name">
					   
                       <div class="serve-grid" width='200%' id = 'role'>
                          <div class="row serve-gd-ingo" id='con'>
				<form style='margin-left:350px;' method='post' action='up.php'>
                            <div class="col-md-3 s-icon text-center">
							<i class="fas fa-headphones"></i>
                            </div>
							<?php while($row=mysqli_fetch_array($result)) { ?>
                                <div class="col-md-9 s-info text-left">
									<table>
									<div id = 'border'>
									<thead>
										<th name='uni_name'><h4 class="mb-lg-3 mb-3"><?php echo $row['uni_name']; ?></h4></th>
										<th name='uni_id'><?php $row['uni_id']; ?></th>
									</thead>
									<tbody>
										<tr><td><input type='submit' value='More..' name='submit' style='background-color:white;color:red;norder;none;'></td></tr>
									</tbody>
									</div>
									</table>
										
                                </div>
								<?php } ?>
					</form>
                              </div>
<script>
function search() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("role");
    li = ul.getElementsByTagName("table");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("th")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
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
					<!--	<ul class="social mt-lg-0 mt-3">
					<li class="mr-1"><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li class="mx-1"><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li class="mx-1"><a href="#"><span class="fa fa-instagram"></span></a></li>
					<li class="mx-1"><a href="#"><span class="fa fa-linkedin"></span></a></li>
					
				</ul>-->
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
    <p>© 2018 EduChoice. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	
</div>
<!-- //copyright -->


    <!--model-forms-->
    <!--/Login-->
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
                        <h5 class="text-center mb-4">Login Now</h5>
						
                        <form action="signIn.php" method="post">
                            <div class="form-group">
                                <label class="mb-2">Username</label>
                                <input type="text" class="form-control" name="username" id="username"  placeholder="" required="">
                               <!-- <small  class="form-text text-muted">*SAS admin and UA are </small>-->
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="" required="">
                            </div>
                            <div class="form-group">
								<label class="mb-2">User Type</label>
                                <select name="usertype">
								<option value="user">User</option>
								<option value="sas admin">SAS Admin</option>
								<option value="ua">University Admin</option>
								</select>
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4" value="login">Sign In</button>
                            <p class="text-center pb-4">
                                <a href="#" data-toggle="modal2" data-target="#exampleModalCenter"> Don't have an account?</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Login-->
    <!--/Register-->
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
                        <h5 class="text-center mb-4">Register Now</h5>
                      <form action="signup.php" method="post">
                             <div class="form-group">
                                 <label>Username</label>

                                 <input type="text" class="form-control" name="username" id="username" placeholder="" required="">
                             </div>
                           <!--  <div class="form-group">
                                 <label>Last name</label>
                                 <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                             </div>
 							<div class="form-group">
                                 <label class="mb-2">Email address</label>
                                 <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="" required="">
                                 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                             </div>
							 <!--	<div class="form-group">
                                <label>Gender:</label>
                                <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
								<label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
                            </div>-->

                             <div class="form-group">
                                 <label class="mb-2">Password</label>
                                 <input type="password" class="form-control" name="password" id="password" placeholder="" required="">
                             </div>
                             <div class="form-group">
                                 <label>Confirm Password</label>
                                 <input type="password" class="form-control" name="password2" id="password2" placeholder="" required="">
                             </div>

                             <button type="submit" class="btn btn-primary submit mb-4" name="create">Register</button>
                             <p class="text-center pb-4">
                                 <a href="#">By clicking Register, I agree to your terms</a>
                             </p>
                         </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Register-->

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