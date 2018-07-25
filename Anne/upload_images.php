<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
<body>
<?php 
	 session_start();
	$BD= new PDO("mysql:host=localhost;dbname=mon_site",'root','');
	
	function validation($val)
    {
	if(isset($val) && !empty($val))
	{
		return true;
	}
	return false;
    }
if (isset($_FILES['fichier']) && validation($_FILES['fichier'])  && validation($_POST['titre'])  && validation($_POST['description']) && validation($_POST['keywords']) && validation($_POST['album']))
{

	$img_name=$_FILES['fichier']['name'];
	$img_tmp=$_FILES['fichier']['tmp_name'];
	$img_dest="Images/image/".$img_name;
	$img_extension=strrchr($img_name, '.');
	$Extension_autorise=array('.png','.PNG','.jpeg','.JPEG','.jpg','.JPG','.gif','.GIF');
 
   if (in_array($img_extension, $Extension_autorise))
    {
	 	$req='INSERT INTO image(titre,description,mots_cles,album_id,filename) VALUES(?,?,?,?,?)';
		$requete=$BD->prepare($req);
		$requete->execute(array($_POST['titre'],$_POST['description'],$_POST['keywords'],$_POST['album'],$img_name));
		if($requete)
		{	?>	
			<script>
			alert('image ajouté');
			</script>
			<?php echo '<meta http-equiv="refresh" content="0; url=profil.php">';
			move_uploaded_file($img_tmp, $img_dest);
			echo "image telecharger";
		}
		else
		{
		echo "verifier";
		}
	    $dos="Images/image";
		$dir=opendir($dos);
		while ($file=readdir($dir)) 
		{
			if($file!="." && $file!="..")
			{ 
				echo "<img style='width:20%;height:80%;' src='Images/image/$file'/>";
			}
		}

}
}
?>
</body>
</html>