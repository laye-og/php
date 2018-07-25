 <?php 
//[] 
if (!empty($_FILES)) {
$numb_page=1;
$img=$_FILES["img"];
$ext=strtolower(substr($img["name"],-3));
move_uploaded_file($img["tmp_name"], "files/".$img["name"]);
}
                         $nbr = 4;
                         $files=scandir("files");
                         $les_pages=count($files);
                        
                         
                       //  echo "$les_pages</br>";
                         $nomb_page_poss=(int)($les_pages/$nbr);
                        
                         			for($i=0;$i<$les_pages;$i++)
                         			 {
                                       if($files[$i]!="." && $files[$i]!="..")
                                       		 {
                                        			$imgs[] = $files[$i];
                                    		 } 
                                 	 } 	
                                  	if (isset($_POST["num_page"])) 
                                  		 {
                                  			$numb_page=(int)$_POST["num_page"];
                                 		 }
                                  else{$numb_page=1;}
                             //      echo "$numb_page";

											 $start = (($numb_page-1)*$nbr)+1;
//echo "$nomb_page_poss<br> $numb_page";
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
    .div2 input[type="submit"]
{
  border: none;
  border-bottom: 2px ;
  height: 40px;
  background: red;
}
    .div3 input[type="submit"]
{
  border: none;
  border-bottom: 2px ;
  height: 40px;
  background: red;
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
              

 <?php 									if ($numb_page==$nomb_page_poss) 
 												{
 													$nbr=$les_pages-$start-3;
												}
									for ($i=$start; $i <($start+$nbr); $i++) 
							{ 
                                                 
                          			echo "
                          			<div class=\"item\">
                          					<img src=files/".$imgs[$i]."  width=\"100\" 		height=\"150\" alt=\"sliderimg\" 		class=\"wow flipInX\"
                         		 					 	data-wow-delay=\".8s\">
                         		 		 	<h3>$imgs[$i]</h3>
                         			  </div>";
                           
                           }

                           for ($i=1; $i <=$nomb_page_poss ; $i++) 
            { 
                           		if ($numb_page==$i) 
                {
                           				if ($numb_page==1 ) 
                        {
                           		$pointer=$i+1;
                           		
                           		echo " 
                           	</li>
           							</ul>
      									 </div>
                           			<form action=album.php method=post>
                           			<div class=div2>
                              		<input type=submit name=index value=\"page suivante\">
                              		<input type=hidden name=num_page value=$pointer>
                              		</div>
                            		</form>";
                            		break;
                        }
                            if ($numb_page==$nomb_page_poss) 
                        {
                        	$pointer=$i-1;
                           		
                           		echo " 
                           </li>
           						</ul>
     								  </div>
                           			<form action=album.php method=post>
                           			<div class=div3>
                              		<input type=submit name=index value=\"page precedente\">
                              		<input type=hidden name=num_page value=$pointer>
                              		</div>
                            		</form>";
                            		break;
                        }
                           	if ($numb_page> 1 && $numb_page<$nomb_page_poss) 
                        {
                           		$pointer_suiv=$i+1;
                           		$pointer_prec=$i-1;
                           		echo " 
                           </li>
          						 </ul>
      								 </div>
                           			<form action=album.php method=post>
                           			<div class=div2>
                              		<input type=submit name=index value=\"page suivante\">
                              		<input type=hidden name=num_page value=$pointer_suiv>
                              		</div>
                            		</form>";
                            	echo " 
                           			<form action=album.php method=post>
                           			<div class=div3>
                              		<input type=submit name=index value=\"page precedente \">
                              		<input type=hidden name=num_page value=$pointer_prec>
                              		</div>
                            		</form>";
                            	break;	

                        }
                 }
            }


?>










