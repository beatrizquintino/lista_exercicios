<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 07 - Número perfeito</title>
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
            $soma = 0;

            for ($i = 1; $i < $numero; $i++) {
                if ($numero % $i == 0) {
                    $soma += $i;
                }
            }

            if ($soma == $numero) {
                    echo "$numero é um número perfeito";
                } else {
                    echo "$numero não é um número perfeito";
                }
        }
    }
    ?>
</body>
</html>