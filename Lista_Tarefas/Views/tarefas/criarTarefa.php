<?php
    require_once "../../config/connection.php";
    require_once "../../controller/TarefaController.php";

    $database = new Database();
    $pdo = $database->conectar();
    
    $controller = new TarefaController($pdo);
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $controller->criarTarefa();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Nova Tarefa</title>
    <link rel="stylesheet" href="/dev-crm/Lista_Tarefas/public/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <?php
        include_once "../layout/navBar.php";
    ?>

    <div class="container">
        <form action="" method="post">
            <h2 class="text-center my-5">NOVA TAREFA</h2>

            <div class="border rounded p-3 m-2 text-center">
                
                <h4 class="text-center my-2">Criar Tarefa</h4>

                <div class="row mt-3 p-2 text-center">
                    <div class="col">
                        <label for="titulo" class="text-center form-label">Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control rounded-pill" required>
                    </div>
                    <div class="col">
                        <label for="descricao" class="text-center form-label">Descrição</label>
                        <input type="text" name="descricao" id="descricao" class="form-control rounded-pill" required>
                    </div>
                    <div class="col">
                        <label for="dataCriacao" class="text-center form-label">Data de Criação</label>
                        <input type="date" name="dataCriacao" id="dataCriacao" class="form-control rounded-pill" required>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-outline-success my-2">Criar Tarefa</button>
            </div>
        </form>
    </div>

    <?php
        include_once "../layout/footer.php";
    ?>
</body>
</html>