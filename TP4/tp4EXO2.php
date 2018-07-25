<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php  
       $handle = fopen("question.txt", "r");
       $lineNumber = 1;
       while ($line = fgets($handle)) {
       	echo  $lineNumber++ . ":$line</br>";
       }
       fclose($handle);


    ?>
  </body>
  </html>