 <?php $type_compte="test"; ?>
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Bonjour  </h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active"></li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
   <!-- Container fluid  -->
   <center><h1>Création</h1></center>
   <div style="position: relative; left:200px;" >
       <div class="container-fluid">
        <!-- Start Page Content -->
        <div style="height: 50px;"></div>
       <div class="row" style="margin-left: 200px; width: 100%;height: 200px;">
            <div class="col-md-3" >
                <div class="card p-30" style="background-color: #E1FFD8;color: white;" >
                    <div class="media">
                        <div class="media-left meida media-middle">
                        </div>
                        <div class="media-body media-text-right">

                                <center>
                         <p class="m-b-0">Diagnostic </p><hr>
                        <? echo"<a href=gestion_compte.insc_compte.php?type_compte=diagnostic>"?>  <img src="images/diagnostic.png">

                         </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-left: 100px;margin-right: 300px;">
                <div class="card p-30" style="background-color: #E1FFD8;" >
                    <div class="media">
                        <div class="media-left meida media-middle"> </div>
                        <div class="media-body media-text-right">
                            <center>
                            <p class="m-b-0">Soins infirmier<hr>
                             <? echo"<a href=gestion_compte.insc_compte.php?type_compte=soins>"?>    <img src="images/soins.png">
                                 </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30" style="background-color: #E1FFD8";>
                    <div class="media">
                        <div class="media-left meida media-middle"></div>
                        <div class="media-body media-text-right">
                          <center>
                        <p class="m-b-0">Orientation</p><hr>
                  <? echo"<a href=gestion_compte.insc_compte.php?type_compte=orientation>"?><img src="images/orientation.png"></a>
                        </center>
                     </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-left: 100px;">
                <div class="card p-30" style="background-color: #E1FFD8";>
                    <div class="media">
                        <div class="media-left meida media-middle"></div>
                        <div class="media-body media-text-right">
                          <center>
                        <p class="m-b-0">Autres explorations</p><hr>
                  <? echo"<a href=gestion_compte.insc_compte.php?type_compte=exploration>"?><img src="images/exploration.png"></a>
                        </center>
                     </div>
                    </div>
                </div>
            </div>
             <div class="container-fluid">
        <!-- Start Page Content -->
        
           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
              