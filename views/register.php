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
            background-color: #e9ecef; /* Cor de fundo suave */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        div {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #343a40; /* Cor do título */
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select {
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ced4da; /* Bordas mais suaves */
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        input:focus, select:focus {
            border-color: #495057; /* Cor ao focar */
            outline: none;
        }

        button {
            padding: 12px;
            background-color: #007bff; /* Cor azul */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3; /* Cor ao passar o mouse */
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
            color: #0056b3; /* Cor do link ao passar o mouse */
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
