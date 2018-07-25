<?php

require_once("fonctions/commun.php");
if (isset($_GET["p"])){
    $page = secure($_GET["p"]);
}else{
    $page = DEFAULT_PAGE_PARENT;
}
$pages = scandir("pages/");
$fileIgnore = array(".","..");
if(in_array($page.".php",$pages) && !in_array($page.".php",$fileIgnore)){
        $content = PATH_PAGES.$page.".php";
}else{
    header("Location:index.php?p=".DEFAULT_PAGE_PARENT);
    die();
}

?>
