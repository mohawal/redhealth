<?php
session_start();
include 'config.php';

if (isset($_POST['submit'])) {
	$experience = $_POST['experience'];
	$recommend =$_POST['recommend'];

	if (empty($_POST['experience']) || empty($_POST['recommend']) ) {
		$message='<div class="alert alert-danger">Please fill empty fields</div>';
	} else{
		$insert = "INSERT INTO tbl_response (id, username, experience, recommend) VALUES  (:id, :username, :experience, :recommend)";

		$query = $conn->prepare($insert);
		$results = $query->execute(
			array(
			  ":id" => '',
			  ":username" => $username,
			  ":experience" => $experience,
			  ":recommend" => $recommend
	
			)
		  );

		  if($results == TRUE) {
			$message='<div class="alert alert-success">Response Submitted</div>';
		  } else {
			$message='<div class="alert alert-danger">Sorry! an error occured</div>';
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
<meta name="keywords" content="Health LG, " />
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
						<h3><a class="navbar-brand" href="index.html"> Avi-pra <p>Health Care 4U</p></a></h3>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--sebastian">
					<ul id="m_nav_list" class="m_nav menu__list">
						<li class="m_nav_item menu__item" id="m_nav_item_1"> <a href="logout.php" class="menu__link"> Logout </a></li>

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
				<li>PATIENT</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->
<!-- icons -->
	<div class="banner-bottom" id="about">
		<div class="container">
					

					<div class="book-appointment">
						<h4>What was your experience with us like?</h4>
								<form action=" " method="post">
									
									<div class="left-agileits-w3layouts same">
									<div class="gaps ">
										<br>
										<p>Experience</p>
										<textarea rows="4" name="experience"> </textarea>
									</div>
											
									</div>
									<div class="right-agileinfo same">
									<div class="gaps">
									<p>Would you recommend us to someone?</p>
										<input class="form-check-input mx-5" type="checkbox" name="recommend" id="yes" value="yes">
										<label class="form-check-label" for="yes"><p>Yes</p></label>
										<br>
										<input class="form-check-input" type="checkbox" name="recommend" id="no" value="no">
										<label class="form-check-label" for="no"><p>No</p></label><br>
									</div>
									</div>
									<div class="clearfix"></div>
										<input type="submit" name="submit" value="Submit">
								</form>
								
								
							</div>
					   </div>

		</div>
<!-- icons -->




<!-- footer -->
	<div class="footer">
		<div class="container">
			
			
			<div class="w3_agileits_copy_right_social">
				<div class="col-md-6 agileits_w3layouts_copy_right">
					<p>&copy; 2019 Avi-pra Healthcare. All rights reserved.</p>
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