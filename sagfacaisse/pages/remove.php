<script type="text/javascript">
  function remove() {
    document.getElementById('remove').style
  }
</script>

    <div class="container">
      <!-- Top Navigation -->
      <div class="component">
        <form method="post" action="pages/supprimer.php">
        <table class="">
          <thead>
            <tr>
              <th>Nom</th><th>Type de compte</th><th>Adresse</th><th>numero</th><td style="background-color :#F9F5F5;"></td>
            </tr>
          </thead>
          <tbody>
          
              <?php 
              try {
    $bdd=new PDO('mysql:host=localhost;dbname=bd_caisse','root','root');
    $requete=$bdd->query('SELECT * FROM les_comptes');
    while ($donnes=$requete->fetch()) {
            echo " 
                    <form action=pages/supprimer.php method=post >
                    <tr>  
              <th>".$donnes['Nom']."</th><td>".$donnes['Type_compte']."</td><td>".$donnes['adresse']."</td><td>".$donnes['numb']."</td>
                <div> 
                <td style=\"background-color=white;\" >
              <form action=pages/supprimer.php method=post >
                <button type=button class=btn btn-error m-b-10 m-l-5 style=\"background-color :red; color:white;\" >X</button>
                 </form>
                </td>
                </div>
            </tr>
            </form>
                                                ";

    }
  } catch (Exception $e) {
    die('erreur'.$e ->getMessage());
  }
              ?>
          
          </tbody>
        </table>
        </form>
      </div>
      
    </div><!-- /container -->
    