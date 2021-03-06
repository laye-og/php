<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Accueil</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="../assets/css/demo.css" rel="stylesheet" />

</head>

<body class="index-page">
<div class="main main-raised">
	<div class="section section-basic">
<div class="section section-full-screen section-signup" style="background-image: url('../assets/img/fond.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<div class="card card-signup">
							<form method="POST" action="connexion_traitement.php" class="form" method="" action="">
								<div class="header header-primary text-center">
									<h4>Connexion</h4>
									
								</div>
								
								<div class="content">

									<div class="input-group">
										<span class="input-group-addon">
											<i>Login</i>
										</span>
										<input type="text" class="form-control" name="login" placeholder="First Name...">
									</div>


									<div class="input-group">
										<span class="input-group-addon">
											<i>Password</i>
										</span>
										<input type="password" placeholder="Password..." class="form-control" name="password" />
									</div>

									<!--<div class="input-group">
										<span class="input-group-addon">
										<i>Type</i>
										</span>
										<select class="form-control">
											<option value="">Aucun</option>
											<option value = "em">emetteur</option>
											<option value="rq">Responsable qualite</option>
											<option value="dest">Destinataire pour action</option>
										</select>
									</div>-->

									<!-- If you want to add a checkbox to this form, uncomment this code-->

									<div class="checkbox">
										<label>
											<input type="checkbox" name="optionsCheckboxes" checked>
											Garder ma session active
										</label>
									</div> 
								</div>
								<div class="footer text-center">
									<a href="#pablo" class="btn btn-simple btn-primary btn-lg" name="ajout_connect">Se connecter</a>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
			</div>
		</div>
	</body>
		<!--   Core JS Files   -->
	<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="../assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="../assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="../assets/js/material-kit.js" type="text/javascript"></script>

	<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});
	</script>
</html>