<!DOCTYPE html>
<html>
<head>
	<title>le TP (les entrées)</title>
	<link rel="stylesheet" type="text/css" href="signin.css">
	<link rel="stylesheet" type="text/css" href="resto.css">
	<script type="text/javascript">
		
            }
	</script>
</head>
<body>
	<div class="Menu">
	<h1>Menu du jour </h1>
	<form action="adminresto.php" method="POST">
	<div class="plat">plat 1 <input id="plat" type="submit" name="plat" value="ajouter au panier "></div>
	<div class="plat">plat 2 <input id="plat" type="submit" name="plat" value="ajouter au panier "></div>
	<div class="plat">plat 3 <input id="plat" type="submit" name="plat" value="ajouter au panier "></div>
	<div class="plat">plat 4 <input id="plat" type="submit" name="plat" value="ajouter au panier "></div>
	<div class="plat">plat 5 <input id="plat" type="submit" name="plat" value="ajouter au panier "></div>
	<div class="plat">plat 6 <input id="plat" type="submit" name="plat" value="ajouter au panier "></div>
	<div class="plat">plat 7 <input id="plat" type="submit" name="plat" value="ajouter au panier "></div>
	</div>
	</form>
	<div class="facture">
		<ul id="liste_repas">
			<?php 
			$plat=0;
			

					echo "plat        15.000";
					$plat=+15000;
					echo "plat";
			 ?>
		</ul>
		
	</div> 	
	</div>
</body>
</html>
