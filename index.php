<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: gray;

        }
        .Login h2{
            padding: 20px;
            width: 100%;
            color: white;
            height: 30px;
        }
        .Login{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.2);
            padding: 100px;
            border-radius: 20px;
            width: 10%;
            height: 30%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            
            
        }
        .Login input{
            padding: 15px;
            width: 80%;
            border-radius: 20px;
        }
        .botaoenviar{
            border-radius: 20px;
            padding: 10%;
            width: 100%;
            background-color: orange;
            border: none;
        }
        .botaoenviar:hover{
            background-color: chocolate;
        }
        
    </style>
    <title>Login</title>
</head>
<body>
    <div class="Login">
        <h2>Login Usuario</h2>
        <form action="login_php" method="POST">
            <input type="email" placeholder="Email" name="email"><br><br>

            <input type="password" placeholder="Senha" name="senha"><br><br>
            <button type="submit" class="botaoenviar">Enviar</button><br><br>
        </form>
        <a href="cadastro.php">Cadastrar Usuario</a>
    </div>
</body>
</html>