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
            <h1>Locadora de veículos</h1>
            <?php
            $tipo = $_POST['tipo'];
            $diasAluguel = $_POST['diasaluguel'];
            $kmPercorrido = $_POST['kmpercorrido'];
            $valorTotal;

            if($tipo == "popular"){
                if($kmPercorrido<=100){
                    $valorTotal = (90*$diasAluguel)+(0.2*$kmPercorrido);
                }
                else{
                    $valorTotal = (90*$diasAluguel)+(0.1*$kmPercorrido);
                }
            }
            else{
                if($kmPercorrido<=200){
                    $valorTotal = (150*$diasAluguel)+(0.3*$kmPercorrido);
                }
                else{
                    $valorTotal = (150*$diasAluguel)+(0.25*$kmPercorrido);
                }
            }
            echo "O valor total a pagar é R$". number_format($valorTotal, 0.01, ".");
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>