<?php
	$handle = fopen("milton.txt", "r");
	$lineNumber = 1;

While ($line = fgets ($handle))
{
	echo $lineNumber++ . ": $line <br/> ";
}

fclose($handle);
?>