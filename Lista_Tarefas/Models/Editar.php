<?php
    class Editar{
        private PDO $database;

        public function __construct(PDO $database) {
            $this->database = $database;
        }

        public function editar(Tarefas $tarefas){
            $sql = "UPDATE listaTarefas
                    SET titulo = :titulo, descricao = :descricao, dataCriacao = :dataCriacao
                    WHERE id = :id";
            $params = [
                "id" => $tarefas->getId(),
                "titulo" => $tarefas->getTitulo(),
                "descricao" => $tarefas->getDescricao(),
                "dataCriacao" => $tarefas->getDataCriacao() 
            ];
            $stmt = $this->database->prepare($sql);
            
            return $stmt->execute($params);
        }
    }
?>