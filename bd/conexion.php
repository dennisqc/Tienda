<?php
// modelo es full consultas a la bd
// controlador es la interaccion de modelo con vista 
class conexiones
{
    private $driver = 'mysql';
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '12345678';
    private $dbName = 'Tienda';
    private $charset = 'utf8';

    public function conexion()

    {
        /*$conexion=new mysqli($this->host,$this->user,$this->pass,$this->dbName);
*/
        try {
            $conexion = new PDO("{$this->driver}:host={$this->host};dbname={$this->dbName};charset={$this->charset}", $this->user, $this->pass);
            $conexion->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
            return $conexion;
            // echo "ok";
        } catch (PDOException $e) {
            echo $e->getMessage();
            // die($e->getMessage());
        }
    }
}
