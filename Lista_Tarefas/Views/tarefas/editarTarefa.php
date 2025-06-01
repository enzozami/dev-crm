<?php
    require_once "../../config/connection.php";
    require_once "../../controller/TarefaController.php";

    $database = new Database();
    $pdo = $database->conectar();

    $controller = new TarefaController($pdo);

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $editar = $controller->editarTarefa(); 
    }

    $captura = $controller->buscarTarefaID();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Tarefa</title>
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
            
            <h2 class="text-center my-5">Editar Tarefa</h2>

            <div class="border rounded p-2 m-2 text-center">
                <h4 class="text-center">Tarefa: </h4>

                <div class="row mt-2 p-2 text-center">
                    <div class="col">
                        <label for="" class="form-label">ID</label>
                        <input type="text" name="id" id="id" class="form-control rounded-pill text-center" value="<?=$captura['id']?>" readonly>
                    </div>
                </div>

                <div class="row mt-2 p-2 text-center">
                    <div class="col">
                        <label for="" class="form-label">Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control rounded-pill" value="<?=$captura['titulo']?>">
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Descrição</label>
                        <input type="text" name="descricao" id="descricao" class="form-control rounded-pill" value="<?=$captura['descricao']?>">
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Data de Criação</label>
                        <input type="date" name="dataCriacao" id="dataCriacao" class="form-control rounded-pill" value="<?=$captura['dataCriacao']?>">
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <button class="btn btn-outline-success my-2">Atualizar Tarefa</button>
                <input type="hidden" name="id" value="<?= $captura['id']?>">
            </div>
        </form>
    </div>

    <?php 
        include_once "../layout/footer.php";
    ?>
</body>
</html>