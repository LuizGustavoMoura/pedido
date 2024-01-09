<?php
// Conectar ao banco de dados usando PDO
$host = 'localhost';
$dbname = 'pedidos';
$username = 'root';
$password = '';
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
} catch (PDOException $e) {
    die ("Erro ao conectar ao banco de dados".$e->getMessage());
}
// Verificar o parâmetro do ID
if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit();
}
// Obter os dados do pedido
$id = $_GET['id'];
// Buscar os pedidos na base de dados
$sql = "SELECT * FROM pedidos WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();
$pedido = $stmt->fetch();
// Verificar se os dados do pedido estão corretos
if (!$pedido) {
    header('Location: index.php');
    exit();
}
// Excluir o pedido da tabela pedidos
$sql = "DELETE FROM pedidos WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();
// Redirecionar para a página principal após excluir o pedido
header('Location: index.php');
exit();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>