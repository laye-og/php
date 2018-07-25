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

if(isset($_POST["joueur"])) 
{
$joueur=$_POST["joueur"];
echo "<h2> Merci d avoir enregistre  ".$joueur ."</h2> ";
if(file_exists("joueur.txt"))

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

else
{
$id_file=fopen("joueur.txt","w");
fwrite($id_file,$joueur."\n");
fclose($id_file);
}
$id_joueur=fopen("joueur.txt","r+");

//$carac=($ligne);
if (!isset($_POST['num_page'])) {
 		$pointer=2;

 	}
$alphabet = array('A','B','C','D' );
while ($name=fgets($id_joueur)) { 
	$indexname=substr($name,0,1);
 		for ($i=$pointer; $i <= count($alphabet); $i++) { 
 		
 		
 		if ($indexname==$alphabet[$i]) {
 			//echo "$pointer";
 			echo "$name ";
 			echo "</br>";
 			
                        }

 		break;}
 		}

 		echo "$pointer";
 echo " 
                           
                           			<form action=tp5.php method=post>
                           			<div class=div2>
                              		<input type=submit name=index value=\"page suivante\">
                              		<input type=hidden name=num_page value=$pointer>
                              		</div>
                            		</form>";  }


?>
</body>
</html>
