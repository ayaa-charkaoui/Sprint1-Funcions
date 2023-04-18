<?php

//Exercici 1
function anysJocsOlimpics() {
    for ($i = 1960; $i <=1994 ; $i+=4) {
        echo $i;
        echo "<br>";
    }
    for ($i = 1994; $i <=2016 ; $i+=2) {
        echo $i;
        echo "<br>";
    }
}

//Exercici 2
function pagamentTrucada($minuts) {
    if ($minuts<3) {
        $pagamentTrucada = 0.10;
    }
    else {
        $pagamentTrucada=0.10+(($minuts-3)*0.05);
    }
}

//Exercici 3
function preuXocolata($unitatsXocolates) {
    $preuXocolata = $unitatsXocolates*1;
    return $preuXocolata;
}
function preuXiclets($unitatsXiclets) {
    $preuXiclets = $unitatsXiclets*0.50;
    return $preuXiclets;
}
function preuCaramels($unitatsCaramels) {
    $preuCaramels = $unitatsCaramels*1.50;
    return $preuCaramels;
}

function preuTotal($unitatsXocolates, $unitatsXiclets, $unitatsCaramels) {
    $preuTotal = preuXocolata($unitatsXocolates)+preuXiclets($unitatsXiclets)+preuCaramels($unitatsCaramels);
    echo $preuTotal;
}

preuTotal(2, 1, 1);


?>