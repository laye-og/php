<!DOCTYPE html>
<html>
<head>
	<title>test3</title>
</head>
<body>
<?php
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

foreach($coordonnees as $element)
{
    echo $element . '<br />';
}
?>

</body>
</html>