<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 08 - Números pares no intervalo</title>
</head>

<body>
    <form method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="enviar">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['enviar'])) {
            $numero = $_POST['numero'];

            for ($i = 1; $i <= $numero; $i++) {
                if ($i % 2 == 0) {
                    echo $i . "<br>";
                }
            }
        }
    }
    ?>
</body>

</html>