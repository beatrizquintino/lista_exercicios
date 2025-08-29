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
        <input type="number" id="dia" name="dia" required>
        <br>
        <button type="submit" name="enviar">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['enviar'])) {
            $nome = $_POST['nome'];
        }
    }
    ?>
</body>

</html>