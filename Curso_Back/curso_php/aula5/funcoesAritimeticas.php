<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Aula5</title>
    <style>
        h2 {
            font: 15pt Arial;
            font-weight: bold;
            color: #171559;
        }
    </style>
</head>

<body>
    <header>
        <h1>funções matematicas pré definidas</h1>
    </header>
    <section>
        <div>
            <!--
                Funções Matematicas pré definidas

                abs() - Valor absolugto
                pow() - eleva a potência
                sqrt()- Raiz quadrada
                round() - Arredondadmento
                intval() - Parte inteira de um numero real
                number_format() - formata um numero em moeda
            -->
            <?php 
              $v1 = $_GET["x"];
              $v2 = $_GET["y"];
              echo "<h2>Valores recebidos: $v1 e $v2</h2>";
              echo "O valor absoluto é: " . abs($v1)." ". abs($v2);
              echo "<br/>O valor de $v1<sup>$v2</sup> = ". pow($v1, $v2);
              echo "<br/>A raiz de $v1 = ". sqrt($v2);
              echo "<br/>O valor arredondado é: ". round($v2);
              echo "<br/>A parte inteira de $v2 é: ". intval($v2);
              echo "<br/>O valor de $v1 em moeda é: R$". number_format($v1, 2,",",".");
            ?>
        </div>
    </section>
</body>
</html>