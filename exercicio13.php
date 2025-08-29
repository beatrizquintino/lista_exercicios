<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13 - Celsius para Fahrenheit</title>
</head>

<body>
    <form method="POST">
        <label for="celsius">Digite uma temperatura em graus Celsius:</label>
        <input type="number" id="celsius" name="celsius" required>
        <button type="submit" name="enviar">Enviar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['enviar'])) {
            $celsius = $_POST['celsius'];
            $fahrenheit = ($celsius * 9 / 5) + 32;

            echo "$celsius graus celsius equivale a $fahrenheit graus fahrenheit";
        }
    }
    ?>
</body>

</html>