<?php
require_once '/var/www/scripts/database/config.php';

$database = new DB();
$conn = $database->getConnection();

// INSERIR NOVA PESSOA
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    $query = "INSERT INTO pessoas (nome, idade) VALUES (?, ?)";
    $stmt = $conn->prepare($query);

    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $idade);

    if ($stmt->execute()) {
        // Redireciona após o cadastro (evita reenvio no refresh)
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "<div class='alert alert-danger'>Erro ao cadastrar pessoa.</div>";
    }
}

// BUSCAR PESSOAS CADASTRADAS
$pessoas = [];
$query = "SELECT nome, idade FROM pessoas";
$stmt = $conn->prepare($query);
$stmt->execute();

$pessoas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>