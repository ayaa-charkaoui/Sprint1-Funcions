<?php
$nota=$_GET['nota'];
function verificarGrau($nota) {
     if ($nota >= 60) {
        echo "El grau hauria de ser Primera Divisió";

     }
     else if ($nota >= 45) {
        echo "El grau hauria de ser Segona Divisió";
        
     } 
     else if ($nota >= 33) {
        echo "El grau hauria de ser Tercera Divisió";
        
     }
     else  {
        echo "L'estudiant reprovarà";
         
    }

}

verificarGrau($nota);


?>