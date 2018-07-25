                <?php 
//[] 
$i=0;
if (!empty($_FILES)) {
  $upload=true;
  if ($upload=true) {
    $i=$i+1;
              }
$numb_page=1;
$img=$_FILES["img"];
$ext=strtolower(substr($img["name"],-3));
move_uploaded_file($img["tmp_name"], "files/".$img["name"]);
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>tp</title>
	<link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/animate.css">
      <style type="text/css">
      .div1{
      	height: 50px;
      	width: 100%;
      }
      img{
      	float: left;
      }
      .item{
      	margin-left: 100px;
      }
      .bestdisheswrapper{
    height: 50%;
  }
  .div2
  {

  border: none;
  border-bottom: 2px solid grey;
  height: 40px;
  width: 130px;
  background: red;
  float: right;
  margin-right: 15px;

  }
  .div3
  {

  border: none;
  border-bottom: 2px solid grey;
  height: 40px;
  width: 130px;
  background: red;
  float: left;
  margin-left: 15px;

  }
  a{
  	color: black;
  }

      </style>
  
</head>
<body>
	<div class="div1"></div>
<div class="bestdisheswrapper">
    <div id="bestdishes" class="container">
       
		 
      <div class="slider">
      		    <ul class="slides">
          	 	 <li class="slide">

 <?php 
                         $nbr = 4;
                         $files=scandir("files");
                         $numb_page=(int)substr($_POST["index2"],-1);
                        //$ext_poss= array('jpg','png','gif');
                        //$ext=strtolower(substr($files,-3));
                        //if (in_array($ext,$ext_poss)) 
                     $start = ($numb_page-1)*$nbr;
                         for($i=0;$i<count($files);$i++){
                       if($files[$i]!="." && $files[$i]!=".."){
                   $imgs[] = $files[$i];
                          } } 
                          if (($start+$nbr)<count($files)) {
                          
                        for ($i=$start; $i <=($start+$nbr); $i++) { 
                          # code...
                        
                          echo "<div class=\"item\"><img src=files/".$imgs[$i]."  width=\"226\" height=\"225\" alt=\"sliderimg\" class=\"wow flipInX\"
                           data-wow-delay=\".8s\"><h3>$imgs[$i]</h3>
                           </div>";
                           //break;
                           }
                            }
                            if (($start+$nbr)>=count($files)) {
                              for ($i=$start-2; $i <=(count($files)-$start); $i++) { 
                          # code...
                        
                          echo "<div class=\"item\"><img src=files/".$imgs[$i]."  width=\"226\" height=\"225\" alt=\"sliderimg\" class=\"wow flipInX\"
                           data-wow-delay=\".8s\"><h3>$imgs[$i]</h3>
                           </div>";
                           //break;
                           }
                            }
                         ?>
                       <!-- 

                          <div class="item">
                    <img src="images/thumb2.jpg" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                          <h3>Pasta Pillus</h3>
                      </div>
                    
                   <div class="item2">
                          <img src="images/thumb2.jpg" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                          <h3>Pasta Pillus</h3>
                      </div>
                          </li>
                   
    
        </ul>
      </div> 
    </div> 
</div> 
--><form action="index2.php" method="post">
<input type="submit" name="index2" value="index2">
</form>
</body>
</html>