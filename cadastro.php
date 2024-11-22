<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../image/favicon.png">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="Cadastro">
        <img src="https://icons.iconarchive.com/icons/iconarchive/dogecoin-to-the-moon/128/Dogecoin-on-Moon-icon.png"><br><br>
        <h2>Cadastro de Usuario</h2><br>
        <form action="cad.php" method="POST">

            <input type="email" placeholder="Email" name="email"><br><br>

            <input type="text" placeholder="Nome" name="nome"><br><br>

            <input type="password" placeholder="Senha" name="senha"><br><br>
            <button type="submit" class="botaoenviar">Cadastrar</button><br><br>

        </form>
        <a href="index.php">Login Usuario</a>
    </div>
</body>
</html>