<?php

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../../Metodos.php');

$ModeloUsuarios = new Usuarios();
$ModeloMetodos = new Metodos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas de Notas</title>
    <style> 
    body{
    background-color: bisque;
}
</style>
    <link rel="stylesheet" href="">
</head>
<body>
  <center>  <h1>REGISTRAR ESTUDIANTE</h1>

    <form method="POST" action="../Controladores/add.php">
    Nombre <br>
    <input type="text" name="Nombre" required="" autocomplete="off" placeholder="Ingrese Nombre"> <br><br>
    Apellido <br>
    <input type="text" name="Apellido" required="" autocomplete="off" placeholder="Ingrese Apellido"> <br><br>
    Documento <br>
    <input type="text" name="Documento" required="" autocomplete="off" placeholder="Ingrese Documento"> <br><br>
    Correo <br>
    <input type="text" name="Correo" required="" autocomplete="off" placeholder="Ingrese Correo"> <br><br>
    Materia <br>
    <select name="Materia" required="">
        <option>Seleccione</option>
        <?php
           $Materias = $ModeloMetodos->getMaterias();
           if($Materias !=null){
               foreach ($Materias as $Materia)  {
                   ?>
                   <option value="<?php echo $Materia['MATERIA']?>"> <?php echo $Materia['MATERIA'] ?></option>
                   <?php
                   }
               }
           ?>
    </select> <br><br>

    Docente <br>
    <select name="Docente" required="">
        <option>Seleccione</option>
        <?php
        $Docentes = $ModeloMetodos->getDocentes();
           if($Docentes !=null){
               foreach ($Docentes as $Docente){
                ?>
                <option value ="<?php echo $Docente['NOMBRE'].' '.$Docente['APELLIDO']?>"><?php echo $Docente['NOMBRE'].' '.$Docente['APELLIDO']?></option>
                <?php 
                }
            }
       ?>

    </select> <br><br>

    Promedio <br>
    <input type="number" name="Promedio" required="" autocomplete="off" placeholder="Promedio"> <br><br>
    <input type="submit" value="Registrar Estudiante">

    </form>
        </center>
</body>
</html>