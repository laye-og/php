<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="news.css">
	<script src="ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	 
</head>
<body>
<?php 
include 'baniere/baniere.php';
 ?>
 	<form action="news_admin.php" method="POST" enctype="multipart/form-data">
				
				<input type="file" name="img" id="img"><br>
		
			Entrez votre titre <br>

				<input type="text" name="titre" class="titre"><br>

 			Entrez votre texte <br>
 
  			 <textarea cols="80" class="ckeditor" id="editeur" name="editeur" rows="10"></textarea>
   			<input type="submit" value="envoyer" />
	</form>


<?php 

if (isset($_POST['editeur']) && isset($_POST['titre']) && (!empty($_FILES))) {
	try {
		$bdd=new PDO('mysql:host=localhost;dbname=tennis','root','root');
		echo "votre article a bien été enregistré";
		move_uploaded_file($_FILES["img"]["tmp_name"], "files/".$_FILES["img"]["name"]);
	} catch (Exception $e) {
		die('erreur'.$e ->getMessage());
	}
	$requete1=$bdd-> prepare('INSERT INTO journaliste_post (article,titre,photo) VALUES(?,?,?)');
	$requete1->execute(array($_POST['editeur'],$_POST['titre'],$_FILES["img"]["name"]));
	
	}
/*
if (!empty($_FILES)) {
$numb_page=1;
$img=$_FILES["img"];
$ext=strtolower(substr($img["name"],-3));
move_uploaded_file($img["tmp_name"], "files/".$img["name"]);
}
else
{
	echo "vous devez remplir impérativement tout les champs";
}*/
?>
	</body>
</html>