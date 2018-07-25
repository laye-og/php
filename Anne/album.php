
<!DOCTYPE html>
<html>
<head>
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
<div id="title"><i class="fas fa-sign-in-alt"></i> Album</div>
		<form method="post" action="db_album.php" style="
    box-shadow:  0 3px 5px -1px rgba(0,0,0,.2), 0 6px 10px 0 rgba(0,0,0,.14), 0 1px 18px 0 rgba(0,0,0,.12);
    padding:  20px;
    display:  flex;
    flex-direction: column;
    width: 350px;
    background: #fff;
">

  <div class="">
    <div class="form-group">
      <label for="inputnom4">Nom</label>
      <input type="text" class="form-control" id="inputnom4" name="nom_album" placeholder="">
    </div>
    <div class="form-group">
      <label for="inputauteur4">Auteur</label>
      <input type="text" class="form-control" id="inputauteur4" name="auteur" placeholder="">
    </div>
  </div>
     <button type="submit" name="OK" class="btn btn-primary">AJOUTER</button>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</body>
</html>
