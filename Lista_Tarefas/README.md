# ✅ Dev-CRM
## 🔐 Sistema de Gerenciamento de Tarefas

Bem-vindo(a)! Este é um sistema de gerenciamento de tarefas que permite a usuários autenticados cadastrar, listar, editar, excluir e filtrar tarefas. Cada usuário possui acesso exclusivo às suas próprias tarefas, promovendo segurança e organização individual.

O sistema foi desenvolvido com **PHP orientado a objetos**, **MySQL**, e segue uma estrutura simples de **MVC**.

---

## 📁 Estrutura do Projeto

```bash
dev-crm/
├── Lista_Tarefas/
│   ├── config/
│   │   └── database.sql    
│   │   └── connection.php
│   ├── controller/         
│   │   └── TarefaController.php
│   ├── models/
│   │   └── BuscarTarefaId.php    
│   │   └── Cadastrar.php   
│   │   └── Deletar.php    
│   │   └── Editar.php
│   │   └── Listar.php    
│   │   └── Tarefas.php
│   │   └── Usuario.php          
│   ├── Views/
│   │   └── home.php    
│   │   └── tarefas/
│   │   │   └── criarTarefa.php    
│   │   │   └── editarTarefa.php    
│   │   └── layout/
│   │   │   └── navBar.php    
│   │   │   └── footer.php              
│   ├── public/
│   │   └── index.php    
│   │   └── logout.php   
│   │   └── script.js    
│   │   └── style.css        
│   └── README.md
         
```

---

# ⚠️ Observação Importante sobre o Ambiente
## Este projeto foi desenvolvido e testado utilizando XAMPP com Apache como servidor web.

### ⚠️ O roteamento e o funcionamento correto do sistema dependem do comportamento padrão do Apache, especialmente no que diz respeito ao redirecionamento e leitura de caminhos de URL.

### Caso opte por executar este projeto em ambientes diferentes, como Docker com Nginx, é possível que ocorram problemas de roteamento, como:

- Falhas ao acessar páginas diretamente via URL
- Redirecionamentos incorretos

---

## 🧾 Requisitos

- PHP 7.4 ou superior
- MySQL ou MariaDB
- Servidor web (Apache via XAMPP/WAMP)

---

## ⚙️ Como Inicializar o Projeto

1. **Clone o repositório**

```bash
git clone https://github.com/enzozami/dev-crm.git
```

2. **Configure o banco de dados**

- No diretório `Lista_Tarefas/config/`, abra o arquivo `database.sql` e execute no seu gerenciador MySQL.

```sql
CREATE DATABASE bancocrm;
USE bancocrm;
-- (demais comandos estão no arquivo)
```

3. **Configure o ambiente**

- Se estiver usando XAMPP ou WAMP, mova a pasta do projeto para o diretório `htdocs`.

4. **Acesse via navegador**

```
http://localhost:8080/dev-crm/Lista_Tarefas/
```
(Substitua 8080 pela porta usada no seu ambiente local, se for diferente.)

5. **Login de Teste**

- Você pode inserir um novo usuário diretamente no banco ou utilizar o que script que já está disponível.

---

## 📌 Funcionalidades

- 🔐 **Login** com autenticação por sessão
- ➕ **Cadastro de tarefas**
- 📋 **Listagem de tarefas do usuário**
- 🖊️ **Edição de tarefas**
- ❌ **Exclusão de tarefas**
- 🔍 **Filtro por título**
- 👤 **Isolamento de dados por usuário**

---

## 🗃️ Banco de Dados

O banco de dados contém duas tabelas principais:

- `login`: armazena usuários (id, email, senha)
- `lista_tarefas`: armazena tarefas com FK para usuários

Relacionamento:
```sql
lista_tarefas.id_usuario → login.idUsuario
```

---

## 🧪 Exemplo de Uso

**Cadastrar uma tarefa**

- Acesse o sistema após login.
- Preencha o formulário com título e descrição.
- A tarefa será salva e aparecerá na lista.

**Editar uma tarefa**

- Clique em “Editar” ao lado de uma tarefa.
- Modifique os dados e salve.

**Excluir uma tarefa**

- Clique em “Excluir” e confirme a exclusão.

**Filtrar tarefas**

- Use o campo de busca para filtrar por título da tarefa.

---

## ✅ Requisitos Funcionais Atendidos

| Requisito                                        | Status |
|--------------------------------------------------|--------|
| CRUD completo de tarefas                         | ✅     |
| Login e restrição por usuário                    | ✅     |
| Filtro por título                                | ✅     |
| Banco de dados com FK e colunas obrigatórias     | ✅     |
| Uso de PHP, HTML, CSS, JS, SQL                   | ✅     |

---

### 🤝 Como Contribuir

1. Faça um fork do repositório.
2. Crie uma branch para sua modificação:
   ```bash
   git checkout -b melhoria-nome
   ```
3. Commit suas alterações:
   ```bash
   git commit -m "Descrição da melhoria"
   ```
4. Dê push para o repositório:
   ```bash
   git push origin melhoria-nome
   ```
5. Abra um Pull Request.

---

## 👨‍💻 Desenvolvido por Enzo Zamineli

## 📚 Sobre o Projeto e Aprendizado

Este projeto foi desenvolvido como parte do meu processo de aprendizado em **PHP** com foco em boas práticas de **Programação Orientada a Objetos (POO)** e introdução ao padrão arquitetural **MVC (Model-View-Controller)**.

Embora a estrutura ainda esteja em aprimoramento, estou estudando continuamente conceitos como:

- Separação de responsabilidades (Models, Views, Controllers)
- Segurança em login e manipulação de dados
- Boas práticas em SQL e integridade referencial
- Organização de código para projetos maiores

Meu objetivo é evoluir esse projeto com melhorias progressivas, como:

- Adoção completa do padrão MVC
- Validações mais robustas
- Uso de Composer e namespaces
- Integração com frameworks (como Laravel) futuramente

Este projeto representa um marco importante na minha jornada de aprendizado como desenvolvedor PHP.