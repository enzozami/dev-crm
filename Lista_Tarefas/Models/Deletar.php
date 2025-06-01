<?php
    class Deletar{
        private PDO $database;

        public function __construct(PDO $database) {
            $this->database = $database;
        }

        public function deletar(Tarefas $tarefas){
            $sql = "DELETE FROM lista_tarefas WHERE id = :id";
            $params = [
                "id" => $tarefas->getId()
            ];
            $stmt = $this->database->prepare($sql);
            return $stmt->execute($params);
        }
    }
?>