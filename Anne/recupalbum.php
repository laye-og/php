<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" cellpadding="0" cellspacing="0">
<tr>
<th>MON SITE</th>
<th>URL</th>
</tr>
<?php
session_start();
if (isset($_GET['id'])) {
	
$BD= new PDO("mysql:host=localhost;dbname=mon_site",'root','');

$req= "SELECT * FROM album where id = ? ";
$requete=$BD->prepare($req);
$requete->execute(array($_GET['id']));
$album=$requete->fetch(PDO::FETCH_ASSOC);
// var_dump($album);									
}
?>	
</body>
</html>