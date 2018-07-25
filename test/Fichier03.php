<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
   <?php
      $handle = fopen("people.csv", "r");
      while($record = fgetcsv($handle, 1000))
      {
      	echo "<table><tr><th>Name</th><td>{$record[0]} {$record[1]}</td> </tr> <tr><th>Age</th> <td>{$record[2]}</td></tr> </table></br>";
      }
      fclose( $handle);


   ?>
  </body>
  </html>