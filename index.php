<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="image/favicon.png">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="Login">
        <img src="https://icons.iconarchive.com/icons/iconarchive/dogecoin-to-the-moon/128/Dogecoin-on-Moon-icon.png"> 
        <h2>Login Usuario</h2>
        <form action="login.php" method="POST">
            <input type="email" placeholder="Email" name="email"><br><br>

            <input type="password" placeholder="Senha" name="senha"><br><br>
            <button type="submit" class="botaoenviar">Enviar</button><br><br>
        </form>
        <a href="cadastro.php">Cadastrar Usuario</a>
    </div>
</body>
</html>