<?php 
$dirPath="/Users/retina/Documents";
if (!($handle= opendir($dirPath))) 
	die("cannot open the directory.");
 ?>
 <p>
 	<?php echo $dirPath?> <p> contains the following files and folders</p>
 </p>
 <?php 
 while ($file =readdir($handle)) {
 	if ($file !="."&& $file!=". .")echo "<li>$file</li>"; 
 	}
 	closedir($handle);

  ?>
