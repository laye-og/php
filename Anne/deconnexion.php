<?php
session_start();
session_destroy();
header('Location: suiteproj.html');
exit ();
?>