<?php
	$text = "Hello LaPlateforme";
	$nbentier = 6 ;
	$bool = true ;

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<table>
		<tr>
			<th>Type</th>
			<th>Nom</th>
			<th>Valeur</th>
		</tr>

		<tr>
			<td>Booléen</td>
			<td>$bool</td>
			<td><?php echo $bool ; ?></td>
		</tr>

		<tr>
			<td>Texte</td>
			<td>$text</td>
			<td><?php echo $text ; ?></td>
		</tr>

		<tr>
			<td>Entier</td>
			<td>$nbentier</td>
			<td><?php echo $nbentier ; ?></td>
		</tr>

		

		
	</table>

</body>
</html>