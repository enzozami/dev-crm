<?php
    session_start();
    
    require_once "../config/connection.php";
    require_once "../models/Usuario.php";

    $db = new Database();

    $database = $db->conectar();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $usuarioObjeto = new Usuario($database);
        $usuario = $usuarioObjeto->autenticar($email, $senha);
        
        if($usuario){
            $_SESSION["usuario"] = $usuario["usuario"];
            $_SESSION["id"] = $usuario["idUsuario"];
            header("Location: ../Views/dashboard.php");
            exit;
        } else {
            $erro = "Email ou senha inválidos";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Tarefas</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        input{
            border-radius: 1rem !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">

            <h1 class="text-center">LISTA DE TAREFAS</h1>

            <h3 class="text-center">CRM Soluções</h3>

            <div id="login">
                <div class="text-left">
                    <h2 class="text-center my-2">LOGIN</h2>
                    <label for="email" class="form-label">E-Mail</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" maxlength="15" required>
                </div>
                <div class="d-flex justify-content-between align-items-center my-3">
                    <button type="submit" id="btn" class="btn btn-outline-success my-2 d-block mx-auto">Entrar</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>