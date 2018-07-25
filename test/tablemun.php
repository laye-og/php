<!DOCTYPE html>
<html>
<head>
	<title>table de multiplication</title>
</head>
<body>
	<h1>table de multiplication</h1>
 <?php 
 $n;
 $v;
 for ($num=1; $num <=12 ; $num++) { 
 	$v=$num;
 for ($n=1; $n<=10 ; $n++) { 
 	$res=$n*$v;
 	echo "$v*$n=$res";
 	echo "<br/>";
 }
 echo "<hr>";
}
 ?>
</body>
</html>