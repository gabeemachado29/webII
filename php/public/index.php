<?php include '/var/www/scripts/controllers/DB.php'; ?>
<?php include '/var/www/scripts/database/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP!!</title>

</head>
<body>
        <h1>Aula 2 PHP</h1>

        <form action="DB.php" method="post"> 
            Nome: <input type="text" name="nome"><br> 
            Idade: <input type="number" name="idade"><br>  
            <button type="submit">Enviar</button> 
        </form> 

        <table>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
            </tr>
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
        </table>

</body>
</html>
