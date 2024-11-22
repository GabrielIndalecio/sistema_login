<?php

// Codigo para receber as informaçoes do HTML e fazer algo


include 'conexao.php';


// Verifica se existe alguma informação chegando pela rede


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = htmlspecialchars($_POST['email']); // Ele limpa os caracteres

    $nome = htmlspecialchars($_POST['nome']);

    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa com o melhor jeito.

    //var_dump($email);

    try{
        // Prepara o comando SQL para inserir no banco de dados
        // Utilizar o Prepared para preverir injetar SQL

        $smt = $conexao->prepare("INSERT INTO usuarios (email,nome,senha) VALUES (:email, :nome, :senha)");

        $smt->bindParam(":email",$email); //Vincula e limpa o EMAIL
        $smt->bindParam(":nome",$nome);
        $smt->bindParam(":senha",$senha);

        $smt->execute();

        echo "Cadastrado com sucesso!";
    }catch(PDOException $e){
        echo "Erro ao cadastrar o usuário: ",$e->getMessage();
    }
}