<?php
/* COnexao com bd usando PDO : PDO permite acessar qualquer bancode de dados. */

$host = 'localhost';
$dbname = 't57_login';
$usuario = 'root';
$senha = '';


$conn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try{
    // Cria a conexão
    $conexao = new PDO($conn,$usuario,$senha);

    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    

}catch(PDOException $e){
    die("Erro de conexao" .$e->getMessage());
}

?>