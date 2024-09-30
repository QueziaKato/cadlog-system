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
            background-color: #f0f4f8; /* Fundo claro e suave */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        div {
            background: linear-gradient(135deg, #6a11cb, #2575fc); /* Gradiente bonito */
            border-radius: 15px; /* Bordas arredondadas mais acentuadas */
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 320px;
            color: white; /* Texto em branco */
        }

        h2 {
            text-align: center;
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
            border: none; /* Remove bordas */
            border-radius: 5px;
            transition: all 0.3s;
        }

        input:focus, select:focus {
            border: 2px solid #ffdd57; /* Cor ao focar */
            outline: none;
        }

        button {
            padding: 12px;
            background-color: #ffdd57; /* Cor amarela vibrante */
            color: #333; /* Texto escuro */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: #ffd700; /* Cor amarela mais escura ao passar o mouse */
            transform: scale(1.05); /* Aumenta levemente o botão */
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #ffdd57; /* Cor amarela */
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
            color: #ffd700; /* Cor do link ao passar o mouse */
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

