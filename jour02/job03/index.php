<?php
   

    for ($nombre=0; $nombre <= 100 ; $nombre++) { 
    	if ($nombre <= 20) {
        	echo "<i>".$nombre."</i>";
        	echo "</br>";
        }
        elseif ($nombre >= 25 && $nombre <= 50) {

        	if ($nombre ==42) {
        		echo "LaPlateforme_";
        		echo "</br>";
        	}
        	else{
        		echo "<u>".$nombre."</u>";
        		echo "<br>";
        	}
        	
        	
        	}
        	else{
        		echo $nombre;
        		echo "</br>";
     
  			}
        
        

          
        }
?>