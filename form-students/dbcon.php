<?php
    $conexion =mysqli_connect("localhost", "root", "hola", "studentcourse")
    or die('No se ha podido conectar al servidor');

    #INPUTS
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];

    if(empty($nombres)){
        echo 'Por favor ingresa tus nombres';
    }
    else if(empty($apellidos)){
        echo 'Por favor ingresa tus apellidos';
    } else {
        echo "Alumno matriculado exitosamente";
    }


    #INSERTANDO INFORMACIÓN EN LA BD

    mysqli_query($conexion, "INSERT INTO estudihambres (nombres,apellidos,curso) 
    VALUES ('$_REQUEST[nombres]', '$_REQUEST[apellidos]', '$_REQUEST[codigocurso]')") or
    die('No se ha podido enviar la información');

    mysqli_close($conexion);


    #VALIDACIÓN
    

?>
