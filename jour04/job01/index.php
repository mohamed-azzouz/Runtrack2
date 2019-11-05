<?php

	$i = 0 ;
	
	foreach ($_GET as $key => $value) 
	{
		$i++;
	}

	echo $i ;;
	
?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="index.php" method="get">
		Nom: <input type="text" name="name"><br>
		Prenom: <input type="text" name="prenom"><br>
		Age: <input type="text" name="age"><br>
		E-mail: <input type="text" name="email"><br>
	
	</form>





</body>
</html>







	

	
	

	



