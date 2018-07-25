<!DOCTYPE html>
<html>
<head>
	<title>form.php</title>
</head>
<body>
<div class="menu"></div>
<h1>formulaire</h1>
<br>
<br>
<center>
<?php
if (isset($_POST ['prenom'])) {
	$prenom = $_POST['prenom'];
	echo "$prenom";
	echo "!</FONT>"\n;

}
else{
	echo "Dites bonjour à la machine maintenant presentez vous :\n";
	echo"input type"
}
?>	

</center>
</body>
</html>