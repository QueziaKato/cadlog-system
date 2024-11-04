<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4; /* Fundo da página */
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: #fff; /* Fundo branco */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        .btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            color: #fff; /* Cor do texto do botão */
            background-color: #E6E6FA; /* Roxo lavanda */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s; /* Animação suave ao passar o mouse */
        }

        .btn:hover {
            background-color: #D8BFD8; /* Cor ao passar o mouse */
        }
    </style>
</head>
 
<body class="<?=$_SESSION['perfil']?>"> <!-- Define a classe com base no perfil -->
    <div class="container">
        <h1>Bem-vindo, <?=$_SESSION['perfil']?>!</h1>
        <p>Esta é a visão do perfil <?=$_SESSION['perfil']?>.</p>

        <?php if($_SESSION['perfil'] == 'admin'): ?>
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Admin)</a>
        <?php elseif($_SESSION['perfil'] == 'gestor'): ?>
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Gestor)</a>
            <p>Área exclusiva do Gestor.</p>
        <?php else: ?>
            <p>Área exclusiva do Colaborador.</p>
        <?php endif; ?>
 
        <br><br><br><br>
        <a href="index.php?action=logout" class="btn">Logout</a>
    </div>
</body>
 
</html>

