<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style.css">
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

        <div class="d-flex justify-content-end align-items-end my-1">
            <button type="submit" class="btn btn-expand-icon btn-outline-success my-1">
                <i class="bi bi-plus-lg"> <br> </i>
                <span class="text">Nova Tarefa</span>
            </button>
        </div>

        <table class="table table-dark table-striped">
            <thead class="table-dark">
                <th class="text-center">ID</th>
                <th class="text-center">Título</th>
                <th class="text-center">Descrição</th>
                <th class="text-center">Data de Criação</th>
                <th class="text-center">Usuário</th>
            </thead>

            <tbody>
                
            </tbody>
        </table>
    </div>
</body>
</html>