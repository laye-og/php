<!DOCTYPE html>
<html>
<head>
	<title>ALL NEWS </title>
	<link rel="stylesheet" type="text/css" href="news.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css">
		.affiche_news{
			border: none;
			width: 100%;
			height: 20px;
		}
		.all_news_img
{
	float:right;
	width: 100px;
	height: 100px;
	color: white;
	
}
	 .affiche_news_container
	 {
	 	width: 100%;
		height: 100px;
	 }
	</style>
</head>
	<body>
		
		 	<?php 
		 try {
		$bdd=new PDO('mysql:host=localhost;dbname=tennis','root','root');
		$requete=$bdd->query('SELECT * FROM journaliste_post');
		while ($donnes=$requete->fetch()) {
			$resum_article=substr($donnes['article'],0,500);
			echo "
			<hr>
			<div class=\" affiche_news_container\">	
			
		
			<form action=\"../news/newnews.php\" method=\"post\">
		 <p> <input type=\"submit\" class=\"affiche_news \" name=\"id_page\" value=\"".$donnes['titre']."\"</p> 
		 <img class=\"all_news_img\" src=\" news/files/". $donnes['photo']."\">
		 <p>".$resum_article."lire la suite ...</p>


		<input type=\"hidden\" name=\"id\" value=\"". $donnes['id']."\">
		  </form> 

		
		
		 <hr>
		 <div>
		 "
		 
		 ;

		}
	} catch (Exception $e) {
		die('erreur'.$e ->getMessage());
	}

 ?>		

	</body>
	</html>