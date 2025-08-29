<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 17 - Validar Data</title>
</head>

<body>
    <form method="POST">
        <label for="dia">Digite um dia:</label>
        <input type="number" id="dia" name="dia" required>
        <br>
        <label for="mes">Digite um mês:</label>
        <input type="number" id="mes" name="mes" required>
        <br>
        <label for="ano">Digite um ano:</label>
        <input type="number" id="ano" name="ano" required>
        <br>
        <button type="submit" name="enviar">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['enviar'])) {
            $dia = $_POST['dia'];
            $mes = $_POST['mes'];
            $ano = $_POST['ano'];

            if ($mes <= 12) {
                if ($mes = 1 || $mes = 3 || $mes = 5 || $mes = 7 || $mes = 8 || $mes = 10 || $mes = 12) {
                    if ($dia <= 31) {
                        echo "Data válida";
                    } else {
                        echo "Data inválida";
                    }
                } else if ($mes = 4 || $mes = 6 || $mes = 9 || $mes = 11) {
                    if ($dia <= 30) {
                        echo "Data válida";
                    } else {
                        echo "Data inválida";
                    }
                } else if ($mes = 2) {
                    if ($dia <= 29) {
                        echo "Data válida";
                    } else {
                        echo "Data inválida";
                    }
                }
            } else {
                echo "Data inválida";
            }
        }
    }
    ?>
</body>

</html>