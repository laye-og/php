<?php
session_start();
if (!isset($_SESSION['id']) || $_SESSION['id'] == null || $_SESSION['id'] == 0) {
  $_SESSION['requested_page'] = "image.php";
  header('Location: connecter.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
</head>
<body>

<meta charset="utf-8">
	<title></title>
	 <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<style type="text/css">
		#title {
    margin-bottom: 20px;
    font-size: 1.5rem;
    text-transform: uppercase;
    color: rgba(0,0,0,0.5);
}

#title > svg {
    font-size: 2rem !IMPORTANT;
    margin-right: 5px !IMPORTANT;
}
	</style>
</head>
<body style="
    display: flex;
    flex-direction:  column;
    justify-content: center;
    align-items: center;
    padding-top: 100px;
    background: #f6f6f6;
">	
<div id="title"><i class="fas fa-sign-in-alt"></i> Image</div>
		<form method="post" enctype="multipart/form-data" action="upload_images.php" style="
    box-shadow:  0 3px 5px -1px rgba(0,0,0,.2), 0 6px 10px 0 rgba(0,0,0,.14), 0 1px 18px 0 rgba(0,0,0,.12);
    padding:  20px;
    display:  flex;
    flex-direction: column;
    width: 350px;
    background: #fff;
">

  <div class="">
    <div class="form-group">
      <label for="inputtitre4">Titre</label>
      <input type="text" class="form-control" id="inputtitre4" name="titre" placeholder="">
    </div>
    <div class="form-group">
      <label for="inputfichier4">Fichier</label>
      <input type="file" class="form-control" id="inputfichier4" name="fichier" placeholder="">
    </div>
  	<div class="form-group">
      <label for="inputdescription4">Description</label>
      <input type="text" class="form-control" id="inputdescription4" name="description" placeholder="">
    </div>
 	<div class="form-group">
      <label for="inputMotsClés 4">Mots Clés</label>
      <input type="text" class="form-control" id="inputMotsClés4" name="keywords" placeholder="">
    </div>
  	
  <div class="form-group">
    <label for="inputMotsClés 4">Album</label>
  <select class="custom-select" id="inputGroupSelect01" name="album">
    <?php
      $BD= new PDO("mysql:host=localhost;dbname=mon_site",'root','');
      $req= "SELECT * FROM album WHERE user_id = ?";
      $requete=$BD->prepare($req);
      $requete->execute(array($_SESSION['id']));
      $albums=$requete->fetchAll(PDO::FETCH_ASSOC);
      foreach ($albums as $key => $value) {
      ?>
        <option value="<?php echo $value['id']; ?>"><?php echo $value['nom_album']; ?></option>
      <?php
      }
    ?>
  </select>
</div>
</div>
     <button type="submit" name="OK" class="btn btn-primary">AJOUTER</button>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>