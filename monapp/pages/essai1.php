<?php
if(isset($_POST["ajout_emetteur"])){
$hostname='localhost';
$username='root';
$password='';

try {
$dbh = new PDO("mysql:host=$hostname;dbname=dqsebdd",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO users (Login, Mot_passe, Niveau)
VALUES ('".$_POST["login"]."','".$_POST["mot_de_passe"]."','".$_POST["niveau"]."')";
if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}
?>