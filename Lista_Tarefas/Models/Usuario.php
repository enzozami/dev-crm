<?php
    class Usuario{
        private PDO $database;

        public function __construct(PDO $database) {
            $this->database = $database;
        }

        public function autenticar($email, $senha){
            $sql = "SELECT * FROM bancoCRM WHERE email = :email AND senha = :senha";
            $params = [
                "email" => $email,
                "senha" => $senha
            ];
            $stmt = $this->database->prepare($sql);
            $stmt->execute($params);
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

            if($resultado->num_rows === 1){
                $usuario = $resultado;

                if(password_verify($senha, $usuario['senha'])){
                    return $usuario;
                }
            }
            
            return false;
        }
    }
?>