<?php
    session_start();
    
    require_once __DIR__ . "/../models/Cadastrar.php";
    require_once __DIR__ . "/../models/Editar.php";
    require_once __DIR__ . "/../models/Listar.php";
    require_once __DIR__ . "/../models/Tarefas.php";
    require_once __DIR__ . "/../models/BuscarTarefaId.php";

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

        public function editarTarefa(){
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $id = $_POST['id'] ?? null;
                $titulo = $_POST['titulo'] ?? null;
                $descricao = $_POST['descricao'] ?? null;
                $dataCriacao = $_POST['dataCriacao'] ?? null;
                $usuario = (int)$_SESSION['id'];
                
                $tarefas = new Tarefas($id, $titulo, $descricao, $dataCriacao, $usuario);

                $edit = new Editar($this->database);
                $editar = $edit->editar($tarefas);
                if($editar){
                    header('Location: /dev-crm/Lista_Tarefas/Views/dashboard.php');
                    exit;
                } else {
                    echo"<script> alert('Erro ao atualizar tarefa!');</script>";
                }
            }
        }

        public function buscarTarefaID(){
            $id = $_GET['id'];
            $usuario = (int)$_SESSION['id'];

            $tarefas = new Tarefas($id, "", "", "", $usuario);

            $list = new BuscarTarefaId($this->database);
            return $list->buscarTarefaId($tarefas);
        }
    }
?>