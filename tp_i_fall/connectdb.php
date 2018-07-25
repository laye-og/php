<?php
try{
$bd=new PDO('mysql:hostname=localhost;dbname=site','root','root');
}catch(Exeption $e){
	die("error".$e->getMessage());
}

 ?>
