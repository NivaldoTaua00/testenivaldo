<?php

class Db {
    private $host = 'localhost';
    private $usuario = 'root';
    private $senha = '';
    private $banco = 'login';
    
    // A propriedade deve apenas ser declarada, sem instanciar o objeto aqui
    public $conn;

    // Criamos um método construtor para rodar a conexão automaticamente
    public function __construct() {
        
        // Corrigido de 'msqli' para 'mysqli' e adicionado o '$this->' para acessar as propriedades
        $this->conn = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

        // Verificação de erros corrigida de '$conn-' para '$this->conn->'
        if ($this->conn->connect_error) {
            die("ERROR: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}

?>
