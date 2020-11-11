<?php
session_start();
include 'config.php';

if (isset($_POST['addmedicine'])) {
	$name = $_POST['name'];
	$description =$_POST['description'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];


	if (empty($_POST['name']) || empty($_POST['description']) || empty($_POST['price']) || empty($_POST['quantity']) ) {
		$message='<div class="alert alert-danger">Please fill empty fields</div>';
	} else{
		$insert = "INSERT INTO tbl_medicines (id, name, description, price, quantity) VALUES  (:id, :name, :description,:price, :quantity)";

		$query = $conn->prepare($insert);
		$results = $query->execute(
			array(
			  ":id" => '',
			  ":name" => $name,
			  ":description" => $description,
			  ":price" =>$price,
			  ":quantity" => $quantity
	
			)
		  );

		  if($results == TRUE) {
			$message='<div class="alert alert-success">Medicine Added</div>';
		  } else {
			$message='<div class="alert alert-danger">An error occured</div>';
		  }
	}

}

?>

<!DOCTYPE html>
<html lang="zxx">
<head>
<title>RedHealth</title>
<!-- for-meta-tags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="redhealth, red health, health care, hospital" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-meta-tags-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Portfolio-CSS -->	<link rel="stylesheet" href="css/swipebox.css" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/customstyle.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 

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
						<h3> Dr. <p>Health Care 4U</p></h3>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--sebastian">
					<ul id="m_nav_list" class="m_nav menu__list">
						<li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="logout.php" class="menu__link"> Logout </a> </li>
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
				<li>PHARMACIST</li>
				
			</ul>
		</div>
	</div>
<!-- //banner1 -->

<!-- Portfolio -->
	<div class="portfolio" id="specials">
		<?php
	//	echo '<script>. $message . </script>';
		
		?>
			<div class="container">
				

			<div class="tabs tabs-style-bar">
				<nav>
					<ul>
						<li><a href="#profile" class="icon icon-box"><span>Profile</span></a></li>
						<li><a href="#appointments" class="icon icon-display"><span>Add Medicine</span></a></li>
					</ul>
				</nav>

				<div class="content-wrap">

					<!-- Tab-1 -->
					<section id="profile" class="agileits w3layouts">

					<div class="container">
    <div class="main-body">
    
         
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <!-- <div class="d-flex flex-column align-items-center text-center"> -->
                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150"> -->
                    <!-- <div class="mt-3">
                    </div> -->
                  <!-- </div> -->
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Kenneth Valdez
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      fip@jukmuh.al
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (239) 816-9029
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (320) 380-4539
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Bay Area, San Francisco, CA
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
    </div>
						
					</section>
					<!-- //Tab-1 -->

					<!-- Tab-2 -->
					<section id="appointments" class="agileits w3layouts">
						<form action=" " method="POST">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Name of Medicine</label>
                                <input type="text" class="form-control" name="name" placeholder="Name of Medicine">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Description</label>
                                <input type="text" class="form-control"  name="description" placeholder="Description">
                              </div>
                            </div>
                            
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputCity">Price</label>
                                <input type="text" class="form-control"  name="price" placeholder="Price">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputCity">Quantity</label>
                                <input type="text" class="form-control"  name="quantity" placeholder="Quantity">
                              </div>
                              
                            </div>
							<input type="submit" name="addmedicine" value="Add Medicine">

                        </form>
                        <!-- <button type="submit" name="addmedicine" class="btn btn-primary">Add Medicine</button> -->
					</section>
					<!-- //Tab-2 -->

					
				</div><!-- //Content -->
			</div><!-- //Tabs -->

		</div>
	</div>
	<!-- //Portfolio -->



<!-- footer -->
	
<!-- //footer -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
 <!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- Gallery-Tab-JavaScript -->
			<script src="js/cbpFWTabs.js"></script>
			<script>
				(function() {
					[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
						new CBPFWTabs( el );
					});
				})();
			</script>
		<!-- //Gallery-Tab-JavaScript -->


<!-- Swipe-Box-JavaScript -->
			<script src="js/jquery.swipebox.min.js"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
			</script>
		<!-- //Swipe-Box-JavaScript -->
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
<!-- //here ends scrolling icon -->
</body>
</html>