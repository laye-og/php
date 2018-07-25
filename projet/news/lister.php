<?php 
    if (isset($_POST['id'])) {

    /*$id_article=$_POST['id'];
    $titre_article=$_POST['titre'];
    $article=$_POST['article'];
    $photo_article="files/".$_POST['photo'];
    echo "id=".$id_article."titre=".$titre_article."article=".$article."photo=".$photo_article;*/
    $id_article= $_POST['id'];
    try {
        $bdd=new PDO('mysql:host=localhost;dbname=Etudiants','root','root');
        $requete=$bdd->query('SELECT * FROM Etudiants');
        while ($donnes=$requete->fetch()) {
            if ($id_article==$donnes['Nom']) {
                    $titre_article=$donnes['Prenom'];
                    $article=$donnes['Adresse']; 
                    
        }
    }
    } catch (Exception $e) {
        die('erreur'.$e ->getMessage());}
}


 ?>

<!DOCTYPE html>
 <html lang="en"> <!--<![endif]-->  
<head>
    <style type="text/css">
    table
    {
        height: 500px;
        width: 500px;
    }
    tr{border: dotted;}
    td{border: dotted;}
</style>
    <title></title>
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
   
    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
                <section class="about section">
                    <div class="section-inner">
                        <div class="content">
                            Liste des Etudiants
                      
                        </div><!--//content-->
                    </div><!--//section-inner-->                 
                </section><!--//section-->
    
               <section class="latest section">
                    <div class="section-inner">
                        <table>
    <tr>
        <td>numero</td>
        <td>nom</td>
        <td>prenom</td>
        <td>Adresse</td>

        <?php 
     try {
        $bdd=new PDO('mysql:host=localhost;dbname=Etudiants','root','root');
        $requete=$bdd->query('SELECT * FROM Etudiant');
        while ($donnes=$requete->fetch()) {
            ?>
            <?php 
            echo "
        <tr>
       <center>  <td>".$donnes['Numb']."</td></center> 
        <center>  <td>".$donnes['Nom']."</td></center> 
         <center> <td>".$donnes['Prenom']."</td></center> 
         <center> <td>".$donnes['Adresse']."</td></center> 
            "
           
         ;

        }
    } catch (Exception $e) {
        die('erreur'.$e ->getMessage());
    }                  

    ?>  
      </tr>
        </table> 
                        <div class="content">    
                                       
                            <div class="item featured text-center">
                            
                                <div class="featured-image">
                                   
                                    <div class="ribbon">
                                       
                                    </div>
                                    
                                <div class="desc text-left">                                    
                                   
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


                
                    
               
                
                
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
   
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

