<?php
session_start();
include 'config.php';

if (isset($_POST['signup'])) {
	$surname = $_POST['surname'];
	$middlename =$_POST['middlename'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password =$_POST['password'];
	$phone =$_POST['phone'];

	$newpass = md5($password);

	if (empty($_POST['surname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['password']) ) {
		$message='<div class="alert alert-danger">Please fill empty fields</div>';
	} else{
		$insert = "INSERT INTO tbl_doctors (id, surname, middlename, lastname, email,username, password, phone) VALUES  (:id, :surname, :middlename,:lastname, :email, :username, :password, :phone)";

		$query = $conn->prepare($insert);
		$results = $query->execute(
			array(
			  ":id" => '',
			  ":surname" => $surname,
			  ":middlename" => $middlename,
			  ":lastname" => $lastname,
			  ":email" => $email,
			  ":username" => $username,
			  ":password" => $newpass,
			  ":phone" => $phone
	
			)
		  );

		  if($results == TRUE) {
			$message='<div class="alert alert-success">Registered Successfully</div>';
		  } else {
			$message='<div class="alert alert-danger">There was an error</div>';
		  }
	}

}

?>

<!DOCTYPE html>
<html lang="eng">
<head>
<!-- for-meta-tags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="red health, hospital" />
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

<!-- icons -->
	<div class="banner-bottom" id="about">
		<div class="container">
					<h2 class="w3_heade_tittle_agile">SIGN UP</h2>
			        <p class="sub_t_agileits">Please fill the form to register</p>

					<div class="book-appointment">
					
								<form action=" " method="post">
								<div class="alert"> <?php echo $message; ?> </div>
								<div class="left-agileits-w3layouts same">
									
								<div class="gaps">
									<p>Surname</p>
										<input type="text" name="surname" required=""/>
								</div>	
									
									<div class="gaps">
									<p>Last Name</p>
											<input type="text" name="lastname" required="" />
									</div>	
                                    
									<div class="gaps">
									<p>Username</p>
                                    <input type="text" name="username" required="" />
									</div>
									<div class="gaps">
									<p>Phone</p>
                                    <input type="text" name="phone" pattern="[0-9]{10}" maxlength="10" required="" />
                                    </div>
                                    
								</div>
								<div class="right-agileinfo same">
                                    <div class="gaps">	
                                        <p>Middle Name</p>
                                        <input type="text" name="middlename"/>
                                    </div>
                                    <div class="gaps">
                                        <p>Email</p>
                                        <input type="email" name="email" required="" />
                                    </div>
                                    <div class="gaps">
                                        <p>Password</p>
                                        <input type="password" name="password" required="" />
                                    </div>
								
								</div>
								<div class="clearfix"></div>
									  
									  <input type="submit" name="signup" value="Sign Up">
								<!-- <div style="margin-top: 40px; text-align: center;">
										<button>Login</button>									
								</div> -->
								</form>
								<div style="margin-top: 40px; text-align: center;">
									<input type="submit" value="Already have an account? Log In" onclick="location.href='doctorlogin.php'">
									
								</div>
								

							</div>
					   </div>

		</div>
	</div>
<!-- icons -->





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

<!-- bootstrap-pop-up -->
	
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

	
	
	<script>

</script>
<!-- //here ends scrolling icon -->
</body>
</html>
