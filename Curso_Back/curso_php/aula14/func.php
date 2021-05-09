<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Aula14</title>
</head>
<body>
    <header>
        <h1>Funções</h1>
    </header>
    <section>
        <div>
            <?php
                function soma() {
                    $p = func_get_args();
                    $t = func_num_args();
                    $s = 0;
                    for ($i = 0; $i < $t; $i++) {
                        $s += $p[$i];
                    }
                    return $s;
                }
                $r = soma(3, 6, 7, 8, 4, 6, 8);
                echo "A soma dos valores é: ". $r;
                
            ?>
        </div>
    </section>
</body>
</html>