### Descrição do Projeto: Cad-log System !

O Cad-log System é uma aplicação desenvolvida em sala de aula para gerenciar o cadastro de usuários em diferentes perfis: Admin, Gestor e Colaborador. Com foco na segurança e eficiência, a aplicação permite que os usuários façam login, cadastrem novos usuários e gerenciem informações de forma prática e intuitiva.

---

### Funcionalidades ✨

- **Cadastro de Usuários**: Criação de novos usuários com informações como nome, email, senha e perfil. 📝
- **Login de Usuários**: Autenticação segura com validação de credenciais. 🔐
- **Perfis de Usuários**: Três tipos de perfis com diferentes permissões: Admin, Gestor e Colaborador. 👥
- **Interface Intuitiva**: Tela de login e cadastro com design responsivo e acessível. 📱
- **Campo de Nome**: O usuário insere seu nome completo.
- **Campo de Email**: O usuário fornece um endereço de email único. ✉️ 
- **Campo de Senha**: O usuário cria uma senha. 🔒 
- **Campo de Confirmação de Senha**: O usuário repete a senha para confirmação. ✔️
- **Botão de Cadastrar**: Ao clicar, o sistema valida os dados e cria a conta. 👍🏻
---

### Estrutura de Arquivos Importantes 📂

#### Descrição dos Arquivos

- **authcontroller.php**: Lógica de autenticação, gerenciando login e logout, validando credenciais e controlando acesso. 🔑
  
- **usercontroller.php**: Gerencia operações relacionadas aos usuários, como criação, atualização e remoção, interagindo com o modelo User. ⚙️
  
- **database.php**: Configura a conexão com o banco de dados, contendo credenciais e configurações para o MySQL. 🗄️
  
- **user.php**: Modelo da entidade User, definindo propriedades e métodos para validação de dados e interações com o banco de dados. 🧑‍💻
  
- **login.php**: Vista que exibe o formulário de login, permitindo a entrada de credenciais. 📄
  
- **register.php**: Vista responsável pelo registro de novos usuários, com formulário de cadastro. ✍️
  
- **index.php**: Ponto de entrada da aplicação, processando requisições e redirecionando usuários. 🚪
  
- **routes.php**: Define rotas da aplicação, mapeando URLs para controladores e funções específicas. 🗺️
  
- **database.sql**: Estrutura do banco de dados e instruções para criação de tabelas necessárias. 📊

---

Esse projeto visa facilitar a gestão de usuários de forma organizada e segura, garantindo uma experiência fluida para todos os perfis. 🌟
 
 ### Imagem :
![imagem](img/login.png.png) 
![imagem](img/register.png.png)
![imagem](img/tela_dashboard.png)

### Fontes Consultadas 📚

1. **Documentação do PHP**:
   - [PHP Manual](https://www.php.net/manual/pt_BR/index.php) - Para entender funções e práticas recomendadas no PHP, incluindo conceitos de autenticação e gerenciamento de usuários.

2. **Documentação do MySQL**:
   - [MySQL Documentation](https://dev.mysql.com/doc/) - Recursos sobre configuração do banco de dados, comandos SQL e práticas de modelagem.

3. **MDN Web Docs**:
   - [MDN Web Docs](https://developer.mozilla.org/pt-BR/) - Para informações sobre desenvolvimento web, incluindo JavaScript e práticas de criação de interfaces.

4. **Artigos e Tutoriais**:
   - [W3Schools](https://www.w3schools.com/) - Tutoriais sobre PHP, HTML e SQL, que podem ter ajudado na compreensão das interações entre a aplicação e o banco de dados.

5. **Livros**:
   - "PHP & MySQL: Novice to Ninja" - Um guia prático que cobre a construção de aplicações web com PHP e MySQL.
   - "Learning PHP, MySQL & JavaScript" - Outro recurso útil para o desenvolvimento web.

6. **Comunidades de Desenvolvimento**:
   - [Stack Overflow](https://stackoverflow.com/) - Para discussões e soluções sobre problemas específicos relacionados a PHP e MySQL.

Essas fontes podem ajudar a validar e enriquecer suas descrições sobre a estrutura da aplicação e os conceitos utilizados no desenvolvimento do Cad-log System.

 ### ➡️ Como executar
1. Clone este repositório.
2. Instale as dependências necessárias utilizando o comando [inserir comando].
3. Execute o projeto utilizando o comando [inserir comando].
### ✅ Contribuição
Contribuições são bem-vindas! Se você quiser colaborar com este projeto, siga os passos abaixo:
1. Faça um fork deste repositório.
2. Crie uma branch para a sua feature (`git checkout -b minha-feature`).
3. Faça commit das suas alterações (`git commit -m 'Adicionando nova funcionalidade'`).
4. Faça push para a branch criada (`git push origin minha-feature`).
5. Abra um Pull Request.

### Dashboard do Projeto

### Versão Atual: Release [2.0]

### Melhorias Implementadas
- Adicionada estilização à dashboard para uma melhor experiência do usuário.
- Diferenciação visual baseada no perfil do usuário.

### Como Usar
- Acesse a dashboard de acordo com seu perfil.
- Admins podem gerenciar usuários (editar e excluir).
- Gestores podem editar usuários.
- Colaboradores têm acesso restrito.

### Comandos para Execução
- Para iniciar o projeto, execute `php -S localhost:8000`.


### ✒️ Autores
| [<img loading="lazy" src="https://avatars.githubusercontent.com/u/130574133?v=4" width=115><br><sub>Quezia Kato</sub>](https://github.com/QueziaKato) |
|[<img loading="lazy" src="https://avatars.githubusercontent.com/u/86802310?v=4" width=115><br><sub>Leonardo Rocha</sub>](https://github.com/LeonardoRochaMarista) | 