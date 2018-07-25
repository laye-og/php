<!DOCTYPE html>
<html>
<head>
	<title>affiche</title>
</head>
<body>
<?php
if (isset($_POST['titre'])){
 $titre=$_POST['titre'];
 $anne=$_POST['anne'];
 echo"j'ai recu les valeurs suivante";
 	echo "<ul>";
 	echo"<li> le titre du film est $titre </li>";
 	echo"<li> il est sortie en $anne</li>";
 	
 	echo "</ul>";
 
 
}
?>
</body>
</html>