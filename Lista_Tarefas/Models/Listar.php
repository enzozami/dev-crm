<?php
    class Listar{
        private PDO $database;

        public function __construct(PDO $database) {
            $this->database = $database;
        }

        public function listar(Tarefas $tarefas){
            $sql = "SELECT id, titulo, descricao, dataCriacao AS Data_Criacao, usuario
                    FROM listaTarefas
                    LEFT JOIN login ON listaTarefas.id_usuario = login.idUsuario
                    WHERE id_usuario = :id";
            $params = [
                "id" => $tarefas->getId()
            ];
            $stmt = $this->database->prepare($sql);
            $stmt->execute($params);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>