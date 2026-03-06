<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <h1>Indice de Massa Corporal (IMC)</h1>
            <?php
            $peso = $_POST['txtpeso'];
            $altura = $_POST['txtaltura'];
            $imc = $peso / ($altura * $altura);

            echo "Seu imc é " . number_format($imc, 2, ",", ".") . "<br>";

            if ($imc < 18.5) {
                echo "Você está abaixo do peso!";
            }
            if ($imc >= 18.5 && $imc < 25) {
                echo "Você está no peso ideal!";
            }
            if ($imc >= 25 && $imc < 30) {
                echo "Você está em sobrepeso!";
            }
            if ($imc >= 30 && $imc < 40) {
                echo "Você está !";
            }
            if ($imc >= 40) {
                echo "Você está abaixo do peso!";
            }
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>