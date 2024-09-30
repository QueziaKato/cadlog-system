<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <style>
        /* Reset básico */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f9fc; /* Fundo suave e claro */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        div {
            background: white; /* Fundo branco para o formulário */
            border-radius: 15px; /* Bordas arredondadas */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 320px;
            color: #333; /* Texto escuro para contraste */
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #6a11cb; /* Cor do título */
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select {
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ced4da; /* Bordas suaves */
            border-radius: 5px;
            transition: all 0.3s;
        }

        input:focus, select:focus {
            border-color: #6a11cb; /* Cor ao focar */
            outline: none;
        }

        button {
            padding: 12px;
            background-color: #6a11cb; /* Cor roxa */
            color: white; /* Texto branco */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: #5a0db1; /* Cor mais escura ao passar o mouse */
            transform: scale(1.05); /* Aumenta levemente o botão */
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #6a11cb; /* Cor roxa */
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
            color: #5a0db1; /* Cor do link ao passar o mouse */
        }
    </style>
</head>

<body>
    <div>
        <h2>Cadastro de usuário</h2>
        <form action="" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>

            <label for="perfil">Perfil:</label>
            <select name="perfil" id="perfil">
                <option value="admin">Admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
            </select>
            <button type="submit">Cadastrar</button>
        </form>
        <a href="">Voltar ao Login</a>
    </div>
</body>

</html>
