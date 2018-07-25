<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>le TP (les entrées)</title>
	<link rel="stylesheet" type="text/css" href="signin.css">
	<link rel="stylesheet" type="text/css" href="resto.css">
	<style type="text/css">
	body{background-color: #325F86;
		font-size: 30px;}
		.facture
	
	{
	border:double;
	font-size: 20px;
	margin-top: 30px;
	float: right;
	background-color:white;
	height: 300px;
	width: 500px;
	color: black;
	overflow: scroll;
	}
         #page-wrap {  position: relative; }
        
        #sidebar {  position: fixed; left: 50%; top: 90px; margin: 0 0 0 110px; }

	</style>
</head>
<body>
	<center>
	<div id="page-wrap" class="Menu">
	<ul><h1>Menu du jour </h1></ul>
	<form action="pow.php" method="POST">
		</ul><h1>les Entrés</h1> </ul>
	<div class="plat">salade de legume --------------2000 <input id="plat" type="checkbox" name="plat1" value="ajouter au panier "></div>
	<div class="plat">salade mixte --------------1500 <input id="plat" type="checkbox" name="plat2" value="ajouter au panier "></div>
	<div class="plat">salade de parmesant -----------1200  <input id="plat" type="checkbox" name="plat3" value="ajouter au panier "></div>
	<div class="plat">oeuf garni------------1000 <input id="plat" type="checkbox" name="plat4" value="ajouter au panier "></div>
	<div class="plat">ohohah --------------5000 <input id="plat" type="checkbox" name="plat5" value="ajouter au panier "></div>
	
	</ul><h1>Plat de résistance</h1> </ul>
	<div class="plat">filet de boeuf --------------7000 <input id="plat" type="checkbox" name="plat6" value="ajouter au panier "></div>
	<div class="plat">brochette mixte -------------8500 <input id="plat" type="checkbox" name="plat7" value="ajouter au panier "></div>
	<div class="plat">filet de poisson ------------8000<input id="plat" type="checkbox" name="plat8" value="ajouter au panier "></div>
	<div class="plat">riz au poulet -------------- 4000 <input id="plat" type="checkbox" name="plat9" value="ajouter au panier "></div>
	<div class="plat">riz au poisson -------------- 4000 <input id="plat" type="checkbox" name="plat10" value="ajouter au panier "></div>
	<div class="plat"> riz mixte -------------- 5000 <input id="plat" type="checkbox" name="plat11" value="ajouter au panier "></div>
	<div class="plat">filet de mangue --------------4500 <input id="plat" type="checkbox" name="plat12" value="ajouter au panier "></div>
	</ul><h1>Dessert</h1></ul>
	<div class="plat">glace a la menthe --------------3000 <input id="plat" type="checkbox" name="plat13" value="ajouter au panier "></div>
	<div class="plat">mousse ou chocolat --------------2500<input id="plat" type="checkbox" name="plat14" value="ajouter au panier "></div>
	<div class="plat">glace a la vanille -------------- 1500 <input id="plat" type="checkbox" name="plat15" value="ajouter au panier "></div>
	<div class="plat">glace framboise -------------- 2000<input id="plat" type="checkbox" name="plat16" value="ajouter au panier "></div>
	
	<input type="submit" name="">
	</form>
	</div>
</center>

	
	<div id="sidebar" class="facture">
		<center>FACTURE</center> 
		<ul id="liste_repas">
			<?php 
			$plat=0;
			
				if (isset($_POST['plat1'])) {
					# code...
				
					echo "salade de legume --------------2000";
					$plat=$plat+2000;
					echo " </br>";

					
				}
				if (isset($_POST['plat2'])) {
					# code...
				
					echo "salade mixte --------------1500";
					$plat=$plat+1500;
										echo "</br>";
					}

				if (!empty($_POST['plat3'])) {
					# code...
				
					echo " salade de parmesant -----------1200";
					$plat=$plat+1200;
					echo "</br>";
					}
				if (!empty($_POST['plat4']) ){
					# code...
				
					echo "oeuf garni------------1000 ";
					$plat=$plat+1000;
					echo"</br>" ;
					}
				if (!empty($_POST['plat5'])) {
					# code...
				
					echo "ohohah --------------5000";
				$plat=$plat+5000;
					echo "</br>";
					}
					
					if (!empty($_POST['plat6'])) {
					# code...
				
					echo "filet de boeuf --------------7000";
				$plat=$plat+7000;
					echo "</br>";
					}
					
					if (!empty($_POST['plat7'])) {
					# code...
				
					echo "brochette mixte -------------8500";
				$plat=$plat+8500;
					echo "</br>";
					}
					if (!empty($_POST['plat8'])) {
					# code...
				
					echo "brochette mixte -------------8500";
				$plat=$plat+8500;
					echo "</br>";
					}
					if (!empty($_POST['plat9'])) {
					# code...
				
					echo "riz au poulet -------------- 4000";
				$plat=$plat+4000;
					echo "</br>";
					}
					if (!empty($_POST['plat10'])) {
					# code...
				
					echo "riz au poisson -------------- 4000";
				$plat=$plat+4000;
					echo "</br>";
					}
					if (!empty($_POST['plat11'])) {
					# code...
				
					echo "riz mixte  -------------- 5000";
				$plat=$plat+5000;
					echo "</br>";
					}
					if (!empty($_POST['plat12'])) {
					# code...
				
					echo "filet de mangue --------------4500";
				$plat=$plat+4500;
					echo "</br>";
					}
					if (!empty($_POST['plat13'])) {
					# code...
				
					echo "glace a la menthe --------------3000";
				$plat=$plat+3000;
					echo "</br>";
					}
					if (!empty($_POST['plat14'])) {
					# code...
				
					echo "mousse ou chocolat --------------2500";
				$plat=$plat+2500;
					echo "</br>";
					}
					if (!empty($_POST['plat15'])) {
					# code...
				
					echo "glace a la vanille -------------- 1500";
				$plat=$plat+1500;
					echo "</br>";
					}
					if (!empty($_POST['plat15'])) {
					# code...
				
					echo "glace framboise -------------- 2000";
				$plat=$plat+1500;
					echo "</br>";
					}
					echo "vous avez consommer $plat";

					
			 ?>
		</ul>
	
</body>
</html>
