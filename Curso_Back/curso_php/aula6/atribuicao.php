<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/estilo.css">
    <title>Aula6</title>
    
</head>

<body>
    <header>
        <h1>Operadores de Atribuição</h1>
    </header>
    <section>
        <div>
            <?php 
                $ano = $_GET["aa"]; // Essa linha pega o ano na URL
                echo "O ano atual é $ano e o proximo ano é: ".  ++$ano;

                //Variáveis referenciadas
                $a = 3;
                $b = $a;
                $b += 5;
                echo "<br/>". $a;
                echo"<br/>". $b;
                $a = 3;
                $b = &$a;
                $b += 5;
                echo "<br/>".$a;
                echo "<br/>". $b;

                //Variaves variantes;

                $x = "ABC";
                $$x = "DEF";
                echo "<br/>O conteudo da variavel x e: $x";
                echo "<br/>A variavel criada recebeu o valor $ABC";


                
            ?> 
        </div>
    </section>
</body>
</html>