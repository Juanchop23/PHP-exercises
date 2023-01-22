<?php
$monto = $_POST['monto'];

for ($i = 1; $i <= $monto; $i++){
    if ($monto < 0){  // Por alguna razón este if no se muestra, pero tampoco marca error
        echo "Ingresa un número positivo";
    } else{
        echo "<br/>" . $i;
    }
}