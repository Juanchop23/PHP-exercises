<?php 
$monto = $_POST['monto'];

for ($i = 1; $i <= $monto; $i++){
    $determinar = esPar($i);

    if($determinar){
        echo "<br/> el número ". $i . " es par";
    }
}



function esPar ($numero){
    if ($numero % 2 == 0){
        return true;
    } else{
        return false;
    }
}




?>