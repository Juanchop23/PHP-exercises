<?php

require 'flight/Flight.php'; #CARGAMOS EL FRAMEWORK

#CONECTANDO EL FRAMEWORK A LA DB
Flight::register('db','PDO',array('mysql:host=localhost;dbname=api','root',''));

#LEE LOS DATOS Y LOS MUESTRA A LA INTERFAZ QUE LO SOLICITE
Flight::route('GET /alumnos', function () { # HACEMOS SOLICITUD AL FRAMEWORK

    #SOLICITANDO LOS REGISTROS
    $sentencia = Flight::db()->prepare("SELECT * FROM `alumnos`");
    $sentencia->execute();

    #DEVOLVIENDONOS DATOS
    $datos = $sentencia->fetchAll();

    #IMPRIMIR EN FORMATO JSON
    Flight::json($datos);

});


#RECEPCIONA LOS DATOS Y HACE UNA INSERCIÓN
Flight::route('POST /alumnos', function () {
    $nombres=(Flight::request()->data->nombres);
    $apellidos=(Flight::request()->data->apellidos);

    $sql= "INSERT INTO alumnos (nombres,apellidos) VALUES(?,?)"; #Elementos 1 y 2
    $sentencia = Flight::db()->prepare($sql);
    #Poniendo parámetros en las columnas de la tabla de la BD.
    #En otras palabras, estamos reemplazandos los dos elementos
    #de $sql 
    $sentencia->bindParam(1, $nombres);
    $sentencia->bindParam(2, $apellidos);
    $sentencia->execute();

    #Devolviendo un dato si todo sale bien
    #(O más bien un letrero).
    Flight::jsonp(["Alumno agregado"]);
});


#BORRAR REGISTRO
Flight::route('DELETE /alumnos', function () {
    $id=(Flight::request()->data->id);

    $sql= "DELETE FROM WHERE id=?";
    $sentencia = Flight::db()->prepare($sql);
    $sentencia->bindParam(1, $id);
    $sentencia->execute();

    Flight::jsonp(["Alumno eliminado pipipipipipi"]);
});


#ACTUALIZAR REGISTRO
Flight::route('PUT /alumnos', function () {
    $id=(Flight::request()->data->id);
    $nombres=(Flight::request()->data->nombres);
    $apellidos=(Flight::request()->data->apellidos);

    $sql= "UPDATE alumnos SET nombres=?,apellidos=? WHERE id=?";

    $sentencia = Flight::db()->prepare($sql);

    #LOS VALORES SE PONEN DE ACUERDO A LOS DATOS PUESTOS
    #EN LA LÍNEA DEL SQL
    $sentencia->bindParam(1, $nombres);
    $sentencia->bindParam(2, $apellidos);
    $sentencia->bindParam(3, $id);
    $sentencia->execute();
    Flight::jsonp(["Alumno actualizado"]);
});


#LECTURA DE UN REGISTRO DETERMINADO.
#PODEMOS ENVIAR UN PARÁMETRO A TEAVÉS DE LA MISMA URL 'POST /alumnos/@id',
#Y RECEPCIONARLO EN LA FUNCIÓN: function ($id)
Flight::route('POST /alumnos/@id', function ($id) {
    #SOLICITANDO LOS REGISTROS
    $sentencia = Flight::db()->prepare("SELECT * FROM `alumnos` WHERE id=?");
    $sentencia->bindParam(1, $id);
    $sentencia->execute();

    #DEVOLVIENDONOS DATOS
    $datos = $sentencia->fetchAll();

    #IMPRIMIR EN FORMATO JSON
    Flight::json($datos);

});

Flight::start();