function excluirTarefa(id, titulo){
    let remover = confirm("Deseja excluir a tarefa: " + titulo + ".");

    if(remover){
        window.location.href="../controller/TarefaController.php?acao=excluir&id=" + id;
    }
}