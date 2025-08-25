<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04 - Cálculo de fatorial</title>
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

            $fatorial = 1;

            for ($i = 1 ; $i  <= $numero ; $i++){
                $fatorial *= $i . "" . PHP_EOL;
            }
        }

        echo "O fatorial de $numero é: <strong>$fatorial</strong>";
    }

    
    ?>
</body>

</html>