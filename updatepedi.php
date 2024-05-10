<?php
echo "Atualizando dados abaixo... <br>";
require ('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id_pedido"];
    $nome = $_POST["nome"];
    $numero = $_POST["numero"];
    $empresa = $_POST["empresa"];   
    $email = $_POST["email"]; 
    echo "<hr>";
 
    // Função para Atualizar o registro no banco de dados
    function atualizarRegistro($pdo, $id, $nome, $numero, $empresa, $email) {
        $sql = "UPDATE pedidos SET nome = '$nome', numero = '$numero', empresa = '$empresa', email = '$email'  WHERE id_pedido = $id";
        $stmt = $pdo->prepare($sql);

        return $stmt->execute();
    }
}
if (atualizarRegistro($pdo, $id, $nome, $numero, $empresa, $email)) {
    echo "Registro atualizado com sucesso!<br>" . "<a href='index2.php'>HOME</a>";
} else {
    echo 'Erro ao inserir o registro.';
}

?>