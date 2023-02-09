<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de matrícula</title>
</head>

<body>
    <h1>Matricular alumno</h1>

    <form action="dbcon.php" method="POST">
        Nombres
        <input type="text" name="nombres" id="nombres"><br>

        Apellidos
        <input type="text" name="apellidos" id="apellidos"><br>

        Seleccionar curso
        <select name="codigocurso" id="curso">
            <option value="1">Panadería</option>
            <option value="2">Motores</option>
            <option value="3">Man. de alimentos</option>
            <option value="4">Coctelería</option>
            <option value="5">Bartender</option>
            <option value="6">Excel</option>
            <option value="7">Python</option>
        </select>
        <br>
        <input type="submit" value="Matricular">
    </form>


    <script src="./index.js"></script>
</body>

</html>