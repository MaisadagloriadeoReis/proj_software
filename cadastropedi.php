<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO PEDIDOS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php require ("conexao.php"); ?>

<div class="container">
    <h2>CADASTRO DE PEDIDOS</h2>
    <form action ="createpedi.php" method ="post">
        <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Informe o nome do pedido">
        <label>Número do pedido</label>
        <input type="number" class="form-control" name="numero" placeholder="Informe o número do pedido">
        <label>Empresa</label>
        <input type="text" class="form-control" name="empresa" placeholder="Informe o nome da empresa">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Informe o email">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</body>
</html>