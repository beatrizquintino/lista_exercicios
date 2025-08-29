<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 14 - Ano Bissexto</title>
</head>

<body>
    <form method="POST">
        <label for="ano">Digite um ano:</label>
        <input type="number" id="ano" name="ano" required>
        <button type="submit" name="enviar">Enviar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['enviar'])) {
            $ano = $_POST['ano'];
            if ($ano % 4 == 0) {
                echo "$ano é um ano bissexto";
            } else {
                echo "$ano não é um ano bissexto";
            }
        }
    }
    ?>
</body>

</html>