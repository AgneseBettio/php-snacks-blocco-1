<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

//ciclo while

$whileArray = [];

while (count($whileArray) < 15) {
   
    $rndNum = rand(1, 100);
    if (!in_array($rndNum, $whileArray)) {
        $whileArray[] = $rndNum;
    }
}


var_dump($whileArray);


//ciclo for

$forArray = [];
for ($i = 0; $i < 15; $i++) {
    $rndNum = rand(1, 100);
    if (!in_array($rndNum, $forArray)) {
        $forArray[] = $rndNum;
    }

}

var_dump($forArray);

?>