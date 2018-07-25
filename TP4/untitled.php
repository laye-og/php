<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Sondage en ligne : VOTEZ FOOT!</title>
</head>
<body style="background-color:grey;">
<form action="tp5.php" method="post" >
<fieldset>
<legend><b>Entre votre joueur (pas de citizen )</b></legend>
<p>

Entre le nom du joueur <input type="text" name="joueur" value="" /> <br />

<input type="submit" value="Enregistre" />
<input type="submit" value="Afficher les résultats" name="" />
</p>
</fieldset>
</form>
<?php
if(isset($_POST["Enregistre"])) 
{
$joueur=$_POST["Enregistre"];
echo "<h2> Merci d avoir enregistre  ".$joueurs ."</h2> ";
if(file_exists("joueurs.txt") )
{
if($id_file=fopen("joueur.txt","a"))
{
flock($id_file,2);
fwrite($id_file,$joueur."\n");
flock($id_file,3);
fclose($id_file);
}
else
{ echo "Fichier inaccessible";
}
}
?>
</body>
</html>
