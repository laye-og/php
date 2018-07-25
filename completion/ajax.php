<?
if ($_GET['what'] == 'completion1' && $_GET['val']) { // champs de completion 1
	
	// ici on fait le traitement que l'on veut :
	// - interogation d'une base de donn�e
	// - lectture de fichier
	// - lecture de r�pertoire
	// - t�l�chargement de page web ...
	
	// le but finale est d'obtenir une liste de valeur
	$liste_total = array(
'ail cultiv�','ail chinois','ail d\'Orient','ail rocambole','amarante',
'ans�rine bon-henri','anu','arachide','arroche','artichaut','asperge','aubergine','avocat',
'pousses de bambou','bardane','baselle','batavia','b�nincasa','bette','betterave','blette','brocoli','brocoli chinois',
'bunias d\'Orient','calebasse','canna comestible','capucine tub�reuse','cardon','carotte','c�leri','c�leri-rave',
'cerfeuil tub�reux','ch�taigne d\'eau','ch�taigne de terre','chayote','ch�nopode Bon-Henri','chervis','chicon','chicor�e','chou',
'chou de Chine','chou-fleur','chou-navet','chou palmier','chou palmiste','chou de P�kin','chou-rave',
'chou romanesco','christophine','chrysanth�me des jardins','citrouille','claytone de Cuba','coqueret du P�rou',
'coqueret violet','citrouille','concombre','concombre des Antilles','cornichon','courge','courgette','courge cireuse',
'courge musqu�e','courge de Siam','cresson al�nois','cresson de fontaine','cresson d\'hiver','cresson des jardins',
'cresson de Para','crosne du Japon','daikon','dolique asperge','dolique lablab','�chalote','endive','�pinard','�pinard de Malabar',
'�ponge v�g�tale','fenouil','feuille de ch�ne','f�ve','fico�de glaciale','fris�e','gingembre','glycine tub�reuse','gombo','gourde',
'gourde bouteille','gourde c�reuse','gourgane','grelos','guimauve','haricot','haricot d\'Espagne','haricot de Lima','haricot kilom�tre','haricot mungo','h�lianthi','houttuynia','igname ail�e','kancon','laitue','laitue asperge','lentille','lys','luffa',
'maceron','m�che','ma�s doux','manioc','margose','mauve','melon','mizuna','momordique','mongette',
'moutarde brune','navet','ni�b�','nombril de V�nus','oca du P�rou','oignon',
'oignon de Chine','ogomoh','okra','onagre','ortie','oseille','pak cho�','panais','past�que','patate douce','patience','p�tisson',
'persil tub�reux','petit pois','p�rilla','pe-tsa�','piment','pissenlit','poireau','poir�e','poire de terre','pois sec','pois carr�',
'pois chiche','pois d\'Angol','pois sabre','poivron','pomme de terre','potiron','pourpier','pousses de bambou','quinoa','radis',
'radis mougri','radis du Japon','raifort','rhubarbe','romaine','roquette','rutabaga','salicorne','salsifis','sarrasin',
'scarole','scorson�re','serpent v�g�tal','soja','souchet comestible','tabasco','taro','t�tragone cornue','tomate',
'tomate de la Paz','topinambour','tumeric','udo','ulluque','wasabi','yin tso�','Abricot','Airelle','Amande',
'Asiminier trilob�','Cassis','Cerise','Ch�taigne','Citron','Cl�mentine','Coing','Datte','Figue',
'Figue de barbarie','Fraise','Framboise','Grenade','Groseille','Jujube','Kaki','Kiwi','Mandarine','Marron','Melon','Mirabelle',
'M�re','Myrtille','N�fle','Noisette','Noix','Olive','Orange','Pamplemousse','Past�que','P�che','Poire','Pomme','Prune',
'Pruneau','Raisin','Abricot des Antilles','Abricot-pays','Acajou','Ac�rola','Ananas','Attier',
'Pomme cannelle','Avocat','Banane','Cacao','Carambole','Cerise de Cayenne',
'Citron vert','Corossol','Fruit-�-pain','Goyave','Grenadille','Maracudja','Fruit de la passion','Icaque','Jacque',
'Jambose rouge','Litchi','Mangoustan','Mangue','Melon','Mombin','Myrobolan','Noix de coco',
'Noix de muscade','Papaye','Passiflore','Grenadille sucr�e','Prune de Cyth�re',
'Prune mombin','Quenette','Sapote','Sapotille','Surelle','Tamarin','Aubergine','Concombre','Cornichon',
'Courge','Courgette','Potiron','Citrouille','Melon','Past�que','Piment','Poivron','Tomate'
);
	//on ne garde que les elements qui commence par notre recherche ($_GET['val'])
	$completion = array();
	$strlen = strlen($_GET['val']);
	if ($_GET['case']) { // case sensitive
		for($i=0 ; $i<sizeof($liste_total) ; $i++)
			if (substr($liste_total[$i],0,$strlen) == $_GET['val'])
				$completion[$i] = '"'.str_replace('"','\\"',$liste_total[$i]).'"' ; // on double quotize toute les valeurs pour le javascript
	}
	else { // case not sensitive
		$lower = strtolower($_GET['val']) ;
		for($i=0 ; $i<sizeof($liste_total) ; $i++)
			if (strtolower(substr($liste_total[$i],0,$strlen)) == $lower)
				$completion[$i] = '"'.str_replace('"','\\"',$liste_total[$i]).'"' ; // on double quotize toute les valeurs pour le
	}	

	// on tri cette liste en ordre alpha
	sort($completion);

	// on l'envoi au javascript au format JSON     ['valeur1','valeur2', ...]
	echo '['.join(',',$completion).']' ;
}
?>