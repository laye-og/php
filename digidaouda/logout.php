<?php
session_start();
if(isset($_SESSION["digiecool"]))
    session_destroy();
header("Location:index.php");
 ?>
