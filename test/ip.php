 <!DOCTYPE html>
<html>
<head>
	<title></title>
  <body>
    <?php 
        $ip="192.168.1.12";
        $pi=explode(".",$ip );
        $pi= krsort($pi);
        $rip=implode(".", $pi)
     ?>
</body>
</html>