<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas de Notas</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>EDITAR ADMINISTRADOR</h1>

    <form method="POST" action="../Controladores/edit.php">
    Nombre <br>
    <input type="text" name="Nombre" required="" autocomplete="off" placeholder="Ingrese Nombre"> <br><br>
    Apellido <br>
    <input type="text" name="Apellido" required="" autocomplete="off" placeholder="Ingrese Apellido"> <br><br>
    Usuario <br>
    <input type="text" name="Usuario" required="" autocomplete="off" placeholder="Ingrese Usuario"> <br><br>
    Password <br>
    <input type="text" name="Password" required="" autocomplete="off" placeholder="Ingrese Password"> <br><br>
    
    Estado <br>
         <select name="ESTADO" required="">
             <option>Seleccione</option>
             <option value="Activo">Activo</option>
             <option value="Inactivo">Inactivo</option>
         </select> <br><br>
    <input type="submit" value="Editar Administrador">

    </form>
    
</body>
</html>