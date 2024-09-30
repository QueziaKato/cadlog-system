<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
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

        main {
            background: white; /* Fundo branco para o formulário */
            border-radius: 15px; /* Bordas arredondadas */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 320px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #6a11cb; /* Cor do título */
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ced4da; /* Bordas suaves */
            border-radius: 5px;
            transition: all 0.3s;
        }

        input:focus {
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
    <main>
        <h2>Entrar</h2>
        <form method="post" action="index.php?action=login">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Login</button>
        </form>
        <a href="index.php?action=register">Cadastrar-se</a>
    </main>
</body>

</html>

