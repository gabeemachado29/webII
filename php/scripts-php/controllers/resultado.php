<?php 
// require_once 'var/www/scripts/database/config.php';
    
if (isset($_POST['nome']) && isset($_POST['idade']) && is_array($_POST)){
    $nome = $_POST['nome']; 
    $idade = $_POST['idade'];
}

$database = new DB();

$conn = $database->getConnection();
$query = "INSERT INTO pessoas (nome, idade) VALUES (?, ?)";
$stmt
    = $conn->prepare($query);

    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $idade);
    $result = $stmt->execute();

echo $result;

$pessoas = [
    ['nome' => 'Alice', 'idade' => 30],

];

?>