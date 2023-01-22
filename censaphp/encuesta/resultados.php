<?php

$datos = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){ //ALMACENANDO LOS DATOS EN EL ARRAY
    $datos['sexo'] = $_POST['sexo'];
    $datos['sentimental'] = $_POST['sentimental'];
    $datos['hijos'] = $_POST['hijos'];
    $datos['vive'] = $_POST['vive'];
    $datos['profesion'] = $_POST['profesion'];
    $datos['viajado'] = $_POST['viajado'];
}

foreach($datos as $dato){
    echo $dato . "<br>";  //MOSTRANDO LOS DATOS ALMACENADOS
}

?>