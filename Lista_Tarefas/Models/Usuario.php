<?php
    class Usuario{
        private PDO $database;

        public function __construct(PDO $database) {
            $this->database = $database;
        }

        public function autenticar($email, $senha){
            $sql = "SELECT * FROM login WHERE email = :email";
            $params = [
                "email" => $email
            ];
            $stmt = $this->database->prepare($sql);
            $stmt->execute($params);
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if($usuario && $usuario['senha'] === $senha){
                return $usuario;
            }
            
            return false;
        }
    }
?>