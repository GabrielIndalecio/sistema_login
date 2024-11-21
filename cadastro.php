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
            color: white;
            
        }
        .Login{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.2);
            padding: 100px;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .Login input{
            padding: 15px;
            width: 85%;
            border-radius: 20px;
            border: none;
        }
        .botaoenviar{
            border-radius: 20px;
            padding: 10%;
            width: 100%;
            background-color: orange;
            border: none;
        }
        .botaoenviar:hover{
            background-color: darkorange;
        }
        
    </style>
    <title>Cadastro</title>
</head>
<body>
    <div class="Login">
        <h2>Cadastro de Usuario</h2>
        <form action="cad.php" method="POST">

            <input type="email" placeholder="Email" name="email"><br><br>

            <input type="password" placeholder="Senha" name="senha"><br><br>
            <button type="submit" class="botaoenviar">Cadastrar</button><br><br>

        </form>
        <a href="index.php">Login Usuario</a>
    </div>
</body>
</html>