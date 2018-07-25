
<?php
if (isset($_POST['A']) && ($_POST['B']) && ($_POST['C'])){
 $A=$_POST['A'];
 $B=$_POST['B'];
 $C=$_POST['C'];

 $delta=$A*$A-(2*$A*$B)+($B*$B);
 $rac_delta=sqrt($delta);

 		if ($rac_delta<0) {
 			$deuxa=2*$A;
 			echo "la premiére racine est : -$B-i$rac_delta/$deuxa";
 			echo "la deuxieme racine est : -$B+i$rac_delta/$deuxa";
 		}
 		if ($rac_delta>0) {
 			$rac1=-$B-$rac_delta/2*$A;
 			$rac2=-$B+$rac_delta/2*$A;
 			echo "la premiére racine est :$rac1 ";
 			echo "la deuxieme racine est :$rac2 ";
 		}
 		if ($rac_delta=0) {
 			$racun=-$B/2*$A;
 			
 			echo "la premiére racine est :$racun ";
 			
 		}
 		
}
?>