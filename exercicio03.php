<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 - Positivo, negativo ou zero</title>
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

            if ($numero == 0) {
                echo "O número é 0";
            } else if ($numero > 0) {
                echo "O número $numero é positivo";
            } else {
                echo "O número $numero é negativo";
            }
        }
    }


    ?>
</body>

</html>