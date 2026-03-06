<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Aula 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Indice de massa corporal</h1>
                <form action="recebeDados1.php" method="post">
                    <div class="mb-3">
                        <label for="peso" class="form-label">Seu peso (KG):</label>
                        <input type="number" class="form-control" min="0" id="peso" name="txtpeso" placeholder="0">
                    </div>
                    <div class="mb-3">
                        <label for="altura" class="form-label">Sua altura:</label>
                        <input type="number" step="0.01" min="0" class="form-control" id="altura" name="txtaltura" placeholder="0">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-outline-primary">Enviar</button>
                        <button type="reset" class="btn btn-outline-danger">Limpar</button>
                    </div>
                </form>
            </div>





            <div class="col-4">
                <form action="recebeDados2.php" method="post">
                    <h1>Locadora de veículos</h1>
                    <h6>Qual a classificação do seu carro?</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="popular" id="popular" name="tipo">
                        <label class="form-check-label" for="popular">
                            Popular
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="luxo" id="luxo" name="tipo">
                        <label class="form-check-label" for="luxo">
                            Luxo
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="aluguel" class="form-label">Por quantos dias você alugou o carro?</label>
                        <input type="number" class="form-control" min="0" id="aluguel" name="diasaluguel" placeholder="0">
                    </div>
                    <div class="mb-3">
                        <label for="percurso" class="form-label">Quantos Km você percorreu?</label>
                        <input type="number" step="0.01" min="0" class="form-control" id="percurso" name="kmpercorrido" placeholder="0">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-outline-primary">Enviar</button>
                        <button type="reset" class="btn btn-outline-danger">Limpar</button>
                    </div>
                </form>
            </div>







            <div class="col-4">
                <h1>Calculadora de recompensas</h1>
                <form action="recebeDados3.php" method="post">
                    <div class="mb-3">
                        <label for="horasatv" class="form-label">Quantas horas de atividade física você fez?</label>
                        <input type="number" class="form-control" min="0" id="horasatv" name="horas" placeholder="0">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-outline-primary">Enviar</button>
                        <button type="reset" class="btn btn-outline-danger">Limpar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>