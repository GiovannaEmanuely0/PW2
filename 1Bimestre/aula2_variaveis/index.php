<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá Mundo de novo</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php

        //Hello World com tags html
        echo " <h1> Olá Mundo!</h1> ";
        echo "<h2>Hello World! </h2>";
        echo "<h3>Kon'nichiwa sekai </h3>";
        echo "<h4>Congratulations bro</h4>";
        //Declaração de variáveis
        $nome = "Giovanna Emanuelly";
        $idade = 90;
        $peso = 57.0;

        $nome2 = "Beatriz Moreira";
        $idade2 = 15;
        $peso2 = 53.0;
        //Colocando tags no echo
        echo "<p>$nome</p>";
        echo "<p>$idade</p>";
        echo "<p>$peso</p>";
        //Utilizando o ponto nas apresentações
        echo "<p> Nome: " .$nome2 . "</p>";
        echo "<p> Idade: " .$idade2 . "</p>";
        echo "<p> Peso: " .$peso2 . "</p>";
        //Atribuição de valores e soma deles
        $num1 = 32;
        $num2 = 40;
        $soma = $num1 + $num2;
        //Apresentando o resultado da soma adicionando uma class
        echo "<h1 class='titresposta'>";
        echo "$num1 + $num2 = $soma";
        echo "</h1>";
        //Subtração
        $sub = $num1 - $num2;
        echo "<h1>".$num1." - ".$num2." = ".$sub."</h1>";
        //Multiplicação
        $multi = $num1 * $num2;
        echo "<h1>".$num1." * ".$num2." = ".$multi."</h1>";
        //Divisão
        $div = $num1 / $num2;
        echo "<h1>".$num1." / ".$num2." = ".$div."</h1>";

        echo "<div class='divisao'>";
            echo "OI";
        echo "</div>";

        // comentário de uma linha

        /*
        Comentário de várias linhas 
        */

     ?>

     <h1 class="titresposta"> 
        <?php
        // Criando blocos php
         echo $nome2;
         ?>
     </h1>

     <h1 class="titresposta"> 
        <?php echo $idade2; ?>
     </h1>

     <h1 class="titresposta"> 
        <?php echo $peso2; ?>
     </h1>

     <?php

     // If Else no php
    //Operadores lógicos: && || !
    //Operadores relacionais: < > <= >= == !=
    
     if ($idade>17) {
        echo "<h1 class='maior'> Maior de idade </h1>";
     }
     else {
        echo "<h1 class='menor'> Menor de idade </h1>";
     }

     if ($idade2>17) {
        echo "<h1 class='maior'> Maior de idade </h1>";
     }
     else {
        echo "<h1 class='menor'> Menor de idade </h1>";
     }
     ?>


</body>
</html>