<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>