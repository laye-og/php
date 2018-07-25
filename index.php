
<?php
   $nbr = 4;
   $files=scandir($rep);
   //var_dump($files);
    for($i=0;$i<count($files);$i++){
    	if($files[$i]!="." && $files[$i]!=".."){
          $imgs[] = $files[$i];
    	}
    }
    
    $nbrMax = count($imgs);
    $nbrMaxPages = count($imgs)/$nbr;
   if(!isset($_GET["page"])){
   	 $page=1;
   }else{
   	$page = (int)$_GET["page"];
   	if($page<=0){
   		$page =$nbrMaxPages;
   	
   	}
   }

   $start = ($page-1)*$nbr;
   for($i=$start;$i<($start+$nbr) && $i<$nbrMax;$i++){
    	?>
<img style='width:250px;height:300px;' src=<?php echo "'images/image/$imgs[$i]'"?> /> <?php
   }
?>
<br>
<?php 
if ($page>1) {
 ?>
<a href="index.php?page=<?php echo $page-1; ?>">precedent</a>
 <?php
} 
if ($page<$nbrMaxPages) {
	?>
<a href="index.php?page=<?php echo $page+1; ?>">suivant</a>
<?php
}
?>
</body>	
</html> 