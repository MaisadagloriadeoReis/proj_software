<!DOCTYPE html>
<html>
<head>
    <title>CRUD de PEDIDOS</title>
</head>
<body>
    <h1>Lista de Pedidos</h1>
    <a href="cadastropedi.php">Adicionar Novo Pedido</a>
    <?php
        require ('conexao.php');

        // Função para listar todos os registros do banco de dados
        function listarRegistros($pdo) {
        $sql = "SELECT * FROM pedidos";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        // Listar registros
        $registros = listarRegistros($pdo);
            // Exibindo os dados em uma tabela
            echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Numero</th>
                    <th>Empresa</th>
                    <th>Email</th>
                     
                </tr>";
            foreach ($registros as $registro) {
                echo "<tr>";
                echo "<td>" . $registro['id_pedido'] . "</td>";
                echo "<td>" . $registro['nome'] . "</td>";
                echo "<td>" . $registro['numero'] . "</td>";
                echo "<td>" . $registro['empresa'] . "</td>";
                echo "<td>" . $registro['email'] . "</td>";
                echo "<td>
                    <a href='edit2.php?id=" . $registro['id_pedido'] . "'>Editar</a>
                    <a href='deletepedi.php?id=" . $registro['id_pedido'] . "'>Excluir</a>
                </td>";
                }
                echo "</tr>";
            echo "</table>";
    ?>
</body>
</html>