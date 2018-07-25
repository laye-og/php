<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Le livre est d'or </title>
</head>
<body style="background-color: #cfcf00;">
<form action="EX5.php" method="post" >
<fieldset>
<legend><b>Donnez votre avis sur PHP 5 ! </b></legend>
<label>Nom : &nbsp;</label><input type="text" name="nom" /> <br />
<label>Mail : &nbsp;</label><input type="text" name="mail" /> <br />
<label>Vos commentaires sur le site</label><br />
<textarea name="comment" rows="4" cols="50">Ici </textarea> <br />
<input type="submit" value="Envoyer " name="envoi" />
<input type="submit" value="Afficher les avis" name="affiche" />
</fieldset>
</form>
<?php
$date= time();
//ENREGISTREMENT
if(isset($_POST['envoi']))
{
if(isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['comment']))
{
echo "<h2>",$_POST['nom']," merci de votre avis </h2> ";
if(file_exists("livre.txt") )
{
if($id_file=fopen("livre.txt","a"))
{
flock($id_file,2);
fwrite($id_file,$_POST['nom'].":".$_POST['mail'].":".$date.":".$_POST['comment']."\n"); 
flock($id_file,3);
fclose($id_file);
}
else
{ echo "fichier inaccessible";
}
}
else
{
$id_file=fopen("livre.txt","w");
fwrite($id_file,$$_POST['nom'].":".$_POST['mail'].":".$date.":".$_POST['comment']."\n");
fclose($id_file);
}
}
}
if(isset($_POST['affiche'])) 
{
if($id_file=fopen("livre.txt","r"))
{
echo "<table border=\"2\"> <tbody>";
$i=0;
while($tab=fgetcsv($id_file,200,":") )
{
$i++;
echo "<tr> <td>n˚ $i : de: $tab[0] </td> <td> <a href=\"mailto:$tab[1]\" >
$tab[1] </a></td> <td>le: ",date("d/m/y",$tab[2])," </td></tr>";
echo "<tr > <td colspan=\" 3 \">", stripslashes($tab[3]) ,"</td> </tr> ";
}
fclose($id_file);
}
echo "</tbody></table> ";
}
else{ echo "<h2>Donnez votre avis puis cliquez sur 'envoyer' ! </h2> ";}
?>
</body>
</html>