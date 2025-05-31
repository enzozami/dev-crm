<?php
    class Listar{
        private PDO $database;

        public function __construct(PDO $database) {
            $this->database = $database;
        }

        public function listar(Tarefas $tarefas){
            $sql = "SELECT id, titulo, descricao, dataCriacao AS Data_Criacao, usuario
                    FROM lista_tarefas
                    LEFT JOIN login ON lista_tarefas.id_usuario = login.idUsuario
                    WHERE id_usuario = :id";
            $params = [
                "id" => $tarefas->getUsuario()
            ];
            $stmt = $this->database->prepare($sql);
            $stmt->execute($params);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>