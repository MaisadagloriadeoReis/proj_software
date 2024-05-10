<?php
require ('conexao.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Função para listar todos os registros do banco de dados
    function listarRegistros($pdo, $id) {
        $sql = "SELECT * FROM pedidos WHERE id_pedido = $id";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        // Listar registros
        $registros = listarRegistros($pdo, $id);
        foreach ($registros as $registro) {
            if ($registro['id_pedido'] == $id) {
                $aux = true;
            }
        }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Pedido</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <?php if (isset($aux)) : ?>
        <form action="updatepedi.php" method="post">
            <input type="hidden" name="id_pedido" value="<?php echo $registro['id_pedido']; ?>">
            <label>Nome:</label>
            <input type="text" name="nome" value="<?php echo $registro['nome']; ?>" required>
            <br>
            <label>Número:</label>
            <input type="number" name="numero" value="<?php echo $registro['numero']; ?>" required>
            <br>
            <label>Empresa:</label>
            <input type="text" name="empresa" value="<?php echo $registro['empresa']; ?>" required>
            <br>
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $registro['email']; ?>" required>
            <br>
            <input type="submit" value="Salvar">
        </form>
    <?php else : ?>
        <p>Pedido não encontrado.</p>
    <?php endif; ?>
</body>
</html>