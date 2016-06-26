<?php
// Free Bootstrap Themes : www.365bootstrap.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$asunto=$_POST['subject'];

	$to = "isaccalvarez@gmail.com";
	$subject = "Wanderlust Notify: " . $asunto;
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "www.WanderlustAdventurescr.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
		if(@mail("salazarUCR@gmail.com",$subject,$message,$headers))
			{
				  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
				}			
}


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Wanderlust Adventure">
    <meta name="author" content="http://www.365bootstrap.com">
	
    <title>Thank you| Wanderlust Adventures</title>
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
	
	<!-- jQuery and Modernizr-->
	<script src="js/jquery-2.1.1.js"></script>

	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="top">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<ul class="list-inline social-buttons">
						<li><a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a>
						</li>
					</ul>
				</div>
				<div class="col-md-4 col-md-offset-4">
					<div class="top-search">
						<div id="search" class="input-group">
						  <input type="text" name="search" value="" placeholder="Search" class="form-control" />
						  <span class="input-group-btn">
							<button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
						  </span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- /////////////////////////////////////////Navigation -->
	<div id="nav-wrapper">
		<div id="nav" class="navbar navbar-default navbar-inner">
			<div class="container">
		
				<!-- BAR CONTENTS -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				   <span class="sr-only">Toggle navigation</span>
				   <span class="icon-bar"></span>
				   <span class="icon-bar"></span>
				   <span class="icon-bar"></span>
				  </button>
				  <a href="index.html" class="navbar-brand navbar-brand-centered"><img src="images/logo.png" alt="First slide"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li>
							<a class="page-scroll" href="index.html#nav-services">Services</a>
						</li>
						<li>
							<a class="page-scroll" href="index.html#nav-event">Event</a>
						</li>
						<li>
							<a class="page-scroll" href="index.html#nav-gallery">Gallery</a>
						</li>						
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a class="page-scroll" href="index.html#nav-adventures">Adventures</a>
						</li>
						<li>
							<a class="page-scroll" href="index.html#nav-testimonials">Testimonials</a>
						</li>
						<li>
							<a class="page-scroll" href="index.html#location">Location</a>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			

			</div> <!-- row -->
		</div> <!-- nav -->
	</div> <!-- wrapper -->
	<!-- Navigation -->
	
	<header>
		<div class="box-shadow">
			<!-- Carousel -->
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/1.jpg" alt="First slide">
						<!-- Static Header -->
						<div class="header-text hidden-xs">
							<div class="col-md-12 text-center">
								<h1>Let's enjoy the wonders <br/>of the nature together!</h1>
							</div>
						</div><!-- /header-text -->
					</div>
					<div class="item">
						<img src="images/2.jpg" alt="Second slide">
						<!-- Static Header -->
						<div class="header-text hidden-xs">
							<div class="col-md-12 text-center">
								<h1>Enjoy outdoor activities? Join us!</h1>
							</div>
						</div><!-- /header-text -->
					</div>
					<div class="item">
						<img src="images/3.jpg" alt="Third slide">
						<!-- Static Header -->
						<div class="header-text hidden-xs">
							<div class="col-md-12 text-center">
								<h1>Let's enjoy the wonders <br/>of the nature together!</h1>
							</div>
						</div><!-- /header-text -->
					</div>
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div><!-- /carousel -->
		</div>
	</header>
	<!-- /Section: intro -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content">
	
		<!-- ////////////Content Box 01 -->
		<section class="box-content box-1" id="nav-services">
			<div class="container">
				<div class="heading">
					<h2>Contact</h2>
				</div>
				<div class="row">
					<div class="message">
						<div class="wrap">
							<!--Warning-->
							<center><?php echo $text;?></center>
							<!---->
							<div class="back"><a href="index.html" type="button" class="btn btn-skin"><<< Back to HomePage</a></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
	</div>
	
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="copyright">Copyright &copy; Your Website <br/><a href="http://www.365bootstrap.com" rel="nofollow" target="_blank">Bootstrap Themes</a> by 365Bootstrap.com</div>
					</div>
					<div class="col-md-4">
						<ul class="list-inline social-buttons">
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-inline quicklinks">
							<li><a href="#">Privacy Policy</a>
							</li>
							<li><a href="#">Terms of Use</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer -->



	<!-- jQuery -->
	<script src="js/jquery-2.1.1.js"></script>


	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="js/agency.js"></script>

	<!-- Animated Top -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>

	<script>
		$(function() {
			$('#nav-wrapper').height($("#nav").height());
			
			$('#nav').affix({
				offset: { top: $('#nav').offset().top }
			});
		});
	</script>
	
	<!-- carousel -->
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-brand").owlCarousel({
        autoPlay: 3000,
        items : 1,
		itemsDesktop : [1199,1],
        itemsDesktopSmall : [979,2],
		navigation: false,
      });
    });
    </script>
	
	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>
	
</body>
</html>