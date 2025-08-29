<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 16 - Pode votar?</title>
</head>

<body>
    <form method="POST">
        <label for="nome">Informe seu nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="idade">Informe a sua idade:</label>
        <input type="number" id="idade" name="idade" required>
        <br>
        <button type="submit" name="enviar">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['enviar'])) {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            if ($idade >= 16) {
                echo "<p>$nome, você pode votar</p>";
            } else {
                echo "<p>$nome, você não pode votar</p>";
            }
        }
    }
    ?>
</body>

</html>