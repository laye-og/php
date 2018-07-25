<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Accueil emetteur</title>

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
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="http://www.creative-tim.com">
	        	<div class="logo-container">
	                <div class="logo">      
	               
	                 <img src="https://upload.wikimedia.org/wikipedia/fr/e/ed/Logo_SDE_S%C3%A9n%C3%A9gal.jpg" width="60" height="60">
	               </div>
	                
	                
	                <div class="brand">
	                    SDE
	                </div>
				</div>
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="components-documentation.html" target="_blank">
						<i class="material-icons">dashboard</i> Deconnexion
					</a>
				</li>	
		 	</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->
<div class="wrapper">
	<div class="header header-filter" style="background-image: url('assets/img/bg2.jpeg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
						<h1>QSE</h1>
						<h3>Qualite Securite et Environnement</h3>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<div class="main main-raised">
		<div class="section section-basic">
	    	<div class="container">
	    	</div>
	    </div>
	    <form method="POST" action="saisie_emetteur_traitement.php" style="width:500px; margin-left:100px" >
			
				
				<div class="form-group label-floating is-empty">
					<label class="control-label">Nom</label>
					<input type="text" class="form-control" name="nom">
					<span class="material-input"></span>
				</div>
				<div class="form-group label-floating is-empty">
					<label class="control-label">Prenom</label>
					<input type="text" class="form-control" name="prenom">
					<span class="material-input"></span>
				</div>
				<div class="form-group label-floating is-empty">
					<label class="control-label">Service</label>
					<input type="text" class="form-control" name="service">
					<span class="material-input"></span>
				</div>
				<div class="form-group label-floating is-empty">
					<label class="control-label">Matricule</label>
					<input type="text" class="form-control" name="matricule">
					<span class="material-input"></span>
				</div>
				<div class="form-group label-floating is-empty">
					<label class="control-label">Mot de passe</label>
					<input type="password" class="form-control" name="mot_de_passe">
					<span class="material-input"></span>
				</div>

			<div class="col-md-4 col-md-offset-4 text-center">
	                                    <button class="btn btn-primary btn-raised" name="ajout_emetteur">
											Valider
										  <div class="ripple-container"></div>
										</button>
	                                </div>
			</form>
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