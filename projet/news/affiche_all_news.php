                            <?php 
        try {
        $bdd=new PDO('mysql:host=localhost;dbname=tennis','root','root');
        $requete=$bdd->query('SELECT * FROM journaliste_post');
        while ($donnes=$requete->fetch()) {
            $resum_article=substr($donnes['article'],0,500);
            echo "
                
                            <div class=\"item row\">
                                <a class=\"col-md-4 col-sm-4 col-xs-12\" href=\"http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/\" target=\"_blank\">
                                <img class=\"img-responsive project-image\" src=\"files/".$donnes['photo']."\" alt=\"project name\" />
                                </a>
                                <div class=\"desc col-md-8 col-sm-8 col-xs-12\">
                                    <h3 class=\"title\"><a href=\"http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/\" target=\"_blank\">".$donnes['titre']."</a></h3>
                                    <p>". $resum_article."</p>
                                    <p><a class=\"more-link\" href=\"http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/\" target=\"_blank\"><i class=\"fa fa-external-link\"></i> Find out more</a></p>
                                </div><!--//desc-->                          
                            </div><!--//item-->
             "

             ;

        }
    } catch (Exception $e) {
        die('erreur'.$e ->getMessage());
    }

 ?>     