<?php
    class BuscarTarefaId{
        private PDO $database;

        public function __construct(PDO $database) {
            $this->database = $database;
        }

        public function buscarTarefaId(Tarefas $tarefas){
            $sql = "SELECT id, titulo, descricao, dataCriacao FROM lista_tarefas
                    WHERE id = :id";
            $params = [
                "id" => $tarefas->getId()
            ];
            $stmt = $this->database->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }
?>