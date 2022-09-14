<?php

require_once('../../Usuarios/Modelo/Usuarios.php');

$ModeloUsuarios = new Usuarios();
//$ModeloUsuarios->validateSession();

$Id = $_GET['Id'];//recibimos el id que vamos a eliminar 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
    <link rel="stylesheet" href="estudiante.css">
</head>
<body>
   <center> <h1>ELIMINAR ESTUDIANTE</h1>

    <form method="POST" action="../Controladores/delet.php">
    <input type="hidden" name= "Id" value="<?php echo $Id; ?> ">
    <p>¿Esta seguro que deseas eliminar este Estudiante?</p>
    <input type="submit" value="Eliminar Estudiante">
</form>
</center>
</body>
</html>