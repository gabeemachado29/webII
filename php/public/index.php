<?php require_once '/var/www/scripts/controllers/resultado.php'; ?>
<?php require_once '/var/www/scripts/database/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP!!</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Cadastro de Pessoas</h1>

    <!-- Formulário -->
    <form action="index.php" method="post" class="mb-4">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="number" class="form-control" id="idade" name="idade" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <!-- Tabela -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($pessoas) && is_array($pessoas) && count($pessoas) > 0) {
                    foreach($pessoas as $pessoa) {
                        echo "<tr>";
                        echo "<td>".$pessoa['nome']."</td>";
                        echo "<td>".$pessoa['idade']."</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2' class='text-center'>Nenhuma pessoa cadastrada.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap JS e dependências -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
