<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Aula11</title>
</head>
<body>
    <header>
        <h1>Fatorial</h1>
    </header>
    <section>
        <div>
            <?php
                
                $v = $_GET["val"];
                $c = $v;
                $fat = 1;
                do {
                    $fat = $fat * $c;
                    $c--;
                }while($c >= 1);
                
                echo "<h2> $v = $fat<h2/>"
            ?>
            <p><a href="while.html" class="botao">Voltar</a></p>
        </div>
    </section>
</body>
</html>