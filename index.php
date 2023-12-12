<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pedidos</title>
</head>
<body>
    <h1>Meus Pedidos</h1>
    <form action="salvar.php" method="post">
        <label for="data">Data: </label><input type="datetime-local" name="data" id="data">
        <label for="cliente">Cliente: </label><input type="text" name="cliente" id="cliente">
        <label for="produto">Produto: </label><input type="text" name="produto" id="produto">
        <label for="valor">Valor: </label><input type="number" name="valor" id="valor">
        <input type="submit" value="Salvar">
    </form>
    <hr>
</body>
</html>