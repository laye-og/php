  <div style="position: relative;left:20px;">
      <div class="input-group input-group-icon">
        <input type="text" name="nom" placeholder="nom"/>
        <div class="input-icon"></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" name="prenom" placeholder="prenom "/>
        <div class="input-icon"></div>
      </div>
      <div class="gaps">
        <input type="text" name="matricule" placeholder="matricule"/>
        <div class="input-icon"></div>
      </div>
       <div class="input-group input-group-icon">
        <input type="text" name="age" placeholder="Age"/>
        <div class="input-icon"></div>
      </div> 
      <div class="input-group input-group-icon" style="width: 680px;">
          <select name="sexe">
            <option> Sexe</option>
            <option> M</option>
             <option>F</option>
          </select>
        <div class="input-icon"></div>
      </div>
      <div class="input-group input-group-icon" style="width: 680px;"  >
        <select name="statut">
          <option>Statut</option>
          <option>Famille</option>
           <option>Agent</option>
            <option>Rse</option>
        </select>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" name="adresse" placeholder="Adresse"/>
        <div class="input-icon"></div>
      </div>
       <div class="input-group input-group-icon">
        <input type="text" name="plainte" placeholder="Plaintes"/>
        <div class="input-icon"></div>
            
        </div>


      <div style="position: relative; left:400px;bottom: 540px;">
        <div class="input-group input-group-icon">
        <input type="text" name="symptome" placeholder="Symptômes"/>
        <div class="input-icon"></div>
      </div>
        <div class="input-group input-group-icon">
        <input type="text" name="exploration" placeholder="Autres exploration"/>
        <div class="input-icon"></div>
      </div>
       <div class="input-group input-group-icon" style="width: 680px;">
       <select name="diagnostic">
          <?php lister_compte("diagnostic");?>
        </select>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" name="traitement" placeholder="traitement"/>
        <div class="input-icon"></div>
      </div>
      <div class="input-group input-group-icon" style="width: 680px;">
       <select name="soins">
          <?php lister_compte("soins");?>
        </select>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" name="trie" placeholder="trie"/>
        <div class="input-icon"></div>
      </div>
     <div class="input-group input-group-icon" style="width: 680px;">
       <select name="orientation">
          <?php lister_compte("orientation");?>
        </select>
      </div>
      
       <div class="input-group input-group-icon">
        <input type="hidden" name="accident" placeholder="Accident" value="test" />
        <div class="input-icon"></div>
      </div>
      <div class="input-group input-group-icon" style="position: relative;bottom: 20px;">
        <input type="text" name="datereel" placeholder="Accident" value=<?php echo date("Y-m-d");?> />
        <div class="input-icon"></div>
        <div style="position: relative;right: 10px; top:40px;">
        <center><button style=" -webkit-box-shadow: 1px 0 20px rgba(0, 0, 0, 0.50);height: 50px;width: 200px; background-color:#77BD43;"> <a href="tab_bord_imprime.php">Ajouter</a></button></center>
        </div>
      </div>
      </div>
    </div>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->