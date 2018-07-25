 <div class="gaps">
            <p>Date</p>    
            <input  id="datepicker1" name="daate" type="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
          </div>  
          <div class="gaps">
            <p>Plainte</p>
            <input type="text" name="plainte" placeholder="" required=""/>
          </div>      
          <div class="gaps">  
            <p>Symptômes</p>
            <input type="text" name="symptome" placeholder="" required=""/>
          </div>    
          <div class="gaps">  
            <p>Accident</p>
            <input type="text" name="accident" placeholder="" required="" value="" />
          </div>
          
        </div>
        <div class="right-agileinfo same">
          <div class="gaps">
            <p>Autres explorations</p>
            <select class="form-control" name="exploration">
              <?php lister_compte("exploration");?>
            </select>
          </div>
          <div class="gaps">
            <p>Trie</p>
           <select class="form-control" name="trie">
             <option></option>
             <option>oui</option>
             <option>non</option>
            </select>
          </div>
          <div class="gaps">
            <p>Traitement</p>
            <input type="text" id="test" name="traitement" placeholder="" required=""/>
          </div>
          <div class="gaps">
            <p></p>
            <input type="hidden" name="daateel" placeholder="" required="" value=<?php echo date("Y-m-d");?>/>
          </div>
          <div class="gaps">
            <p>Diagnostic</p>  
            <select class="form-control" name="diagnostic">
              <?php lister_compte("diagnostic");?>
            </select>
          </div>

          <div class="gaps">
            <p>Orientation</p>  
            <select class="form-control" name="orientation">
              <?php lister_compte("orientation");?>
            </select>
          </div>
          <div class="gaps">
            <p>Soins infirmier</p>  
            <select class="form-control" name="soins">
              <?php lister_compte("soins");?>
          </div>
           </div>
          
             <div class="gaps">  
            <p></p>
            <input type="hidden" name="datereel" placeholder="" required="" value=<?php echo date("Y-m-d");?>  />
          </div>
          <div class="gaps">  
            <p></p>
            <input type="hidden" name="type" placeholder="" required="" value=<?php echo "agent";?>  />
          </div>
        </div>
        <div class="clear"></div>
        <input type="submit" value="Submit">
      </form>
    </div>
   </div>
   <!--copyright-->
     
    <!--//copyright-->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- Calendar -->
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <script src="js/jquery-ui.js"></script>
          <script>
              $(function() {
              $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
              });
          </script>
      <!-- //Calendar --
            <div class="bg-agile" style="position: relative; top:200px; left:100px;">
  <div class="book-appointment">
  <h2>Medical Information</h2>
      <form action="pages/decaisse2.php" method="post">
        <div class="left-agileits-w3layouts same">
         <div class="gaps">
            <form name="completion_form" method="POST" action="une_action.html">

        <!-- obliger de laissé un autre champs text invisible pour pallier a la gestion de la touche entrée sur les formulaires -->
        <INPUT TYPE="text" NAME="dummy" value="dummy" style="display:none;">

        <!-- déclaration du champs dans lequel on va tapé sa recherche -->
        Auto completion : <input  type="text"
                      class="texte"
                      id="completion_text"
                      name="completion_text"
                      onkeyup="recup_email(event);"
                      autocomplete="off">
        <BR>
        <!-- délacaration du SELECT a choix unique pour la completion -->
        <select id="completion_select"
            name="completion_select"
            size="1"
            onclick="recup_mail_click();"
            style="margin-left:110px;border:solid 1px black;border-top:none;display:none;"></select>

        <BR>
          </div>
</body>
</html>
       </form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>