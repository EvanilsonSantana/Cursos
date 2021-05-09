<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/estilo.css">
    <title>Aula5</title>
</head>
<body>
    <header>
        <h1>Operadores e valores da URL</h1>
    </header>
    <section>
        <div>
            <?php 
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                echo "<h2>Valores recebidos: $n1 e $n2</h2>";
                echo "A soma vale: ".($n1+$n2);
                echo "<br/> A subtracao vale: ". ($n1-$n2);
                echo "<br/> A multiplicacao vale: ". ($n1*$n2);
                echo "<br/> A divisao vale: ".($n1/$n2);
                echo "<br/> O modulo vale: ". ($n1%$n2);
                

                

            ?>
        </div>
    </section>
</body>
</html>