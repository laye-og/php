<?php
$req= "DELETE FROM album where nom_album = ? ";
$requete=$BD->prepare($req);
$requete->execute(array($_GET['nom_album']));
$album=$requete->fetch(PDO::FETCH_ASSOC);
?>