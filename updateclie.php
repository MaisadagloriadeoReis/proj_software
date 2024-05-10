<?php
echo "Atualizando dados abaixo... <br>";
require ('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["cliente_id"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"]; 
    $tel = $_POST["telefone"]; 
    echo "<hr>";
 
    // Função para Atualizar o registro no banco de dados
    function atualizarRegistro($pdo, $id, $nome, $cpf, $tel, $email) {
        $sql = "UPDATE clientes SET nome = '$nome', cpf = '$cpf', email = '$email', telefone = '$tel' WHERE cliente_id = $id";
        $stmt = $pdo->prepare($sql);

        return $stmt->execute();
    }
}
if (atualizarRegistro($pdo,$id, $nome, $cpf, $tel, $email )) {
    echo "Registro atualizado com sucesso!<br>" . "<a href='index1.php'>HOME</a>";
} else {
    echo 'Erro ao inserir o registro.';
}

?>