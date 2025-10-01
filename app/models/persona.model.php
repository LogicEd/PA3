<?php
require_once "../config/connection.php";
class persona extends connection
{
    public static function mostrar datos()
    {
        try{
            $sql = "SELECT * FROM persona";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchALL();
            return $result;
        } catch (PDOExcepcion $th) {
            echo $th->getMessage()
        }
    }
    public static function obtenerDatoID($id)
    {
        try {
            $sql = "SELECT * FROM persona WHERE id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } cath (PDOExcepcion $th) {
                echo $th->getMessage();
        }
    }
    public static function guardarDato($data)
    {
        try{
            $sql = "INSERT INTO persona (nombres, email, edad) VALUES
            (:nombres, :email, :edad)";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':nombres', $data['nombres']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':edad', $data['edad']);
            $stmt->execute();
            $result = $stmt->fetch();
            return true;
        } cath (PDOExcepcion $th) {
            echo $th->getMessage();
        }
    }
    public static funcion actualizardato($data)
    {
        try{
            $sql = "UPDATE persona SET nombred = :nombres, email,
            edad = :edad WHERE id = id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':nombres', $data['nombres']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':edad', $data['edad']);
            $stmt->execute();
            $result = $stmt->fetch();
            return true;
        } cath (PDOExcepcion $th) {
            echo $th->getMessage();
        }
    }
    public static funcion eliminarDato($id)
    {
        try{
            $sql = "DELETE FROM persona WHERE id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            rerturn true;
        } cath (PDOExcepcion $th) {
            echo $th->getMessage();
    }
}