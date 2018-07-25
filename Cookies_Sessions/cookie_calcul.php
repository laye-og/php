<?php
    $panier = $_COOKIE["panier"];

	$total  = 0;
	$total += $panier["pomme"]*1;
	$total += $panier["poire"]*1.5;
	$total += $panier["peche"]*2;
	$total += $panier["banane"]*1;
?>
<html>
<head>
<title>Le total du panier</title>
</head>
<body bgcolor="#FFFFFF">
<p align="center">Le total de votre panier: <?echo $total?> E.</p>
<p align="center"><a href="cookie_ajout.php">Modifier mon panier</a></p>
<p align="center"><a href="cookie_init.php">Vider mon panier</a></p>
</body>
</html>
