<?php
require_once("_config/config.php");
if(!defined('PATH_BODY') OR !file_exists(PATH_BODY."navMenu.php"))die("ACCES NON AUTORISÉ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Digiescool</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
     <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
   <!-- <link rel="stylesheet" href="css/styleeee.css"> -->
    <link rel="stylesheet" type="text/css" href="css/style_profile.css">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
        <?php if(file_exists("css/".PREFIXE."style.css")){
            ?>
            <link href="css/<?php echo PREFIXE; ?>style.css" rel="stylesheet">
            <?php
        } ?>
         <script type="text/javascript">
/* Demo purposes only */
//$(".hover").mouseleave(
  //function () {
    //$(this).removeClass("hover");
  }
//);
</script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">
    .space
    {
        width: 100%;
        height: 150px;
    }
    .space2
    {
        width: 100px;
            }
</style>
</head>


<body class="fix-header">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <?php //require_once("body/navMenu.php"); ?>
        </div>
        <!-- End header header -->
