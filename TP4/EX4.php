<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Sondage en ligne : VOTEZ FOOT!</title>
</head>
<body style="background-color: #ffcc00;">
<form action="EX4.php" method="post" >
<fieldset>
<legend><b>Votez pour votre joueur préféré! </b></legend>
<p>
<?php
$joueurs=array("anelk"=>"Anelka","gourc"=>"Gourcuff","riber"=>"Ribéry");
?>
Anelka<input type="radio" name="vote" value="anelk" /> <br />
Gourcuff<input type="radio" name="vote" value="gourc" /> <br />
Ribéry<input type="radio" name="vote" value="riber" /> <br />
<input type="submit" value="Voter" />
<input type="submit" value="Afficher les résultats" name="affiche" />
</p>
</fieldset>
</form>
<?php
if(isset($_POST["vote"])) 
{
$vote=$_POST["vote"];
echo "<h2> Merci de votre vote pour ".$joueurs[$vote] ."</h2> ";
if(file_exists("votes.txt") )
{
if($id_file=fopen("votes.txt","a"))
{
flock($id_file,2);
fwrite($id_file,$vote."\n");
flock($id_file,3);
fclose($id_file);
}
else
{ echo "Fichier inaccessible";
}
}
else
{
$id_file=fopen("votes.txt","w");
fwrite($id_file,$vote."\n");
fclose($id_file);
}
}
else
{ echo "<h2>Complétez le formulaire puis cliquez sur 'Voter' ! </h2> ";}
//Affichage des résultats
//Initialisation du tableau des résultats
$result=array("Anelka"=>0,"Gourcuff"=>0,"Ribéry"=>0);
//Affichage des résultats
if(isset($_POST["affiche"]))
{
if($id_file=fopen("votes.txt","r"))
{
while($ligne=fread($id_file,6) )
{
switch($ligne)

{
case "anelk\n":
$result["Anelka"]++;
break;
case "gourc\n":
$result["Gourcuff"]++;
break;
case "riber\n":
$result["Ribéry"]++;
break;
default:
break;
}
}
fclose($id_file);
}
$total= ($result["Anelka"] + $result["Gourcuff"]+$result["Ribéry"])/100;
$tri=$result;
asort($tri);
echo "<div style=\"border-style:double\" >";
echo "<h3> Les résultats du vote </h3>";
$i=0;
foreach($tri as $nom=>$score)
{
$i++;
echo "<h4>$i<sup>e</sup> : ", $nom," a $score voix soit ",
number_format($score/$total,2),"%</h4>";
}
echo "</div>";
}
?>
<p>
<a href="http://validator.w3.org/check?uri=referer">
<img src="http://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88" />
</a>
</p>
</body>
</html>