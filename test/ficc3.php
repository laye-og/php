<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php  
       $handle = fopen("milton.txt", "r");
       $lineNumber = 1;
       $liner;
        while ($line = fgets($handle)) {
        $handlee= fread($handle,1);
  if($handlee="C.") {

      echo  $lineNumber++ . "<input type=checkbox name=question$lineNumber>$line </br>";
       }
       else{
        echo  $lineNumber++ . "<input type=text name=question$lineNumber>$line </br>";
       }
    }
     ?>
   </body>
   </html>