<?php
try
{

      $strConnection = 'mysql:host=localhost;dbname=tableau_nc';
      $pdo = new PDO ($strConnection, 'root', 'amadou');
}

catch (PDOException $e)
{
	$msg = 'ERREUR PDO dans ' . $e->getMessage();
	die ($msg);
}




?> 