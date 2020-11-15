<?php
session_start();
include 'config.php';

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$phone =$_POST['phone'];
	$email = $_POST['email'];
	$symptoms = $_POST['symptoms'];
	$date = $_POST['date'];
	$service =$_POST['service'];
	$gender =$_POST['gender'];
	$time =$_POST['time'];

	

	if (empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['email']) || empty($_POST['symptoms']) || empty($_POST['date']) || empty($_POST['service']) || empty($_POST['gender']) || empty($_POST['time']) ) {
		$message='<div class="alert alert-danger">Please fill empty fields</div>';
	} else{
		$insert = "INSERT INTO tbl_appointments (id, name, phone, email, symptoms,date, service, gender, time) VALUES  (:id, :name, :phone, :email, :symptoms, :date, :service, :gender, :time)";

		$query = $conn->prepare($insert);
		$results = $query->execute(
			array(
			  ":id" => '',
			  ":name" => $name,
			  ":phone" => $phone,
			  ":email" => $email,
			  ":symptoms" => $symptoms,
			  ":date" => $date,
			  ":service" => $service,
			  ":gender" => $gender,
			  ":time" => $time
			  
			)
		  );

		  if($results == TRUE) {
			$message='<div class="alert alert-success"> Your response has been received, we will get in touch with you.</div>';
		  } else {
			$message='<div class="alert alert-danger">There was an error</div>';
		  }
	}

}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<!-- for-meta-tags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Health Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-meta-tags-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
			<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- <link href="//fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet"> -->
</head>
	
<body>
<div class="main" id="home">
<!-- banner -->
		<div class="header_agileinfo">
						<div class="w3_agileits_header_text">
							<ul class="top_agile_w3l_info_icons">
									<li><i class="fa fa-home" aria-hidden="true"></i>HOPin Academy, Water Works Road - Tamale.</li>
									<li class="second"><i class="fa fa-phone" aria-hidden="true"></i>(+233) 545510351</li>
									
									<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:redhealthgtl@gmail.com">redhealthgtl@gmail.com</a></li>
								</ul>

						</div>
						<div class="agileinfo_social_icons">
							<ul class="agileits_social_list">
								<li><a href="https://www.facebook.com/" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="https://twitter.com/" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="https://www.linkedin.com/in/vikash-kumar-040006166/" class="w3_agile_linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
			</div>				

		<div class="header-bottom">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<h3><a class="navbar-brand" href="index.html"> ReDHealth<p>ReDifined Digital Health</p></a></h3>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--sebastian">
					<ul id="m_nav_list" class="m_nav menu__list">
						<li class="m_nav_item menu__item" id="m_nav_item_1"> <a href="index.html" class="menu__link"> Home </a></li>
						<li class="m_nav_item menu__item" id="moble_nav_item_2"> <a href="about.html" class="menu__link"> About Us </a> </li>		
						<li class="m_nav_item menu__item menu__item--current" id="moble_nav_item_4"> <a href="appointment.php" class="menu__link">Appointment  </a> </li>
						<li class="m_nav_item menu__item" id="moble_nav_item_5"> <a href="ourservices.html" class="menu__link">Our Services</a> </li>
						<li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="contact.html" class="menu__link"> Contact </a> </li>
						<li class="m_nav_item menu__item" id="moble_nav_item_3 dropdown"> <a href="#" class="menu__link dropdown-toggle" data-toggle="dropdown">User-Login  <b class="caret"></b></a> 
						   <ul class="dropdown-menu agile_short_dropdown">
							<li><a href="doctorlogin.php">Doctor </a></li>
							<li><a href="nurselogin.php">Nurse</a></li>
							<li><a href="pharmacistlogin.php">Pharmacist</a></li>
							<li><a href="plogin.php">Patient</a></li>
<!-- 									<li><a href="login.php">Admin</a></li> -->
								</ul>
						</li>
					</ul>
				</nav>

				</div>
				<!-- /.navbar-collapse -->
			</nav>
	 </div>
</div>
<!-- banner -->
<!-- banner1 -->
	<div class="banner1 jarallax">
		<div class="container">
		</div>
	</div>

	<div class="services-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.html">Home</a><i>|</i></li>
				<li>Appointment</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->
<!-- icons -->
	<div class="banner-bottom" id="about">
		<div class="container">
					<h2 class="w3_heade_tittle_agile">Appointment</h2>
			        <p class="sub_t_agileits">FIll The Form</p>

					<div class="book-appointment">
						<h4>Make an appointment</h4>
								<form action=" " method="post">
								<div class="alert"> <?php echo $message; ?> </div>
								<div class="left-agileits-w3layouts same">
								<div class="gaps">
									<p>Patient Name</p>
										<input type="text" name="name" placeholder="" required=""/>
								</div>	
									<div class="gaps">	
									<p>Phone Number</p>
										<input type="text" name="phone" placeholder="" required=""/>
									</div>
									<div class="gaps">
									<p>Email</p>
											<input type="email" name="email" placeholder="" required="" />
									</div>	
									<div class="gaps">
									<p>Symptoms</p>
											<textarea name="symptoms" placeholder="" required="" ></textarea>
									</div>
								</div>
								<div class="right-agileinfo same">
								<div class="gaps">
									<p>Select Date</p>		
											<input  id="datepicker1" name="date" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								</div>
								<div class="gaps">
									<p>Services</p>	
										<select class="option" name="service">
											<option></option>
											<option value="consultation">Consultation</option>
											
										</select>
								</div>
								<div class="gaps">
									<p>Gender</p>	
										<select class="option" name="gender">
											<option></option>
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
								</div>
								<div class="gaps">
									<p>Time</p>		
										<input type="text" id="timepicker" name="time" class="timepicker option" value="">	
								</div>
								</div>
								<div class="clearfix"></div>
											  <input type="submit" name="submit" value="Make an Appointment">
								</form>
							</div>
					   </div>

		</div>
	</div>
<!-- icons -->




<!-- footer -->
	<div class="footer">
		<div class="container">
			
			<div class="agile_footer_copy">
				<div class="w3agile_footer_grids">
					<div class="col-md-4 w3agile_footer_grid">
						<h3>About Us</h3>
						<p>ReDHealth<span>Redefined Digital Health</span></p>
					</div>
					<div class="col-md-4 w3agile_footer_grid">
						<h3>Contact Info</h3>
						<ul>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>HOPin Academy,<span>Water Works Road, Tamale.</span></li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:redhealthgtl@gmail.com">redhealthgtl@gmail.com</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>+233 545510351</li>
						</ul>
					</div>
					<div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
						<h3>Navigation</h3>
						<ul>
							<li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="gallery.html">gallery</a></li>
							<li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="appointment.html">Appointment</a></li>
							<li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="about.html">About</a></li>
							<li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="contact.html">Contact Us</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="w3_agileits_copy_right_social">
				<div class="col-md-6 agileits_w3layouts_copy_right">
					<p>&copy; 2020 ReDHealth. All rights reserved.</p>
				</div>
				<div class="col-md-6 w3_agile_copy_right">
					<ul class="agileits_social_list">
								<li><a href="https://www.facebook.com/" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="https://twitter.com/" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
 <!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/wickedpicker.js"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>
		<!-- Calendar -->
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->

<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Health Plus
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/g9.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
			<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	
	
	<script>
function myFunction1() {
  alert("Your appointment is booked. Our specalist is available in your given date and time.");
}
</script>
<!-- //here ends scrolling icon -->
</body>
</html>