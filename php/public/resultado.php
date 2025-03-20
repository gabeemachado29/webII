<?php 
    
    $nome = $_POST['nome']; 
    $idade = $_POST['idade']; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - PHP</title>
    
    <!-- Adicionando o link do Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <div class="container mt-5">
        <h1>Resultado do Formulário</h1>

        <div class="card">
            <div class="card-body">
                <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
                <p><strong>Idade:</strong> <?php echo htmlspecialchars($idade); ?></p>
            </div>
        </div>

    </div>

    <!-- Adicionando o script do Bootstrap JS (opcional para interatividade) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
