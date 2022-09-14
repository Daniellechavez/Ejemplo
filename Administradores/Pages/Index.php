<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>ADMINISTRADORES</h1>
    <a href="add.php" target="_black" ">Registrar Administradores</a> <br><br>
    <table border="2">

            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>USUARIO</th>
                <th>PERFIL</th>
                <th>ESTADO</th>
                <th>ACCIONES</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Derlys</td>
                <td>Madera</td>
                <td>dmadera</td>
                <td>Administrador</td>
                <td>Activo</td>
                <td>
                    <a href="edit.php" target="1" ">Editar</a>
                    <a href="delet.php" target="2" ">Eliminar</a>
                </td>
            </tr>
     </table>
    
</body>
</html>