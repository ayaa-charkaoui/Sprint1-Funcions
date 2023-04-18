<?php
$numero=$_GET['numero'];
function numeroPar($numero) {
    if ($numero%2==0) {
        echo "El número és parell";
    } 
    else {
        echo "El número és senar";
    }

}

numeroPar($numero);

?>