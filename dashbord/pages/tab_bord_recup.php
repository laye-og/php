<?php
    $total_consultants     = 0;
    $total_consultations   = 0;
    $total_trie            = 0;
    $total_glyc_capillaire = 0;
    $total_tdr             = 0;
    $total_pansements      = 0;
    $total_injections      = 0;
    $total_orientations    = 0;
    $total_accidents       = 0;
    $total_evacuation      = 0;   

//require_once 'pages/function.php'; 
 //require_once 'pages/function.php'; 
  require_once("config.php");
 function validation($val)
{
  if(isset($val)&& !empty($val))
  {
    return true;

  }
  return false;
 
} 
    function total_consultant($mois,$annee,$statut)
      {
             $total_consultants     = 0;
             $mois=$mois;
               $annee=$annee;
               $date_debut= $annee."-".$mois."-01";
               $date_fin=$annee."-".$mois."-31";

                    
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1='SELECT * FROM registre where datereel >="'.$date_debut.'"';
            $req2='AND datereel <="'.$date_fin.'"';
                }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            {
                $total_consultants+=1;
          }
      echo $total_consultants;
     }

 function getconsultant($mois,$annee,$statut)
  {
         $total_consultants     = 0;
    		 $mois=$mois;
    	     $annee=$annee;
    	     $date_debut= $annee."-".$mois."-01";
    	     $date_fin=$annee."-".$mois."-31";

    	          
    	 try {
        $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
        $req1='SELECT * FROM registre where datereel >="'.$date_debut.'"';
        $req2='AND datereel <="'.$date_fin.'"';
            }
    	 catch (Exception $e) {
                die('erreur'.$e ->getMessage());
      }
         $requete=$bdd->query($req1.$req2);
        while ($donnes=$requete->fetch()) 
        {
          if ( $donnes['statut']==$statut)
          {
            $total_consultants+=1;
          }
    	}
	echo $total_consultants;
 }
 function total_consultation($mois,$annee)
  {
             $total_consultations   = 0;
             $i=0;
             $k=0;
             $e=0;
             $mois=$mois;
                        $total_trie= 0;
         $mois=$mois;
           $annee=$annee;
           $date_debut= $annee."-".$mois."-01";
           $date_fin=$annee."-".$mois."-31";

                
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1="SELECT matricule , COUNT(`datereel`) FROM registre";
            $req2=' where year("'.$date_debut.'")';
            $req3='AND  month("'.$date_fin.'")';
            $req4='GROUP by statut having COUNT(`matricule`)>=2';

                }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            {
                  $total_trie+=1;
            }
      echo $total_trie;
     }             
   
         function getconsultation($mois,$annee,$statut)
      {   
             $total_trie= 0;
             $mois=$mois;
             $annee=$annee;
             $date_debut= $annee."-".$mois."-01";
             $date_fin=$annee."-".$mois."-31";

                
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1="SELECT matricule , COUNT(`datereel`) FROM registre";
            $req2=' where year("'.$date_debut.'")';
            $req3='AND  month("'.$date_fin.'")';
            $req4='GROUP by statut having COUNT(`matricule`)>=2';

                }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            {
            if ($donnes['statut']==$statut)
                {
                  $total_trie+=1;
                } 
            }
      echo $total_trie;
     }             
         function gettrie($mois,$annee,$statut)
  {
         $total_trie= 0;
         $mois=$mois;
           $annee=$annee;
           $date_debut= $annee."-".$mois."-01";
           $date_fin=$annee."-".$mois."-31";

                
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1='SELECT * FROM registre where datereel >="'.$date_debut.'"';
            $req2='AND datereel <="'.$date_fin.'"';
            $req3='AND statut <="'.$statut.'"';
                }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            {
               if ($donnes['trie']==='oui' && $donnes['statut']==$statut)
                {
                  $total_trie+=1;
                } 
            }
      echo $total_trie;
     }             
          function total_trie($mois,$annee)
  {
         $total_trie= 0;
         $mois=$mois;
           $annee=$annee;
           $date_debut= $annee."-".$mois."-01";
           $date_fin=$annee."-".$mois."-31";

                
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1='SELECT * FROM registre where datereel >="'.$date_debut.'"';
            $req2='AND datereel <="'.$date_fin.'"';
                }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            {
               if ($donnes['trie']==='oui')
                {
                  $total_trie+=1;
                } 
            }
      echo $total_trie;
     }             


         function getglycemie($mois,$annee,$statut)
  {
         $total_glycemie= 0;
         $mois=$mois;
           $annee=$annee;
           $date_debut= $annee."-".$mois."-01";
           $date_fin=$annee."-".$mois."-31";

                
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1='SELECT * FROM registre where datereel >="'.$date_debut.'"';
            $req2='AND datereel <="'.$date_fin.'"';
            $req3='AND statut <="'.$statut.'"';
                }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            {
                if ($donnes['exploration']=="Glycemie" && $donnes['statut']==$statut)
                {
                  $total_glycemie+=1;
                }
            }
      echo $total_glycemie;
     }        
             function total_glycemie($mois,$annee)
  {
         $total_glycemie= 0;
         $mois=$mois;
           $annee=$annee;
           $date_debut= $annee."-".$mois."-01";
           $date_fin=$annee."-".$mois."-31";

                
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1='SELECT * FROM registre where datereel >="'.$date_debut.'"';
            $req2='AND datereel <="'.$date_fin.'"';
                }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            {
                if ($donnes['exploration']=="Glycemie")
                {
                  $total_glycemie+=1;
                }
            }
      echo $total_glycemie;
     }                                   
         function total_tdr($mois,$annee)
  {
         $total_tdr= 0;
         $mois=$mois;
           $annee=$annee;
           $date_debut= $annee."-".$mois."-01";
           $date_fin=$annee."-".$mois."-31";

                
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1='SELECT * FROM registre where datereel >="'.$date_debut.'"';
            $req2='AND datereel <="'.$date_fin.'"';
                }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            {
                if ($donnes['exploration']=="tdr_positif" || $donnes['exploration']=="tdr_negatif" || $donnes['exploration']=="tdr_invalidés" )
                {
                  $total_tdr+=1;
                }
            }
      echo $total_tdr;
     } 
           function gettdr($mois,$annee,$statut)
  {
         $total_tdr= 0;
         $mois=$mois;
           $annee=$annee;
           $date_debut= $annee."-".$mois."-01";
           $date_fin=$annee."-".$mois."-31";

                
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1='SELECT * FROM registre where datereel >="'.$date_debut.'"';
            $req2='AND datereel <="'.$date_fin.'"';
                }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            {
                if ($donnes['exploration']=="tdr_positif" || $donnes['exploration']=="tdr_negatif" || $donnes['exploration']=="tdr_invalidés")
                {
                  if ($donnes['statut']==$statut)
                   {
                        $total_tdr+=1;
                   }
                }
            } 
            echo $total_tdr;
   }
      function total_tdr_pos($mois,$annee)
  {
         $total_tdr_positif= 0;
         $mois=$mois;
           $annee=$annee;
           $date_debut= $annee."-".$mois."-01";
           $date_fin=$annee."-".$mois."-31";

                
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1='SELECT * FROM registre where datereel >="'.$date_debut.'"';
            $req2='AND datereel <="'.$date_fin.'"';
                }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            {
                if ($donnes['exploration']=="tdr_positif")
                {
                  $total_tdr_positif+=1;
                }
            }
      echo $total_tdr_positif;
     } 
          function total_tdr_neg($mois,$annee)
  {
         $total_tdr_negatif= 0;
         $mois=$mois;
           $annee=$annee;
           $date_debut= $annee."-".$mois."-01";
           $date_fin=$annee."-".$mois."-31";

                
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1='SELECT * FROM registre where datereel >="'.$date_debut.'"';
            $req2='AND datereel <="'.$date_fin.'"';
                }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            {
                if ($donnes['exploration']=="tdr_negatif")
                {
                  $total_tdr_negatif+=1;
                }
            }
      echo $total_tdr_negatif;
     }
             function total_tdr_inv($mois,$annee)
  {
         $total_tdr_inv= 0;
         $mois=$mois;
           $annee=$annee;
           $date_debut= $annee."-".$mois."-01";
           $date_fin=$annee."-".$mois."-31";

                
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1='SELECT * FROM registre where datereel >="'.$date_debut.'"';
            $req2='AND datereel <="'.$date_fin.'"';
                }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            {
                if ($donnes['exploration']=="tdr_invalidés")
                {
                  $total_tdr_inv+=1;
                }
            }
      echo $total_tdr_inv;
     }  

       function getpansement($mois,$annee,$statut)
  {
         $total_pansements= 0;
         $mois=$mois;
           $annee=$annee;
           $date_debut= $annee."-".$mois."-01";
           $date_fin=$annee."-".$mois."-31";

                
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1='SELECT * FROM registre where datereel >="'.$date_debut.'"';
            $req2='AND datereel <="'.$date_fin.'"';
            $req3='AND statut <="'.$statut.'"';
                }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            {
                if ($donnes['soins']=="pansements" && $donnes['statut']==$statut)
                {
                  $total_pansements+=1;
                }
            }
      echo $total_pansements;
     }
       function total_pansement($mois,$annee)
  {
         $total_pansements= 0;
         $mois=$mois;
           $annee=$annee;
           $date_debut= $annee."-".$mois."-01";
           $date_fin=$annee."-".$mois."-31";

                
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1='SELECT * FROM registre where datereel >="'.$date_debut.'"';
            $req2='AND datereel <="'.$date_fin.'"';
                }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            {
                if ($donnes['soins']=="pansements")
                {
                  $total_pansements+=1;
                }
            }
      echo $total_pansements;
     }
         function getinjections($mois,$annee,$statut)
  {
         $total_injections= 0;
         $mois=$mois;
           $annee=$annee;
           $date_debut= $annee."-".$mois."-01";
           $date_fin=$annee."-".$mois."-31";

                
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1='SELECT * FROM registre where datereel >="'.$date_debut.'"';
            $req2='AND datereel <="'.$date_fin.'"';
            $req3='AND statut <="'.$statut.'"';
                }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            {
                if ($donnes['soins']=="injections" && $donnes['statut']==$statut)
                {
                  $total_injections+=1;
                }
            }
      echo $total_injections;
     } 
     function total_injections($mois,$annee)
  {
         $total_injections= 0;
         $mois=$mois;
           $annee=$annee;
           $date_debut= $annee."-".$mois."-01";
           $date_fin=$annee."-".$mois."-31";

                
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1='SELECT * FROM registre where datereel >="'.$date_debut.'"';
            $req2='AND datereel <="'.$date_fin.'"';
               }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            {
                if ($donnes['soins']=="injections")
                {
                  $total_injections+=1;
                }
            }
      echo $total_injections;
     } 
            function getorientation($mois,$annee,$statut)
  {
         $total_orientation= 0;
         $mois=$mois;
           $annee=$annee;
           $date_debut= $annee."-".$mois."-01";
           $date_fin=$annee."-".$mois."-31";

                
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1='SELECT * FROM registre where datereel >="'.$date_debut.'"';
            $req2='AND datereel <="'.$date_fin.'"';
            $req3='AND statut <="'.$statut.'"';
                }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            {
                if ($donnes['statut']==$statut)
                {
                  $total_orientation+=1;
                }
            }
      echo $total_orientation;
     } 
               function total_orientation($mois,$annee)
  {

         $total_orientation= 0;
         $mois=$mois;
           $annee=$annee;
           $date_debut= $annee."-".$mois."-01";
           $date_fin=$annee."-".$mois."-31";

                
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1='SELECT * FROM registre where datereel >="'.$date_debut.'"';
            $req2='AND datereel <="'.$date_fin.'"';
                }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            {
                  $total_orientation+=1;
            }
      echo $total_orientation;
     }                                                                                       
               function total_accidents($mois,$annee)
  {
    $statut="Agent";
         $total_accidents= 0;
         $mois=$mois;
           $annee=$annee;
           $date_debut= $annee."-".$mois."-01";
           $date_fin=$annee."-".$mois."-31";

                
           try {
            $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
            $req1='SELECT * FROM registre where datereel >="'.$date_debut.'"';
            $req2='AND datereel <="'.$date_fin.'"';
                }
           catch (Exception $e) {
                    die('erreur'.$e ->getMessage());
          }
             $requete=$bdd->query($req1.$req2);
            while ($donnes=$requete->fetch()) 
            { 
              if ($donnes['statut']==$statut)
                {
                  $total_accidents+=1;
                }
            }
      echo $total_accidents;
     }                                                                                                     
?>  
  

