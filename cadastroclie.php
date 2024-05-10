<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO CLIENTES</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php require ("conexao.php"); ?>

<div class="container">
    <h2>CADASTRO DE CLIENTES</h2>
    <form action ="createclie.php" method ="post">
        <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Informe o seu nome">
        <label>Cpf</label>
        <input type="text" class="form-control" name="cpf" placeholder="Informe o seu cpf">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Informe o seu email">
        <label>Telefone</label>
        <input type="tel" class="form-control" name="telefone" placeholder="Informe o seu Telefone">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</body>
</html>