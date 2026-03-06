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
            <h1>Calculadora de recompensas</h1>
            <?php
            $horasatv = $_POST['horas'];
            $pontos;
            $saldo;

            if($horasatv<10){
                $pontos = $horasatv*2;
                $saldo = $horasatv*$pontos;
            }
            if($horasatv>=10 && $horasatv<20){
                $pontos = $horasatv*5;
                $saldo = $horasatv*$pontos;
            }
            if($horasatv>20){
                $pontos = $horasatv*10;
                $saldo = $horasatv*$pontos;
            }
            echo "Você possui $pontos pontos<br>";
            echo "Seu saldo é R$". number_format($saldo, 0.01, ".");

            ?>
        </div>
    </div>    






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>