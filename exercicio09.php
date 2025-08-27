<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 09 - Soma dos números</title>
</head>

<body>
    <form method="POST">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br>
        <label for="numero1">Digite o segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br>
        <button type="submit" name="enviar">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['enviar'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $soma1 = 0;
            $soma2 = 0;
            $somaTotal = 0;

            for ($i = 1; $i <= $numero1; $i++) {
                $soma1 += $i;
            }

            for ($i = 1; $i <= $numero2; $i++) {
                $soma2 += $i;
            }

            $somaTotal = $soma1 + $soma2;
            echo "A soma do intervalo de 1 a $numero1 e 1 a $numero2 é: $somaTotal";
        }
    }
    ?>