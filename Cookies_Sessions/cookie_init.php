<?php
	setCookie("panier[pomme]", 0);
	setCookie("panier[poire]", 0);
	setCookie("panier[peche]", 0);
	setCookie("panier[banane]", 0);
	header("Location: cookie_ajout.php?ajout='pomme'");
?>
