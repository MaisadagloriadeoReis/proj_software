<?php
require('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $tel = $_POST["telefone"];
    

    if (inserirRegistro($nome, $cpf, $email, $tel)) {
        echo "Registro inserido com sucesso! <br><a href='index1.php'>HOME</a>";
    } else {
        echo 'Erro ao inserir o registro.';
    }
}

function inserirRegistro($nome, $cpf, $email, $tel) {
    global $pdo;
    try {
        $sql = "INSERT INTO clientes (nome, cpf, email, telefone) VALUES (:nome, :cpf, :email, :telefone)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':cpf', $cpf, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);  
    $stmt->bindParam(':telefone', $tel, PDO::PARAM_STR);  
    } catch (\Throwable $th) {
        //throw $th;
    }
   
    return $stmt->execute();
}

?>