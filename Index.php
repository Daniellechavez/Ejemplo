<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE NOTAS </title>
    <link rel="stylesheet" href="fondo.css">
   
</head>

<body>

    <center><h1>SISTEMA DE NOTAS</h1>
        <h2>INICIO DE SESION</h2>

    <form method="POST" action="Usuarios/Controladores/Login.php">
    USUARIO <br>
    <input type="text" name="Usuario" required="" autocomplete="off"> <br><br>
    CONTRASEÑA<br>
    <input type="password" name="Contrasena" required="" autocomplete="off"> <br><br>

    <input type="submit" value="Iniciar Sesion">
     </form></center>
    
     

</body>
</html>