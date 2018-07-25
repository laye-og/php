<?php
session_start();
//AJOUTER
if($_POST["envoi"]=="ADD" && $_POST["code"]!="" &&
		$_POST["article"]!="" && $_POST["prix"]!="")
{
$code=$_POST["code"]; 
$article= $_POST["article"]; 
$prix= $_POST["prix"]; 
$_SESSION['code']= $_SESSION['code']."//".$code; 
$_SESSION['article']= $_SESSION['article']."//".$article; 
$_SESSION['prix']= $_SESSION['prix']."//".$prix; 
}
//VERIFIER
if($_POST["envoi"]=="VERIFY")
{
echo "<table border=\"1\" >";
echo "<tr><td colspan=\"3\">
			<b>Order Summary</b></td>";
echo "<tr><th>&nbsp;code&nbsp;</th>
		<th>&nbsp;article&nbsp;</th><th>&nbsp;
		price&nbsp;</th>";
$prixtotal=0;
$tab_code=explode("//",$_SESSION['code']); 
$tab_article=explode("//",$_SESSION['article']); 
$tab_prix=explode("//",$_SESSION['prix']); 

for($i=1;$i<count($tab_code);$i++) 
{
echo "<tr> <td>{$tab_code[$i]}</td> <td>{$tab_article[$i]}</td><td>
	".sprintf("%01.2f", $tab_prix[$i])."</td>";
$prixtotal+=$tab_prix[$i];
}
echo "<tr> <td colspan=2> TOTAL PRICE </td> <td>
	".sprintf("%01.2f", $prixtotal)."</td>";
echo "</table>";
}
//ENREGISTRER
if($_POST["envoi"]=="SAVE")
	{
$idfile=fopen("commande.txt","w");
//
$tab_code=explode("//",$_SESSION['code']);
$tab_article=explode("//",$_SESSION['article']);
$tab_prix=explode("//",$_SESSION['prix']);
for($i=0;$i<count($tab_code);$i++)

{
fwrite($idfile, $tab_code[$i]." ; ".$tab_article[$i].
			" ; ".$tab_prix[$i].";\n");
}
fclose($idfile);
}
//LOGOUT
if($_POST["envoi"]=="LOGOUT")
{
	session_unset();
	session_destroy(); 
	echo "<h3>La session est terminée et votre panier vidé</h3>";
}
$_POST["envoi"]=""; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Basket Management</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post"
			enctype="application/x-www-form-urlencoded">
<fieldset>
<legend><b>Articles Entry</b></legend>
<table>
<tbody>
<tr>
<th>code : </th>
<td> <input type="text" name="code" /></td>
</tr>
<tr>
<th>article : </th>
<td><input type="text" name="article" /></td>
</tr>
<tr>
<th>price :</th>
<td><input type="text" name="prix" /></td>
</tr>
<tr>
<td colspan="3">
<input type="submit" name="envoi" value="ADD" />
<input type="submit" name="envoi" value="VERIFY" />
<input type="submit" name="envoi" value="SAVE" />
<input type="submit" name="envoi" value="LOGOUT" />
</td>
</tr>
</tbody>
</table>
</fieldset>
</form>
</body>
</html>