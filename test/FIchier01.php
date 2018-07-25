<h1> A simple hit counter</h1>
<?php
$counterFile = "./count.dat";


if (!file_exists($counterFile))
{
	if (!($hanlde = fopen($counterFile, "w")))
	{
		die("Cannot create the counter file.");
	}
	else
	{
		fwrite($handle, "0");
		fclose($handle);
	}
}