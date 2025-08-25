<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 - Tabuada</title>
</head>

<body>
    <form method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="calcular_tabuada">Calcular a tabuada</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['calcular_tabuada'])) {
            $numero = $_POST['numero'];
            echo "<p>A tabuada do <strong>$numero</strong> é:</p>";
            for ($i=1 ; $i<=10; $i++){
                echo "" . $numero*$i . "" . PHP_EOL;
            }
        }
    }

 
    ?>
</body>

</html>