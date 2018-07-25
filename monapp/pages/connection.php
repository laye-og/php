<?php
try
{
	$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO('mysql:host=localhost;dbname=dqsebdd;charset=utf8', 'root', '');
	$bdd->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>