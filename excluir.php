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