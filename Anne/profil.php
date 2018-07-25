<?php
  session_start();
  if (isset($_SESSION['nom_personne']))
  {?>
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <title>Page d'accueil</title>
    </head>
    <body>
    </body>
    </html><?php
  }
  else
  {
    header('Location:inscription.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	   <meta charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<style type="text/css">
  body {
    background: #f6f6f6;
  }
  #header-right {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 200px;
  }
  .carousel-item {
    height: 500px !important;
  }

  .navbar {
        box-shadow: 0 3px 5px -1px rgba(0,0,0,.2), 0 6px 10px 0 rgba(0,0,0,.14), 0 1px 18px 0 rgba(0,0,0,.12);
    z-index: 1;
  }

  .wrapper {
      overflow: hidden;
      margin: auto;
      margin-bottom: 50px;
      margin-top: 20px;
      background-color: #FFFFFF;
        width: 80%;
    box-shadow: 0 3px 5px -1px rgba(0,0,0,.2), 0 6px 10px 0 rgba(0,0,0,.14), 0 1px 18px 0 rgba(0,0,0,.12);
  }

  .gallery {
    border-top: 1px solid rgba(0, 0, 0, 0.05);
    width: 100%;
    height: 100%; 
  }
   .image-block > img {
    width: 100%;
    height: auto; 
    margin: 5px;
  }

  .image-block {
    border: 1px solid rgba(0,0,0,0.3);
  }
</style>
<script type="text/javascript">
  $(function() {
    $('.carousel').carousel();
  });
</script>
  </head>
<body>
 
  
<nav class="navbar navbar-dark bg-dark navbar-expand-lg justify-content-between">
  <a class="navbar-brand" href="#">WELCOME <?php echo $_SESSION['nom_personne']; ?>
  <div id="header-right">
    <form class="form-inline justify-content-between" style="width: 80px;" action="album.php" >
      <button type="submit" class="btn btn-primary">Album</button>
 </form>
 <form class="form-inline justify-content-between" style="width:80px;">
      <button type="submit" class="btn btn-light"><a class="cd-signup" href="deconnexion.php">SignOut</a> </button>
 </form>
</div>
</nav>


    <div align="center" class="wrapper" methode="GET" action ="">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php
            $BD= new PDO("mysql:host=localhost;dbname=mon_site",'root','');

             if (isset($_GET['id'])) {
              $req= "SELECT * FROM image where album_id = ?";
              $requete=$BD->prepare($req);
              $requete->execute(array($_GET["id"]));
              $images=$requete->fetchAll(PDO::FETCH_ASSOC);
              for ($i = 0; $i < count($images); $i++) {
                $imagePath = "Images/image/".$images[$i]['filename'];
            ?>
              <div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
                <img class="d-block w-100" src="<?php echo $imagePath; ?>" alt="First slide">
              </div>
            <?php
              }
            }
          ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
     
     
      <form method="GET" style="display: flex;
    flex-direction: row;
    justify-content: start;
    align-items: center;
    margin: 10px 0;">
     <div class="form-group col-lg-3 col-md-3" style="margin: 0">
  <select class="custom-select" id="inputGroupSelect01" name="id">
    <?php
      $req2= "SELECT * FROM album WHERE user_id = ?";
      $requete2=$BD->prepare($req2);
      $requete2->execute(array($_SESSION['id']));
      $albums=$requete2->fetchAll(PDO::FETCH_ASSOC);
      foreach ($albums as $key => $value) {
      ?>
        <option value="<?php echo $value['id']; ?>"><?php echo $value['nom_album']; ?></option>
      <?php
      }
    ?>
  </select>
</div>
<input type="submit" class="btn btn-primary" value="Charger">
</form>


      <div class="gallery">
        <div class="row">
          <div class="row">
          <?php
            if (isset($_GET['id'])) {
            for ($i = 0; $i < count($images); $i++) {
              $imagePath = "Images/image/".$images[$i]['filename'];
          ?>
            <div class="col col-lg-3 col-md-3 image-block" onclick="$('.carousel').carousel(<?php echo $i; ?>);" style="cursor: pointer;">
              <img src="<?php echo $imagePath; ?>">
            </div>
          <?php
              if (($i+1)%4 == 0 && $i != (count($images)-1)) {
          ?>
          </div>
          <div class="row">
          <?php
              }
            }
          }
          ?>
          </div>
        </div>
      </div>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>