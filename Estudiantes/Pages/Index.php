<?php
require_once('../../Usuarios/Modelo/Usuarios.php');

require_once('../Modelo/Estudiantes.php');

$ModeloUsuarios = new Usuarios();
//$ModeloUsuarios->validateSession();

$ModeloEstudiantes = new Estudiantes();

?>
<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistema de Notas</title>
<style>
    body{
    background-color: bisque;
}
</style>
<link rel="stylesheet" href="estudiante.css">
</head>
<body>


    <center><h1>ESTUDIANTES</h1>
    <a href="add.php" target="_black" >REGISTRA ESTUDIANTES</a> <br><br>
    <table border="2">
    <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>DOCUMENTO</th>
                <th>CORREO</th>
                <th>MATERIAS</th>
                <th>DOCENTES</th>
                <th>PROMEDIOS</th>
                <th>FECHA DE REGISTRO</th>
                <th>ACCIONES</th>
            </tr>
    
    <?php

       $Estudiantes = $ModeloEstudiantes->get();
       if($Estudiantes != null){
          foreach ($Estudiantes as $Estudiante) { 

?>      
           
            <tr>
                <td><?php echo $Estudiante['ID_ESTUDIANTE']?></td>
                <td><?php echo $Estudiante['NOMBRE']?></td>
                <td><?php echo $Estudiante['APELLIDO']?></td>
                <td><?php echo $Estudiante['DOCUMENTO']?></td>
                <td><?php echo $Estudiante['CORREO']?></td>
                <td><?php echo $Estudiante['MATERIA']?></td>
                <td><?php echo $Estudiante['DOCENTE']?></td>
                <td><?php echo $Estudiante['PROMEDIO']?></td>
                <td><?php echo $Estudiante['FECHA_REGISTRO']?></td>
                
                <td>
                    <a href="edit.php?Id=<?php echo $Estudiante['ID_ESTUDIANTE'] ?>" target="_blank" ">Editar</a><br>
                    <a href="delet.php?Id=<?php echo $Estudiante['ID_ESTUDIANTE'] ?>" target="_blank" ">Eliminar</a>
                </td>
            </tr>

            <?php
            }
}        
        ?>
        </center>
     </table>


</body>
</html>