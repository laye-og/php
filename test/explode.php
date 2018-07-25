<?php // recuperation de l'adresse ip
//$ip = getenv("REMOTE_ADDR");
$ip="124.122.122.11";
// on en crée un tableau
$ns = explode(".",$ip);
// on trie le tableau par indice décroissant
// ce qui permet dans le cas présent de l'inverser 
krsort($ns);
// on re-transforme notre tableau inversé en chaine 
$rip = implode(".",$ns);
echo $rip;
?>