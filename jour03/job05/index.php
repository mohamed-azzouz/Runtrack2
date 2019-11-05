<?php

	$str = "On nest pas le meilleur quand on le croit mais quand on le sait";

	$dic = ["consonnes" => ["b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z"],
			"voyelles" => ["a","e","i","o","O","u","y"]];
	
	$i = 0 ;
	$consonnes = 0 ;
	$voyelles = 0;
	

	while ($i <= strlen($str)) 
	{
		$c = 0;
		$tc = count($dic["consonnes"]);
		$v = 0 ;
		$tv = count($dic["voyelles"]);

		while ($c < $tc) 
		{
			if ($str[$i] == ($dic["consonnes"][$c]))
			{
				$consonnes++ ;
				break ;
			}
			$c++ ;
		}




		while ($v < $tv) 
		{
			if ($str[$i] == ($dic["voyelles"][$v])) 
			{
				$voyelles++ ;
				break ;
			}
			$v++ ;
		}
		$i++ ;
	}


?>