<?php 
var_dump($_FILES);
if (!empty($_FILES) && isset($_FILES)) {
$img_name=$_FILES['image']['name'];
$img_tmp=$_FILES['image']['tmp_name'];
$img_dest="images/image/".$img_name;
$img_extension=strrchr($img_name, '.');
$Extension_autorise=array('.png','.PNG','.jpeg','.JPEG','.jpg','.JPG','.gif','.GIF');
if (in_array($img_extension, $Extension_autorise))
 {
	move_uploaded_file($img_tmp, $img_dest);
	echo "image telecharger";
}else
echo "verifier";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>upload images</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>UPLOAD images</h1>
	<fieldset>
		<form  method="post" enctype="multipart/form-data"  >
			<input type="file" name="image"><br>
			<input type="submit" value="envoyer !">	
	</form>		
	</fieldset>
<?php
$dos="images/image";
$dir=opendir($dos);
while ($file=readdir($dir)) {
	if($file!="." && $file!=".."){?>
	<img style='width:20%;height:80%;' src=<?php echo "'images/image/$file'"?>/>;
<?php }
}
?>

</body>	
</html>