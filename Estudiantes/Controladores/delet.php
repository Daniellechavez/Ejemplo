<?php
 require_once('../Modelo/Estudiantes.php');

 if($_POST)
 {
     $Modelo = new Estudiantes();
     $Id = $_POST['Id'];
     $Modelo->delete($Id);
     
 }else{
     header('Location: ../../../Index.php');
 }
 echo  "<center><H1>SE HA ELIMINADO CORRECTAMENTE</H1></center>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema de notas</title>
    <style>
         body{
    background-color: bisque;
  }
    </style>
</head>
<body>
    
</body>
</html>