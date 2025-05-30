<?php
    require_once "../models/Cadastrar.php";
    require_once "../models/Tarefas.php";

    class TarefaController{
        private PDO $database;

        public function __construct(PDO $database) {
            $this->database = $database;
        }

        public function criarTarefa(){
            if($_SERVER['REQUEST_METHOD'] === 'POST'){

                $titulo = $_POST['tarefa'];
                $descricao = $_POST['descricao'];
                $dataCriacao = $_POST['dataCriacao'];
                $usuario = $_POST['usuario'];

                $tarefa = new Tarefas($titulo, $descricao, $dataCriacao, $usuario);

                $cadastro = new Cadastro($this->database);
                $id = $cadastro->cadastrar($tarefa);

                if($id){
                    header('Location: ../Views/dashboard.php');
                } else {
                    echo"<script> alert('Erro ao cadastrar tarefa!');</script>";
                }
            }
        }
    }
?>