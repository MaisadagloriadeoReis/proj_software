<?php
require ('conexao.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Função para listar todos os registros do banco de dados
    function listarRegistros($pdo, $id) {
        $sql = "SELECT * FROM clientes WHERE cliente_id = $id";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        // Listar registros
        $registros = listarRegistros($pdo, $id);
        foreach ($registros as $registro) {
            if ($registro['cliente_id'] == $id) {
                $aux = true;
            }
        }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <?php if (isset($aux)) : ?>
        <form action="updateclie.php" method="post">
            <input type="hidden" name="cliente_id" value="<?php echo $registro['cliente_id']; ?>">
            <label>Nome:</label>
            <input type="text" name="nome" value="<?php echo $registro['nome']; ?>" required>
            <br>
            <label>Cpf:</label>
            <input type="number" name="cpf" value="<?php echo $registro['cpf']; ?>" required>
            <br>
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $registro['email']; ?>" required>
            <br>
            <label>Telefone:</label>
            <input type="tel" name="telefone" value="<?php echo $registro['telefone']; ?>" required>
            <br>
            <input type="submit" value="Salvar">
        </form>
    <?php else : ?>
        <p>Cliente não encontrado.</p>
    <?php endif; ?>
</body>
</html>