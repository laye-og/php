<?php
session_start();
if(isset($_SESSION["digiecool"])){
    header("Location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <center>
            <a href="ses.php?ses=admin">ADMIN</a><br />
            <a href="ses.php?ses=parent">PARENT</a><br />
        </center>
    </body>
</html>
