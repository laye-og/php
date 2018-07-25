<?php
    // Lecture du cookie
    $panier = $_COOKIE["panier"];

	switch ($_GET["ajout"])
	{
		case "pomme":
			$panier["pomme"]++;
			setCookie("panier[pomme]",$panier["pomme"]);
		break;
		case "poire":
			$panier["poire"]++;
			setCookie("panier[poire]",$panier["poire"]);
		break;
		case "peche":
			$panier["peche"]++;
			setCookie("panier[peche]",$panier["peche"]);
		break;
		case "banane":
			$panier["banane"]++;
			setCookie("panier[banane]",$panier["banane"]);
		break;
	}
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Le marché</title>
</head>
<body bgcolor="#FFFFFF">
<table border="4" cellspacing="4" cellpadding="4" align="center">
  <tr align="center"> 
    <td>Ajouter</td>
    <td>Votre commande</td>
  </tr>
  <tr align="center"> 
    <td><a href="cookie_ajout.php?ajout=pomme">1Kg pommes</a> (1E)</td>
    <td><?echo $panier["pomme"]?>Kg pomme(s)</td>
  </tr>
  <tr align="center"> 
    <td><a href="cookie_ajout.php?ajout=poire">1Kg poire</a> (1,5E)</td>
    <td><?echo $panier["poire"]?>Kg poire(s)</td>
  </tr>
  <tr align="center">
    <td><a href="cookie_ajout.php?ajout=peche">1Kg p&ecirc;che</a> (2E)</td>
    <td><?echo $panier["peche"]?>Kg p&ecirc;che(s)</td>
  </tr>
  <tr align="center">
    <td><a href="cookie_ajout.php?ajout=banane">1Kg banane</a> (1E)</td>
    <td><?echo $panier["banane"]?>Kg banane(s)</td>
  </tr>
</table>
<p align="center"><a href="cookie_init.php">vider mon panier</a></p>
<p align="center"><a href="cookie_calcul.php">calculer le total</a></p>
</body>
</html>
