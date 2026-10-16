<?php

    require_once __DIR__ . '/../model/model.php';


    class UsuarioController{
        private $usuarioModel;
       
        public function __construct(){
            $this->usuarioModel = new Usuario();
        }

        public function index(){
            if(isset($_SESSION['id'])){
                header("Location: index.php?action=painel");
                exit;
            }

            include __DIR__ . "/../view/login.php";
        }

        public function autenticar(){
            if(!isset($_POST['email'], $_POST['senha'])){
                header("Location: index.php");
                exit;
            }

            $senha =$trim[($_POST['email'])];
            $email = $_POST['senha'];

            if(empty($email) || empty($senha)){
                $erro = "PREENCHA SEU EMAIL E SENHA";
                include __DIR__ . '/../view/login.php';
            }
        }

    }



?>