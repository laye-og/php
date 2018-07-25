<?php 
//[]
$numb_page=1;
$img=$_FILES["img"];

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
                    <div class="item">
                          <img src="images/thumb1.png" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                          <h3>Pasta Capellini</h3>
                      </div> <!-- end of item-->
                      
                   <div class="item2">
                          <img src="images/thumb2.jpg" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                          <h3>Pasta Pillus</h3>
                      </div>
                          </li>
                   
        </ul>
        			<ul class="slidees">

                  <li class="slidee">

                   <div class="item3">
                          <img src="images/thumb3.png" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                          <h3>Pasta Fusilli</h3>
                      </div> 
                
                  
                    <div class="item">
                          <img src="images/thumb1.png" width="226" height="225" alt="sliderimg" > 
                          <h3>Pasta Capellini</h3>
                      </div> 
                 </li>
                   
        </ul>
      </div> 
    </div> 
</div> 
<div class="div2">
	<a href="page2">page suivante</a>
	
</div>
</body>
</html>