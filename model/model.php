<?php

    require_once __DIR__ . '/../config/db.php';


    class Usuario{
            private $conn;

            public function __construct(){
                $db = new Db();
                $this->conn = $db->conectar();
            }

            public function BuscarPorEmail($email){
                $sql =  "SELECT * FROM usuario WHERE email = ?";
                $stmt = $this->conn->prepare($sql);
                $stmt = bindParam("s", $email);
                $stmt->execute();

                $resultado = $stmt->getResult();
                return $resultado->fetch_assoc();
            }
    }

?>