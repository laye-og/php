
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<p></p>
								</header>
								
							

							<!-- Section -->
								<section>
										<form action="recup_donne.php" method="POST" enctype="multipart/form-data">
											
										
											<p>
												<label for="firstname"> Nom du fichier apés upload </label>
												<input type="text" name="fichiers" id="filename">
											</p>

											<input type="file" name="fichiers" id="fichiers"><br>
										<input type="submit" value="envoyer">
										
										
									
									<div class="posts">
									
										</form>

									</div>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.html">Homepage</a></li>
										<li><a href="generic.html">Generic</a></li>
										<li><a href="elements.html">Elements</a></li>
										<li>
											<span class="opener">Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
										<li><a href="#">Etiam Dolore</a></li>
										<li><a href="#">Adipiscing</a></li>
										<li>
											<span class="opener">Another Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
										<li><a href="Furum.html">Forum</a></li>
										<li><a href="#">Sapien Mauris</a></li>
										<li><a href="#">Amet Lacinia</a></li>
									</ul>
								</nav>

							<!-- Section -->
								

						</div>
					</div>

			</div>
<?php  
require 'include/connect_db.php';
if (!empty($_FILES)) {
	$FILES_name = $_FILES['fichiers']['name'];

	$FILES_temp_rep = $_FILES['fichiers']['tmp_name'];
	$FILES_destination="files/".$FILES_name;
	$l="fzfgzefezrfzefzefzefzefzefzefzefzefzfzefzcdczefefcdzefd";

	echo "le nom du fichier est :".$FILES_name ."<br>";
	$edit=fopen($FILES_name,"w");
	while (!feof($edit)) {
		fputs($l,255);
		echo "$l";
	}
	
	if (move_uploaded_file($FILES_temp_rep,$FILES_destination ))
	{
		 $req = $db-> prepare('INSERT INTO files(nom,url) VALUES(?,?)');
			$req->execute( array($FILES_name ,$FILES_destination));
			echo "<div class=item2>
                          <img src='files/FILES_name' width='200' height='225' alt='sliderimg' class='wow flipInX' id='img' 
                           data-wow-delay='.8s' onclick='ajouter_panier('Pasta Pillus')' > 
                          <h3>Pasta Pillus</h3> <input type='checkbox'name='Plat2'>
                      </div> "
			echo "fichier uploade avec succes <br/>";
			echo "$FILES_name:<a href='$FILES_destination'>$FILES_name</a>";

			var_dump($req->fetch());
			while($data=$req->fetch())
			{
				echo $data['nom'].':'.'<a href="'.$data['url'].'">'.$data['nom'].'</a>' ;
			}
			
		}	


}
?>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>