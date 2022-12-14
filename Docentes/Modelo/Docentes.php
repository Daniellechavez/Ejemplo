<?php

require_once('../../Conexion.php');

class Docentes extends Conexion 
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function add($Nombre, $Apellido, $Usuario, $Password)
    {
        $statement = $this->db->prepare("INSERT INTO Usuarios (NOMBRE, APELLIDO, USUARIO, PASSWORD, PERFIL,
        ESTADO) values(:Nombre, :Apellido, :Usuario, :Password, 'Docente', 'Activo')");
        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Apellido', $Apellido);
        $statement->bindParam(':Usuario', $Usuario);
        $statement->bindParam(':Password', $Password);
        if ($statement->execuse())
        {
            header('Location ../Pages/Index.php');
        }
        else
        {
            header('Location ../Pages/add.php');
        }
    }

    public function get()
    {
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE PERFIL='Docente'");
        $statement->execute();
        while ($result = $statement->fetch())
        {
            $rows[]=$result;
        }
        return $rows;
    }

    public function getById($Id)
    {
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE PERFIL='Docente' AND
        ID_USUARIO= :Id");
        $statement->bindParam(':Id', $Id);
        $statement->execute();
        while ($result = $statement->fetch())
        {
            $rows[]=$result;
        }
        return $rows;
    }

    public function update($Id, $Nombre, $Apellido, $Usuario, $Password, $Estado)
    {
        $statement = $this->db->prepare("UPDATE Usuarios SET NOMBRE = :Nombre , APELLIDO = :Apellido,
        USUARIO = :Usuario, PASSWORD = :Password, ESTADO = :Estado WHERE ID_USUARIO = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Apellido', $Apellido);
        $statement->bindParam(':Usuario', $Usuario);
        $statement->bindParam(':Password', $Password);
        $statement->bindParam(':Estado', $Estado);
        if ($statement->execuse())
        {
            header('Location ../Pages/Index.php');
        }
        else
        {
            header('Location ../Pages/edit.php');
        }
    }

    public function delete($Id)
    {
        $statement = $this->db->prepare("DELETE FROM Usuarios WHERE ID_USUARIO = :Id");
        $statement->bindParam(':Id', $Id);

        if ($statement->execute())
        {
            header('Location ../Pages/Index.php');
        }
        else
        {
            header('Location ../Pages/delet.php');
        }
    }
}

?>