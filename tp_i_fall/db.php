<?php 
$db_place="mysql:dbname=mydatabase";
$dbnu='root';
$dbpwd='root';
try {
	$db= new PDO($db_place,$dbnu,$dbpwd);
	
} catch (Exception $e) {
	echo "NO connection"; 
	
}

try {
	$req="SELECT * FROM fruit";
 echo "<ul>";
 $rows = $db->query($req);
 foreach ($rows as $row) {
 	echo "<li> a".$row['name']."is".$row['color']."</li>";

 
 echo "</ul>";
}
} catch (Exception $ee) {
	echo "no query";
}
 
 
 ?>