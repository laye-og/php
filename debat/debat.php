<?php 
if (isset($_POST["MIK"])) {
$nomppres="Mamadou ibra kane" ;
$photos="MIK";
$base="elections";
//$date=;
//$bd=mysql_connect("localhost","root","root");
$idcom=new PDO("mysql:host=localhost;dbname=elections","root","root");
//$idbase=@mysql_select_db($base); 
if(!$idcom) 
		{
			echo "<script type=text/javascript>"; 
			echo "alert('Connexion Impossible à la base $base')</script>"; }
		}
else{

						while($idcom=$requete->fetch()){
						$invite1 = $idcom['invité1'];
						$invite2 = $idcom['invité2'];
						//$reponse2 = $bdd->query("select parti from politiciens where politicien='$invite1'");
						//$donneesR2 = $reponse2->fetch();
					//	$reponse3 = $bdd->query("select parti from politiciens where politicien='$invite2'");
						//$donneesR3 = $reponse3->fetch();
						//if($donneesR2['parti'] == $donneesR3['parti'])
						echo $invite1;
						}
					
	//$requete=$idcom->query("SELECT * FROM debat when presentateur=\"MAMADOU IBRA KANE\" ");
	//var_dump($requete);
	//$resultat=mysql_query($requete);
	//echo $requete;
}
?>	
<!DOCTYPE HTML>

<html>
	<head>
		<title>le grande debat</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header">

						<!-- Logo -->
							<h1><a href="index.html">Laye.tv</a></h1>

						
						<!-- Banner -->
							<section id="banner">
								<header>
									<h2>THE LAYE SHOW</h2>
									<p> presenté par <?php if (isset($nomppres)) 
														echo $nomppres; ?> </p>
								</header>
							</section>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row">
							<div class="12u">

								<!-- Portfolio -->
									<section>
										<header class="major">
											<h2>THE DEBAT </h2>

										</header>
										<div class="space"></div>
										<center>
										<div class="row">
											<div class="space"></div>

											<div class="4u 12u(mobile)">
												<section class="box">
													<img <?php echo "src=images/$photos.jpeg"?>></a>
													<header>
														<h3><?php if (isset($nomppres)) 
														echo $nomppres; ?></h3>
													</header>
													
												</section>

											</div>
											</center>

	<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$ Footer$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
 				<div id="main-wrapper">
					<div class="container">
						<div class="row">
							<div class="12u">

								
										
										
										<div class="row">
											<div class="4u 12u(mobile)">
												<section class="box">
													<img <?php echo "src=images/$photos.jpeg"?>></a>
													<header>
														<h3><?php if (isset($invite1)) 
														echo $invite1; ?></h3>
													</header>
												</section>
											</div>
											<div class="space">
												<div class="space"></div>
												<div class="space">
													<?php if (isset($date)) 
														echo $date; ?>
												</div>
												<h1>VS</h1>
											</div>
											<div class="4u 12u(mobile)">
												<section class="box">
													<img <?php echo "src=images/$photos.jpeg"?>></a>
													<header>
														<h3><?php if (isset($invite2)) 
														echo $invite2; ?></h3>
													</header>
												</section>
											</div>
										</div>
									</section>

							</div>
						</div>
						
						
									
			<!-- Footer -->
						
						
								<center> 
								<section>
									<header>
										<h2>SUIVEZ NOUS </h2>
									</header>
									<ul class="social">
										<li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
										<li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
										<li><a class="icon fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
										<li><a class="icon fa-linkedin" href="#"><span class="label">LinkedIn</span></a></li>
										<li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
									</ul>
									<ul class="contact">
									</center>
											

	</body>
</html>