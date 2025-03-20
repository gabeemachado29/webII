<?php include '/var/www/scripts/aula01.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP!!</title>
    
    <!-- Adicionando o link do Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <div class="container mt-5">
        <h1>Aula 2 PHP</h1>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    //echo var_dump($pessoas);
                    if (isset($pessoas) && is_array($pessoas)) {
                        foreach($pessoas as $pessoa) {
                            echo "<tr>";
                            echo "<td>".$pessoa['nome']."</td>";
                            echo "<td>".$pessoa['idade']."</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Nenhuma pessoa cadastrada.</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Adicionando o script do Bootstrap JS (opcional para interatividade) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
