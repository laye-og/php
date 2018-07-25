<?php 
    if (isset($_POST['id'])) {

    /*$id_article=$_POST['id'];
    $titre_article=$_POST['titre'];
    $article=$_POST['article'];
    $photo_article="files/".$_POST['photo'];
    echo "id=".$id_article."titre=".$titre_article."article=".$article."photo=".$photo_article;*/
    $id_article= $_POST['id'];
    try {
        $bdd=new PDO('mysql:host=localhost;dbname=tennis','root','root');
        $requete=$bdd->query('SELECT * FROM journaliste_post');
        while ($donnes=$requete->fetch()) {
            if ($id_article==$donnes['id']) {
                    $titre_article=$donnes['titre'];
                    $article=$donnes['article'];
                    $photo_article="files/".$donnes['photo'];
                    //$article= strlen($donnes['article']);
                    $resum_article=substr($donnes['article'],0,100);
                    $resum_article_pocito=substr($donnes['article'],0,20);
                    
                    
        }
    }
    } catch (Exception $e) {
        die('erreur'.$e ->getMessage());}
}


 ?>

<!DOCTYPE html>
 <html lang="en"> <!--<![endif]-->  
<head>
    <title>Responsive Portfolio Template for Developers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Website Landing Page for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    
    <!-- github calendar css -->
    <link rel="stylesheet" href="assets/plugins/github-calendar/dist/github-calendar.css"
/>
    <!-- github acitivity css -->
    <link rel="stylesheet" href="assets/plugins/github-activity/src/github-activity.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
</head> 

<body>
    <?php 
        include ('baniere.php');
     ?>
    
    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
                <section class="about section">
                    <div class="section-inner">
                        <div class="content">
                            
                         <img class="news_img" src = <?php echo $photo_article;  ?>>
                        </div><!--//content-->
                    </div><!--//section-inner-->                 
                </section><!--//section-->
    
               <section class="latest section">
                    <div class="section-inner">
                        
                        <div class="content">    
                                         
                            <div class="item featured text-center">
                              <h2><?php echo $titre_article;  ?></h2
                                <div class="featured-image">
                                    
                                    <div class="ribbon">
                                       
                                    </div>
                                    
                                <div class="desc text-left">                                    
                                   <?php echo $article;?>
                                </div><!--//desc-->         
                                                
                            </div><!--//item-->
                            <hr class="divider" />
                            <div class="item row">

                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    
                                </div><!--//desc-->                          
                            </div><!--//item-->
                            
          
      
 <div class="item row"><div class="desc col-md-8 col-sm-8 col-xs-12"></div></div> <div class="item row"><div class="desc col-md-8 col-sm-8 col-xs-12"></div></div></div></section>
                
                
               
                
            </div><!--//primary-->
            <div class="secondary col-md-4 col-sm-12 col-xs-12">

                <aside class="info aside section">
                    <div class="section-inner">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>DAKAR, SN</li>
                                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><a href="#">sndfa97@gmail.com</a></li>
                                <li><i class="fa fa-link"></i><span class="sr-only">Website:</span><a href="#">http://www.CIL<i class="fa fa-heart"></i>'s.com</a></li>
                                <p>EVENTUELLES PUBLICITES</p>
                            </ul>
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//aside-->
                
                
                    <aside class="list music aside section">
                    <div class="section-inner">
                        <h2 class="heading">Plus de news</h2>
                        <div class="content">
                                    
            <?php 
        try {
        $bdd=new PDO('mysql:host=localhost;dbname=tennis','root','root');
        $requete=$bdd->query('SELECT * FROM journaliste_post');
        while ($donnes=$requete->fetch()) {
            $resum_article=substr($donnes['article'],0,300);
            echo "
            <hr>
            <div class=\" affiche_news_container\"> 
            
        
            <form action=\"newnews.php\" method=\"post\">
        <center> <p> <input type=\"submit\" class=\"affiche_news \" name=\"id_page\" value=\"".$donnes['titre']."\"</p> </center>
         <p>".$resum_article."lire la suite ...</p>


        <input type=\"hidden\" name=\"id\" value=\"". $donnes['id']."\">
          </form> 

        
        
         <hr>
         <div>
         "
         
         ;

        }
    } catch (Exception $e) {
        die('erreur'.$e ->getMessage());
    }                  

    ?>      </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                
               
                
                
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container text-center">
                
                <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="assets/plugins/jquery-rss/dist/jquery.rss.min.js"></script> 
    <!-- github calendar plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/3.0.2/es6-promise.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/0.10.1/fetch.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-calendar/dist/github-calendar.min.js"></script>
    <!-- github activity plugin -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-activity/src/github-activity.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html> 

