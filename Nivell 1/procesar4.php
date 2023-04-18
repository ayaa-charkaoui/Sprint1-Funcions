<?php 
function isBitten()
{
$x = rand(0, 100);

if ($x <= 50) { 
   echo "Charile em va mossegar el dit!"; 
}

else {
  echo "Charlie no em va mossegar el dit";
  }
}

isBitten();
 ?>