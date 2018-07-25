
<?php
if (isset($_POST['A']) && ($_POST['B']) && ($_POST['C'])){
 $A=$_POST['A'];
 $B=$_POST['B'];
 $C=$_POST['C'];
 	if (is_integer($A) && (is_integer($B) ) && (is_integer($C)))
 		{
 			$delta=($B*$B)-(4*$A*$C);
 			$rac_delta=sqrt($delta);

 			if ($delta<0) {
 			$deuxa=2*$A;
	 			
			$rac_delta=sqrt(-$delta);
			$mdelta=-$delta;
 			echo "<ul>methode 1<ul/><br/>"; 
 			echo "la premiére racine est :( -$B-i $rac_delta) /$deuxa <br/>";
 			echo "la deuxieme racine est : (-$B+i $rac_delta) /$deuxa <br/>";
 			echo"<ul>methode 2<ul/><br/>";
 			echo "la premiére racine est : -$B/$deuxa -i √$mdelta /$deuxa <br/>";
 			echo "la deuxieme racine est : -$B/$deuxa + i √$mdelta /$deuxa <br/>";
 		}
 		if ($delta>0) {
 			$rac1=-$B-$rac_delta/2*$A;
 			$rac2=-$B+$rac_delta/2*$A;
 			echo "la premiére racine est :$rac1 ";
 			echo "la deuxieme racine est :$rac2 ";
 		}
 		if ($delta==0) {
 			$racun=-$B/2*$A;
 			
 			echo "la premiére racine est :$racun ";
 			
 		}
 		
}
	else 
		{
		 echo "ceci n est pas une equation ";
		}	
	}
 
?>