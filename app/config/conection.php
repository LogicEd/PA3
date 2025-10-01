<?php
class connection
{
    public $host = 'localhost';
    public $dbname = 'crud';
    public $port = '5432';
    public $user = 'postgres';
    public $password = '123456';
    public $driver = 'pgsql'
    public $connect;

    public static function getConnection()
    {
        try {
            $connection = new Connection ();
            $connection->connet = new PDO ("{$connetion->driver}:host=
            {$connection->host};port={$connection->port};dbname=
            {$connection->dbname}", $connection->user,$connection->password);
            $connection->connect->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPCION);
            return $connection->connet;

        } catch (PDOExepcion $e){
            echo "Error: " . $e->getMessage();
        }
    }
}