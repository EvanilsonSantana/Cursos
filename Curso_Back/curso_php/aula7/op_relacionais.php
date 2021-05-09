<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Aula7</title>
</head>
<body>
    <header>
        <h1>Operadores Relacionais</h1>
    </header>
    <section>
        <div>
            <?php 
                /*  Maior  --- >
                    Menor  --- <
                    Maior ou Igual  --- >=
                    Menor ou Igual  --- <=
                    Diferente --- != ou <>
                    Igual  --- == 
                    igual e do mesmo tipo --- ===
            
                    ****Operador Ternario***
                    expressão ? verdadeiro :falso
                    $maior = $a > $b ? $a : $b
               */
                echo "****Operadores Relacionais****<br/>";
                echo "<br/>Ex:01<br/>";
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                $tipo = $_GET["op"];
                echo "<br/>Os valores passados foram: $n1 e $n2<br/>";
                echo "A operação é: $tipo<br/>";
                $res = ($tipo == "s")?($n1+$n2):($n1*$n2);
                echo "O resultado da $op é: $res<br/>";

                // Comparação de variaveis
                echo "<br/>****Comparação de variaveis****<br/>";
                echo "<br/>Ex:02<br/>";
                $a = 3;
                $b = "3";
                $r = ($a == $b)?"SIM":"NÃO";
                echo "<br/>As variaves A e B são iguais: ". $r;
                $r1 = ($a === $b)? "SIM":"NÃO";
                echo "<br/> As variaves A e B são Identicas: $r1<br/>";

                echo "<br/>Ex:03<br/>";
                $nota1 = $_GET["n1"];
                $nota2 = $_GET["n2"];
                $media = ($nota1 + $nota2)/2;
                echo "<br/>A media é: $media";
                echo "<br/>O aluno foi: " . (($media >= 7)?"Aprovado":"Reprovado");
                echo "<br/>";
                

                echo "<br/>****Operadores Lógicos****<br/>";
                echo "<br/> Ex:04<br/>";
                $ano = $_GET["an"];
                $idade = 2021 - $ano;
                echo "<br/>Sua idade é: $idade<br/>";
                $type = ($idade >= 18 && $idade < 65)?"OBRIGATORIO":"NÃO OBRIGATORIO";
                echo "Seu voto é tipo: $type";


            ?>
        </div>
    </section>
</body>
</html>