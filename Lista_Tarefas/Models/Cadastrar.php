<?php
    class Cadastro{
        private PDO $database;

        public function __construct(PDO $database) {
            $this->database = $database;
        }

        public function cadastrar(Tarefas $tarefas){
            $sql = "INSERT INTO listaTarefas(titulo, descricao, dataCriacao, id_usuario)
                    VALUE (:titulo, :descricao, :dataCriacao, :usuario)";
            $params = [
                "titulo" => $tarefas->getTitulo(),
                "descricao" => $tarefas->getDescricao(),
                "dataCriacao" => $tarefas->getDataCriacao(),
                "usuario" => $tarefas->getUsuario()
            ];
            $stmt = $this->database->prepare($sql);
            $stmt->execute($params);
            
            if($stmt->rowCount() == 0){
                return null;
            }

            return (int)$this->database->lastInsertId();
        }
    }
?>