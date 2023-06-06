<?php
$numeri = [1,34,55,76,83,88];
$somma = 0;
$count = 0;

foreach ($numeri as $numero){
    if ($numero % 2 == 0){
        $somma += $numero; 
        $count++;
    }
}
$media = $somma / $count ;
echo $media;



    


