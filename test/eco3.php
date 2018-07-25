
<?php 
	$handle = fopen("people.csv","r");
	$lineNumber=1;
	while($line=fgets($handle)){
		echo"Name :{record[0]}{record[1]},Age:{record[2]}</br>";
	}
	fclose($handle)
 ?>