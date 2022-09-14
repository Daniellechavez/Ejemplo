<?php
require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Estudiantes.php');
require_once ('../../Metodos.php');


$ModeloUsuarios = new Usuarios();
//$ModeloUsuarios->validateSession();

$ModeloEstudiantes = new Estudiantes();
$ModeloMetodos = new Metodos();

$Id = $_GET['Id'];
$InformacionEstudiante = $ModeloEstudiantes-> getById($Id);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistemas de Notas</title>
    <style> 
    body{
    background-color: bisque;
}
</style>
    <link rel="stylesheet" href="">
</head>
<body>
   <center> <h1>EDITAR ESTUDIANTE</h1>

    <form method="POST" action="../Controladores/edit.php">
   

        <input type="hidden" name="Id" value="<?php echo $Id; ?> ">
        <?php
        if($InformacionEstudiante  != null) {
            foreach ($InformacionEstudiante as $Info) {

        ?>
     Nombre <br>
     <input type="text" name="Nombre" required="" autocomplete="off" placeholder="Ingrese Nombre" value= "<?php echo $Info['NOMBRE']?>"> <br><br>
     Apellido <br>
     <input type="text" name="Apellido" required="" autocomplete="off" placeholder="Ingrese Apellido" value= "<?php echo $Info['APELLIDO']?>"> <br><br>
     Documento <br>
     <input type="text" name="Documento" required="" autocomplete="off" placeholder="Ingrese Documento" value= "<?php echo $Info['DOCUMENTO']?>"> <br><br>
     Correo <br>
     <input type="text" name="Correo" required="" autocomplete="off" placeholder="Ingrese Correo" value= "<?php echo $Info['CORREO']?>"> <br><br>
     Materia <br>
     <select name="Materias" required="">
     <option  value = "<?php echo $Info['MATERIA'] ?>"><?php echo $Info['MATERIA'] ?></option>
     <?php
        $Materias = $ModeloMetodos->getMaterias();

        if($Materias != null){
            foreach ($Materias as $Materia){
                ?>
                <option value="<?php echo $Materia['MATERIA'] ?>"><?php echo $Materia['MATERIA'] ?></OPTION>
                <?php
                }
            }
            ?>
    </select> <br><br>
    Docente <br>
    <select name="Docentes" required="">
        <option value= "<?php echo $Info['DOCENTE'] ?>"><?php echo $Info['DOCENTE'] ?></option>
        <?php
            $Docentes = $ModeloMetodos->getDocentes();
            if($Docentes != null){
                foreach ($Docentes as $Docente) {
            ?>
                <option value="<?php echo $Docente['NOMBRE'] .' '.$Docente['APELLIDO'] ?>"><?php echo  $Docente['NOMBRE'] .' '. $Docente['NOMBRE'] ?></option>
                <?php        
                }
            }
            ?>

    </select> <br><br>
    Promedio <br>
    <input type="number" name="Promedio" required="" autocomplete="off" placeholder="Promedio" value= "<?php echo $Info['PROMEDIO'] ?>"> <br><br>
    
    <?php
     }
     }
    ?>
    <input type="submit" value="Editar Estudiante">

    </form>
    </center>
</body>
</html>