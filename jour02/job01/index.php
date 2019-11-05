<?php
    $nombre = 0;
    $addition = +1;

    while($nombre != 1337){
           if($nombre == 42){
                echo "<b><u>".$nombre."</b></u>";
                echo "</br>";
            } else{
                echo $nombre;
                echo "</br>";
            }
            $nombre = $nombre + $addition;
        }
?>