<!DOCTYPE html> 
<html> 
<body>
<?Php
$a = array ( "rouge"=>"laye" , "vert"=>"ni" , "bleu"=>"kgj" , "jaune"=>"jhfjh" , "marron"=>"hdhhgh" ); 
$random_keys = array_rand ($a=>,3.); 
echo $a [$random_keys[0]]. "<br>" ; 
echo $a [$random_keys[1]]. "<br>" ; 
echo $a [$random_keys[2]]; 
?> 

</body>
</html>