
<!DOCTYPE html>
<html>
<head>
<title>Tennis Club a Sports Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tennis Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- FlexSlider -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- FlexSlider -->
<!-- script -->
	<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files-->
	<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery-grid a').Chocolat();
		});
	</script>
<!-- script -->
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
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<style type="text/css">
	.news_img
{
	float:left;
	margin-top: 20px;
	margin-left: 15px;
	width: 100px;
	height: 500px;
	color: white;
	
}
</style>
</head>
	
<body>
<!-- header -->
	<?php 
	include ('baniere.php');
	 ?>
					<div class="header">
		<div class="container">
			<div class="header-left">
							</div>
			<div class="header-left1">
				
			</div>
			<div class="header-right">
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="header-nav">
		<div class="container">
			<div class="header-nav-bottom">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					 <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>-->
					</div><!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav">
						<li class="active"><a href="index.php">News</a></li>
						<li class="active"><a href="../comptes/choice_connex.php">Se connecter</a></li>
						<li class="active"><a href="../phases/phases.php">Score et Resultat</a></li>
						
						
					  </ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banners-info">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="banner1">
								</div>
							</li>
							<li>
								<div class="banner2">
								</div>
							</li>
							<li>
								<div class="banner3">
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!-- script -->
					<script defer src="js/jquery.flexslider.js"></script>
						<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					  </script>
				<!-- //script -->
			</div>
		</div>
	</div>
<!-- //banner -->

<!-- features -->
	<div class="features">	
		
		<div class="container">
			
			<div class="features-grids">
				
				<div class="features-grid-left">
					<u>Toutes les nouvelles actualités</u>
				</div>
				<?php include('all_newss.php') ?>
				<div class="clearfix"> </div>
			</div>			
		</div>
	</div>
<!-- //features -->
<!-- services -->

<!-- gallery -->
	<div class="gallery" id="gallery">
		<div class="container">
			<h3>Photo Gallery</h3>
			<p class="ex">To take a trivial example, which of us ever undertakes.</p>
			<div class="gallery-grids">
				<div class="gallery-grid">
					<div class="gallery1">
						<a href="images/12.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
							<img src="images/12.jpg" alt=" " class="img-responsive" />
							<div class="textbox">
								<h4>Sports</h4>
							</div>
						</a>
					</div>
					<div class="gallery1">
						<a href="images/14.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/14.jpg" alt=" " class="img-responsive" />
							<div class="textbox">
								<h4 class="sport">Sports</h4>
							</div>
						</a>
					</div>
					<div class="gallery1">
						<a href="images/15.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/15.jpg" alt=" " class="img-responsive" />
							<div class="textbox">
								<h4 class="sport">Sports</h4>
							</div>
						</a>
					</div>
				</div>
				<div class="gallery-grid">
					<div class="gallery1">
						<a href="images/16.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/16.jpg" alt=" " class="img-responsive" />
							<div class="textbox">
								<h4 class="sport">Sports</h4>
							</div>
						</a>
					</div>
					<div class="gallery1">
						<a href="images/17.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/17.jpg" alt=" " class="img-responsive" />
							<div class="textbox">
								<h4 class="sport">Sports</h4>
							</div>
						</a>
					</div>
					<div class="gallery1">
						<a href="images/18.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/18.jpg" alt=" " class="img-responsive" />
							<div class="textbox">
								<h4 class="sport">Sports</h4>
							</div>
						</a>
					</div>
					<div class="gallery1">
						<a href="images/19.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/19.jpg" alt=" " class="img-responsive" />
							<div class="textbox">
								<h4 class="sport">Sports</h4>
							</div>
						</a>
					</div>
				</div>
				<div class="gallery-grid">
					<div class="gallery1">
						<a href="images/20.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/20.jpg" alt=" " class="img-responsive" />
							<div class="textbox">
								<h4 class="sport">Sports</h4>
							</div>
						</a>
					</div>
					<div class="gallery1">
						<a href="images/21.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/21.jpg" alt=" " class="img-responsive" />
							<div class="textbox">
								<h4 class="sport">Sports</h4>
							</div>
						</a>
					</div>
					<div class="gallery1">
						<a href="images/13.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/13.jpg" alt=" " class="img-responsive" />
							<div class="textbox">
								<h4>Sports</h4>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //gallery -->

<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="footer-grid-left">
					<p>Copyright © 2016 Tennis Club. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
				</div>
				<div class="footer-grid-right">
					<ul>
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="in"></a></li>
						<li><a href="#" class="p"></a></li>
						<li><a href="#" class="dribble"></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
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