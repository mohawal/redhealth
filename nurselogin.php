<?php
session_start();
include 'config.php';

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $pass = md5($password);

  
    $sql = "SELECT * FROM tbl_nurses WHERE username = :username AND password = :password LIMIT 1";
    $query = $conn->prepare($sql);
    $query->execute(
      array(
        ':username' => $username,
        ':password' => $pass
      )
	);
	$count = $query->rowCount();
	if($count > 0)
	
    {
		
		while ($row = $query->fetch()) {
				
				$email = $row['email'];
		  
				$_SESSION['username'] = $email;
				$_SESSION['username'] = $_POST['username'];
				
				header("location: nursesportal.php");
			}
		}
	 else {
		$message='<div class="alert alert-danger">Incorrect Username or Password</div>';
	}

	
}

?>
<!DOCTYPE html>
<html lang="eng">
<head>
<!-- for-meta-tags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Health, hospital" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-meta-tags-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 

</head>
	
<body>

<!-- //banner1 -->
<!-- icons -->
	<div class="banner-bottom" id="about">
		<div class="container">
					<h2 class="w3_heade_tittle_agile">Login</h2>
			        <p class="sub_t_agileits">Please fill the form to login</p>

					<div class="book-appointment">
								<form action="" method="post">
								<div class="alert"> <?php echo $message; ?> </div>
								<div class="left-agileits-w3layouts same">
								
									<div class="gaps">
									<p>Username</p>
										<input type="text" name="username" placeholder="" required="" />
									</div>	
									
								</div>
								<div class="right-agileinfo same">
                                    <div class="gaps">
                                        <p>Password</p>
                                            <input type="password" name="password" placeholder="" required="" />
                                        </div>	
								
								</div>
								<div class="clearfix"></div>
									<input type="submit" value="login" name="login">
                                </form>
                                <div style="margin-top: 40px; text-align: center;">
									<input type="submit" value="Don’t have an account? Sign Up" onclick="location.href='nursesignup.php'">
									
								</div>
							</div>
					   </div>

		</div>
	</div>
<!-- icons -->




<!-- footer -->
	
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
				  
			<!-- //Calendar -->


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

</script>
<!-- //here ends scrolling icon -->
</body>
</html>