<?php

require_once('../Modelo/Estudiantes.php');


if($_POST)
{
    $ModeloEstudiantes = new Estudiantes();

    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Documento = $_POST['Documento'];
    $Correo = $_POST['Correo'];
    $Materia = $_POST['Materia'];
    $Docente = $_POST['Docente'];
    $Promedio = $_POST['Promedio'];
    $Fecha = date('Y-m-d');
    $ModeloEstudiantes->add($Nombre,$Apellido, $Documento, $Correo, $Materia, $Docente, $Promedio, $Fecha);

}else {
    header('Location: ../../Index.php');
 }
 echo "<center><H1>REGISTRO EXITOSO</H1></center>";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE NOTAS</title>
    <style>
        body{
    background-color: bisque;
}
    </style>
</head>
<body>
    
</body>
</html>