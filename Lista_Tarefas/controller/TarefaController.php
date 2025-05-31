<?php
    session_start();
    
    require_once __DIR__ . "/../models/Cadastrar.php";
    require_once __DIR__ . "/../models/Editar.php";
    require_once __DIR__ . "/../models/Listar.php";
    require_once __DIR__ . "/../models/Tarefas.php";

    class TarefaController{
        private PDO $database;

        public function __construct(PDO $database) {
            $this->database = $database;
        }

        public function criarTarefa(){
            if($_SERVER['REQUEST_METHOD'] === 'POST'){

                $titulo = $_POST['titulo'];
                $descricao = $_POST['descricao'];
                $dataCriacao = $_POST['dataCriacao'];
                $usuario = (int)$_SESSION['id'];

                $tarefa = new Tarefas(null, $titulo, $descricao, $dataCriacao, $usuario);

                $cadastro = new Cadastro($this->database);
                $id = $cadastro->cadastrar($tarefa);

                if($id){
                    header('Location: /dev-crm/Lista_Tarefas/Views/dashboard.php');
                    exit;
                } else {
                    echo"<script> alert('Erro ao cadastrar tarefa!');</script>";
                }
            }
        }

        public function listarTarefa(){
            $usuario = (int) $_SESSION['id'];

            $tarefas = new Tarefas(null, "", "", "", $usuario);
            $listagem = new Listar($this->database);
            $listar = $listagem->listar($tarefas);
            return $listar;
        }
    }
?>