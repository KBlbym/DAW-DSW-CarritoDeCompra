<?php
date_default_timezone_set('Atlantic/Canary');
class Context{
    private $conn;
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "tienda";

    function __construct()
    {
        $this->conectar();
    }

    public function conectar(){
        try {
            $this->conn = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();

        }
    }
    public function desconectar() {
        $this->conn = null;
    }

    //Getters and setters
    public function getConnection() {
        return $this->conn;
    }

}
// Establecer la zona horaria de Islas Canarias