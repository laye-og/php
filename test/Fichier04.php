<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
        <?php
          $dirPath = "/Users/retina/Desktop/php/test";
          if ( !($handle = opendir($dirPath))) {
            die("Cannot open the directory.");
          }
        ?>
         <p><?php echo $dirPath  ?> contains the following files and folders</p>
         <ul>
         <?php
           while ( $file = readdir($handle)) {
           	 if ( $file != "." && $file != "..") echo "<li>$file</li>";
           }
           closedir( $handle);
         ?>
  </body>
  </html>