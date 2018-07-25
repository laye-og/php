<?php 
require "connectdb.php";
$donnée=$bd->query("SELECT* from site");
?>
<table border="2" cellpadding="7" cellspacing="0">
	<tr>
		<th>Code</th>
		<th>Nom</th>
		<th>Url</th>
		<th>Description</th>
	</tr>
	<?php 
	while ($result=$donnée->fetch()) {?>
	<tr>
		<td><?php echo $result['Code'] ?></td>
		<td><?php echo $result['Nom'] ?></td>
		<td><?php echo $result['Url'] ?></td>
		<td><?php echo $result['Description'] ?></td>
	</tr>
	<?php 
	}
	 ?>
</table>