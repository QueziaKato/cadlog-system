# cadlog-system
Cad-log System
## Descrição do Projeto
O Cad-log System é uma aplicação desenvolvida durante as aulas com o objetivo de gerenciar o cadastro de usuários em diferentes perfis: Admin, Gestor e Colaborador. A aplicação permite que os usuários façam login, cadastrem novos usuários e gerenciem informações de forma segura e eficiente.

## Funcionalidades
Cadastro de Usuários: Permite a criação de novos usuários com informações como nome, email, senha e perfil.
Login de Usuários: Autenticação de usuários com validação de credenciais.
Perfis de Usuários: Três tipos de perfis com diferentes permissões: Admin, Gestor e Colaborador.
Interface Intuitiva: Tela de login e cadastro com design responsivo e acessível.

Claro! Vamos adicionar uma seção ao README explicando a finalidade de cada um dos arquivos mencionados. Aqui está a atualização:

---

## Estrutura de Arquivos Importantes

### Descrição dos Arquivos

- **`authcontroller.php`**: Este arquivo contém a lógica de autenticação da aplicação. Ele gerencia o login e logout dos usuários, validando as credenciais e controlando o acesso às diferentes áreas da aplicação.

- **`usercontroller.php`**: Responsável por gerenciar as operações relacionadas aos usuários, como criação, atualização e remoção de usuários. Ele interage com o modelo `User` para realizar essas ações.

- **`database.php`**: Este arquivo configura a conexão com o banco de dados. Ele contém as credenciais e configurações necessárias para que a aplicação consiga se conectar ao banco de dados MySQL.

- **`user.php`**: O modelo que representa a entidade `User`. Este arquivo define as propriedades e métodos relacionados aos usuários, como validação de dados e interações com o banco de dados.

- **`login.php`**: A vista que exibe o formulário de login para os usuários. Ele permite que os usuários insiram suas credenciais e acessem a aplicação.

- **`register.php`**: A vista responsável pelo registro de novos usuários. Este arquivo contém o formulário que permite aos novos usuários se cadastrarem na aplicação.

- **`index.php`**: O ponto de entrada da aplicação. Este arquivo processa as requisições e redireciona os usuários para as vistas apropriadas com base nas ações solicitadas (como login ou registro).

- **`routes.php`**: Define as rotas da aplicação, mapeando URLs específicas para seus respectivos controladores e funções. Ele é essencial para organizar a navegação da aplicação.

- **`database.sql`**: Um arquivo SQL que contém a estrutura do banco de dados e as instruções para a criação das tabelas necessárias para armazenar os dados dos usuários e outras informações da aplicação.

---