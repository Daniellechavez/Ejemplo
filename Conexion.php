<?php

class Conexion
{
    protected $db;
    private $driver="mysql";
    private $host="localhost";
    private $bd = "notas";
    private $usuario = "root";
    private $contrasena = "";

    public function __construct()
    {
        try 
        {
            $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->bd}", $this->usuario, $this->contrasena);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      
            return $db;

        }catch (PDOException $e){
            echo "Se ha presentado un error al tratar de conectarse a la Base de Datos" . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE NOTAS </title>
    <style>
        body{
            
        }
    </style>
</head>
<body>
    
</body>
</html>