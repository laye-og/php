<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="touten1.php">
		<input type="text" name="nom">
		<input type="text" name="age">
		<input type="submit" name="">
		</ form>
<?php 
echo "</br>";
	if (isset($_REQUEST['nom'])&& isset($_REQUEST['age'])) {
		# code...
	
	$nom=$_REQUEST['nom'];
	$age=$_REQUEST['age'];
	echo "bonjour $nom vous avez $age ans ";
	}
	else echo "";

 ?>
</body>
</html> 