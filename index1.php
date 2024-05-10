<!DOCTYPE html>
<html>
<head>
    <title>CRUD de CLIENTES</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    <a href="cadastroclie.php">Adicionar Novo Cliente</a>
    <?php
        require ('conexao.php');

        // Função para listar todos os registros do banco de dados
        function listarRegistros($pdo) {
        $sql = "SELECT * FROM clientes";
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
                    <th>Cpf</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    
                </tr>";
            foreach ($registros as $registro) {
                echo "<tr>";
                echo "<td>" . $registro['cliente_id'] . "</td>";
                echo "<td>" . $registro['nome'] . "</td>";
                echo "<td>" . $registro['cpf'] . "</td>";
                echo "<td>" . $registro['email'] . "</td>";
                echo "<td>" . $registro['telefone'] . "</td>";
                echo "<td>
                    <a href='edit1.php?id=" . $registro['cliente_id'] . "'>Editar</a>
                    <a href='deleteclie.php?id=" . $registro['cliente_id'] . "'>Excluir</a>
                </td>";
                }
                echo "</tr>";
            echo "</table>";
    ?>
</body>
</html>
