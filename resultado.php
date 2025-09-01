<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="main-container">
            <p>
                Nome do aluno: 
                <?php echo $_POST['nomeAluno']; ?>
            </p>
            <p>
                Matrícula:
                <?php echo $_POST['matricula']; ?>
            </p>
            <p>
                Média:
                <?php $calculo = ($_POST['n1'] + $_POST['n2']) / 2;
                echo $calculo;
                ?>
            </p>
            <p>
                Resultado:
                <?php
                $calculo = ($_POST['n1'] + $_POST['n2']) / 2;
                if ($calculo >= 7) {
                    $resultado = 'Aprovado';
                } else if ($calculo >= 4 and $calculo <= 6.9) {
                    $resultado = 'Prova Final';
                } else {
                    $resultado = 'Reprovado';
                }
                echo $resultado;
                ?>
            </p>
            <a href="http://localhost/formulario/formulario.html">Voltar</a>
        </div>
    </main>
</body>

</html>