<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 18 - Maior número</title>
</head>

<body>
    <form method="POST">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br>
        <label for="numero2">Digite o segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br>
        <label for="numero3">Digite o terceiro número:</label>
        <input type="number" id="numero3" name="numero3" required>
        <br>
        <button type="submit" name="enviar">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['enviar'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $numero3 = $_POST['numero3'];
            $maior = 0;

            if ($numero1 >= $numero2 && $numero1 >= $numero3) {
                $maior = $numero1;
                echo "O maior número é: " . $maior;
            } else if ($numero2 >= $numero1 && $numero2 >= $numero3) {
                $maior = $numero2;
                echo "O maior número é: " . $maior;
            } else {
                $maior = $numero3;
                echo "O maior número é: " . $maior;
            }
        }
    }
    ?>
</body>

</html>