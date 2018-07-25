<?
if ($_GET['what'] == 'completion1' && $_GET['val']) { // champs de completion 1
	
	// ici on fait le traitement que l'on veut :
	// - interogation d'une base de donnée
	// - lectture de fichier
	// - lecture de répertoire
	// - téléchargement de page web ...
	
	// le but finale est d'obtenir une liste de valeur
	$liste_total = array(
'ail cultivé','ail chinois','ail d\'Orient','ail rocambole','amarante',
'ansérine bon-henri','anu','arachide','arroche','artichaut','asperge','aubergine','avocat',
'pousses de bambou','bardane','baselle','batavia','bénincasa','bette','betterave','blette','brocoli','brocoli chinois',
'bunias d\'Orient','calebasse','canna comestible','capucine tubéreuse','cardon','carotte','céleri','céleri-rave',
'cerfeuil tubéreux','châtaigne d\'eau','châtaigne de terre','chayote','chénopode Bon-Henri','chervis','chicon','chicorée','chou',
'chou de Chine','chou-fleur','chou-navet','chou palmier','chou palmiste','chou de Pékin','chou-rave',
'chou romanesco','christophine','chrysanthème des jardins','citrouille','claytone de Cuba','coqueret du Pérou',
'coqueret violet','citrouille','concombre','concombre des Antilles','cornichon','courge','courgette','courge cireuse',
'courge musquée','courge de Siam','cresson alénois','cresson de fontaine','cresson d\'hiver','cresson des jardins',
'cresson de Para','crosne du Japon','daikon','dolique asperge','dolique lablab','échalote','endive','épinard','épinard de Malabar',
'éponge végétale','fenouil','feuille de chêne','fève','ficoïde glaciale','frisée','gingembre','glycine tubéreuse','gombo','gourde',
'gourde bouteille','gourde céreuse','gourgane','grelos','guimauve','haricot','haricot d\'Espagne','haricot de Lima','haricot kilomètre','haricot mungo','hélianthi','houttuynia','igname ailée','kancon','laitue','laitue asperge','lentille','lys','luffa',
'maceron','mâche','maïs doux','manioc','margose','mauve','melon','mizuna','momordique','mongette',
'moutarde brune','navet','niébé','nombril de Vénus','oca du Pérou','oignon',
'oignon de Chine','ogomoh','okra','onagre','ortie','oseille','pak choï','panais','pastèque','patate douce','patience','pâtisson',
'persil tubéreux','petit pois','périlla','pe-tsaï','piment','pissenlit','poireau','poirée','poire de terre','pois sec','pois carré',
'pois chiche','pois d\'Angol','pois sabre','poivron','pomme de terre','potiron','pourpier','pousses de bambou','quinoa','radis',
'radis mougri','radis du Japon','raifort','rhubarbe','romaine','roquette','rutabaga','salicorne','salsifis','sarrasin',
'scarole','scorsonère','serpent végétal','soja','souchet comestible','tabasco','taro','tétragone cornue','tomate',
'tomate de la Paz','topinambour','tumeric','udo','ulluque','wasabi','yin tsoï','Abricot','Airelle','Amande',
'Asiminier trilobé','Cassis','Cerise','Châtaigne','Citron','Clémentine','Coing','Datte','Figue',
'Figue de barbarie','Fraise','Framboise','Grenade','Groseille','Jujube','Kaki','Kiwi','Mandarine','Marron','Melon','Mirabelle',
'Mûre','Myrtille','Nèfle','Noisette','Noix','Olive','Orange','Pamplemousse','Pastèque','Pêche','Poire','Pomme','Prune',
'Pruneau','Raisin','Abricot des Antilles','Abricot-pays','Acajou','Acérola','Ananas','Attier',
'Pomme cannelle','Avocat','Banane','Cacao','Carambole','Cerise de Cayenne',
'Citron vert','Corossol','Fruit-à-pain','Goyave','Grenadille','Maracudja','Fruit de la passion','Icaque','Jacque',
'Jambose rouge','Litchi','Mangoustan','Mangue','Melon','Mombin','Myrobolan','Noix de coco',
'Noix de muscade','Papaye','Passiflore','Grenadille sucrée','Prune de Cythère',
'Prune mombin','Quenette','Sapote','Sapotille','Surelle','Tamarin','Aubergine','Concombre','Cornichon',
'Courge','Courgette','Potiron','Citrouille','Melon','Pastèque','Piment','Poivron','Tomate'
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