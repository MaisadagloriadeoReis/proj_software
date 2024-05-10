<?php
require('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $numero = $_POST["numero"];
    $empresa = $_POST["empresa"];
    $email = $_POST["email"];
    
    

    if (inserirRegistro($nome, $numero, $empresa, $email)) {
        echo "Registro inserido com sucesso! <br><a href='index2.php'>HOME</a>";
    } else {
        echo 'Erro ao inserir o registro.';
    }
}

function inserirRegistro($nome, $numero, $empresa, $email) {
    global $pdo;
    try {
        $sql = "INSERT INTO pedidos (nome, numero, empresa, email) VALUES (:nome, :numero, :empresa, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':numero', $numero, PDO::PARAM_STR);
    $stmt->bindParam(':empresa', $empresa, PDO::PARAM_STR); 
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);   
    } catch (\Throwable $th) {
        //throw $th;
    }
   
    return $stmt->execute();
}

?>