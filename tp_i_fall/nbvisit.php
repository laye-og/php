<?php
session_start();
define("TAM",10); 

if (!isset($_SESSION['compt'])) {
	$_SESSION['compt'] = 1;
	$_SESSION['temp'] = time();
}else{
	var_dump($_SESSION['compt']);
	//echo "vous etes venue".$_SESSION['compt']."fois"; 
	$_SESSION['compt']++;
	if (time()-$_SESSION['temp']>TAM) {
		session_destroy();
		die("trop attendu ..!");
	}else
	 $_SESSION['temp']=time();
}

?>
vous etes venue <?php echo $_SESSION['compt'] ;?>fois
