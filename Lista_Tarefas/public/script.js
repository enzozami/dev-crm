function criarTarefa(){
    const inputTitulo = document.getElementById("titulo");
    const inputDescricao = document.getElementById("descricao");
    const inputData = document.getElementById("dataCriacao");
    const inputUsuario = document.getElementById("usuario");

    // Aplicação do trim
    const titulo = inputTitulo.value.trim();
    const descricao = inputDescricao.value.trim();
    const data = inputData.value;
    const usuario = inputUsuario.value.trim();  

    //Validação
    if (titulo === "") {
      alert("Preencha o campo Título!");
      return;
    }

    if (descricao === "") {
      alert("Preencha o campo Descrição!");
      return;
    }

    if (usuario === "") {
      alert("Preencha o campo Usuário!");
      return;
    }

    if (data === "") {
      alert("Selecione uma data!");
      return;
    }

    // Atualiza os valores dos inputs com o .trim()
    inputTitulo.value = titulo;
    inputDescricao.value = descricao;
    inputUsuario.value = usuario;

     // Envia o formulário manualmente
    document.querySelector("form").submit();
}