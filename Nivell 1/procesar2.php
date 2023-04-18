<?php
$numero=$_GET['numero'];
function comptar($numero) {
    if ($numero <10) {
        $numero = 10;
    }
    for ($i = 0; $i <=$numero ; $i+=2) {
        echo $i;
        echo "<br>";
    }

}

comptar($numero);




?>
