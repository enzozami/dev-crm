<?php
    require_once "../controller/TarefaController.php";
    require_once "../config/connection.php";

    $database = new Database();
    $pdo = $database->conectar();

    $controller = new TarefaController($pdo);
    $listagem = $controller->listarTarefa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../public/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <?php
        include_once "layout/navBar.php";
    ?>

    <div class="container">
        <h2 class="text-center my-3">Lista de Tarefas</h2>

        <form action="" method="post">
            <div class="row">
                <div class="col-10 d-flex justify-content-center align-items-center">
                    <input type="text" name="pesquisa" class="form-control rounded-pill" placeholder="Pesquise aqui o ID da tarefa ou o Título!">
                    <button type="submit" class="btn btn-outline-success">Pesquisar</button>
                    <a href="dashboard.php" class="btn btn-outline-danger">Limpar</a>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-end align-items-end my-1">
                        <a href="tarefas/criarTarefa.php" type="submit" class="btn btn-expand-icon btn-outline-success my-1">
                            <i class="bi bi-plus-lg"> <br> </i>
                            <span class="text">Nova Tarefa</span>
                        </a>
                    </div>
                </div>
            </div>
        </form>

        <table class="table table-dark table-striped">
            <thead class="table-dark">
                <th class="text-center">ID</th>
                <th class="text-center">Título</th>
                <th class="text-center">Descrição</th>
                <th class="text-center">Data de Criação</th>
                <th></th>
            </thead>

            <tbody>
                <?php
                    foreach ($listagem as $listar){ 
                ?>
                <tr>
                    <td class="text-center"><?=$listar['id']?></td>
                    <td class="text-center"><?=$listar['titulo']?></td>
                    <td class="text-center"><?=$listar['descricao']?></td>
                    <td class="text-center"><?=date_format(new DateTime($listar['Data_Criacao']), "d/m/Y")?></td>
                    <td>
                        <a href="tarefas/editarTarefa.php?id=<?=$listar['id']?>" class="btn btn-info">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a href="" onclick="excluirTarefa('<?=$listar['id']?>', '<?=$listar['titulo']?>')" class="btn btn-danger">
                            <i class="bi bi-trash3-fill"></i>
                        </a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="../public/script.js"></script>

    <?php
        include_once "layout/footer.php";
    ?>
</body>
</html>