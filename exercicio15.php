<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 15 - Calculadora de IMC</title>
</head>

<body>
    <form method="POST">
        <label for="peso">Digite seu peso (em kg):</label>
        <input type="number" id="peso" name="peso" required>
        <br>
        <label for="altura">Digite sua altura (em metro):</label>
        <input type="float" id="altura" name="altura" required>
        <br>
        <button type="submit" name="enviar">Enviar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['enviar'])) {
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            $imc = $peso / ($altura * $altura);

            if ($imc < 18.5) {
                echo "Seu IMC é $imc, sua categoria é: baixo peso";
            } else if ($imc >= 18.5 && $imc <= 24.9) {
                echo "Seu IMC é $imc, sua categoria é: peso normal";
            } else if ($imc >= 25 && $imc <= 29.9) {
                echo "Seu IMC é $imc, sua categoria é: sobrepeso";
            } else {
                echo "Seu IMC é $imc, sua categoria é: obesidade";
            }
        }
    }
    ?>
</body>

</html>