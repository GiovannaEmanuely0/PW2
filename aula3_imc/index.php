<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule o seu IMC</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/style2.css">
    <script src="JAVASCRIPT/script.js"></script>
</head>
<body>
<?php
            $altura = 1.67;
            $peso = 55.70;
            $imc = $peso/($altura*$altura);
            
            echo "<div class='title'>";
            echo "<h1>Calcule o seu IMC</h1>";
            echo "</div>";

            echo "<section>";
            
            echo "<div class='divisao'>";
            echo "<h2>Altura :  $altura  m</h2>";
            echo "<h2>Peso :  $peso kg</h2>";
            echo "<button type='button' onclick='imc()'>Saber IMC</button>";
            echo "</div>";
            
            echo"</section>";
            ?>

<section class="imcCompleto">
    <?php   
            // echo "<section class='imcCompleto'>";
            if ($imc<=18.5) {//abaixo do peso
                echo "<div class='divisao2'>";
                echo "<img class='image' src='IMAGE/img6.png' alt='abaixoNormal'>";
                echo "<div class='div1'>";
                echo "<h1>Abaixo do Normal</h1>";
                echo "<h3>Seu imc é: $imc</h3>";
                echo "<p class='text'>";
                echo "Procure um médico. Algumas pessoas têm um baixo peso por características do seu organismo e tudo bem. Outras podem estar enfrentando problemas, como a desnutrição. É preciso saber qual é o caso.";
                echo "</p>";
                echo "</div>";
                echo "</div>";
            }
            else if ($imc<=24.9) {//Normal
                echo "<div class='divisao2'>";
                echo "<img class='image' src='IMAGE/img5.png' alt=''>";
                echo "<div class='div1'>";
                echo "<h1>Normal</h1>";
                echo "<h3>Seu imc é: $imc</h3>";
                echo "<p class='text'>";
                echo "Que bom que você está com o peso normal! E o melhor jeito de continuar assim é mantendo um estilo de vida ativo e uma alimentação equilibrada.";
                echo "</p>";
                echo "</div>";
                echo "</div>";
            }
            else if ($imc<=29.9) {//Sobrepeso
                echo "<div class='divisao2'>";
                echo "<img class='image' src='IMAGE/img4.png' alt=''>";
                echo "<div class='div1'>";
                echo "<h1>Sobrepeso</h1>";
                echo "<h3>Seu imc é: $imc</h3>";
                echo "<p class='text'>";
                echo "Ele é, na verdade, uma pré-obesidade e muitas pessoas nessa faixa já apresentam doenças associadas, como diabetes e hipertensão. Importante rever hábitos e buscar ajuda antes de, por uma série de fatores, entrar na faixa da obesidade pra valer.";
                echo "</p>";
                echo "</div>";
                echo "</div>";
            }
            else if ($imc<=34.9) {//obesidade I
                echo "<div class='divisao2'>";
                echo "<img class='image' src='IMAGE/img3.png' alt=''>";
                echo "<div class='div1'>";
                echo "<h1>Obesidade grau I</h1>";
                echo "<h3>Seu imc é: $imc</h3>";
                echo "<p class='text'>";
                echo "Sinal de alerta! Chegou na hora de se cuidar, mesmo que seus exames sejam normais. Vamos dar início a mudanças hoje! Cuide de sua alimentação. Você precisa iniciar um acompanhamento com nutricionista e/ou endocrinologista.";
                echo "</p>";
                echo "</div>";
                echo "</div>";
            }
            else if ($imc<=39.9) {//Obesidade II
                echo "<div class='divisao2'>";
                echo "<img class='image' src='IMAGE/img2.png' alt=''>";
                echo "<div class='div1'>";
                echo "<h1>Obesidade grau II</h1>";
                echo "<h3>Seu imc é: $imc</h3>";
                echo "<p class='text'>";
                echo "Mesmo que seus exames aparentem estar normais, é hora de se cuidar, iniciando mudanças no estilo de vida com o acompanhamento próximo de profissionais de saúde.";
                echo "</p>";
                echo "</div>";
                echo "</div>";
            }
            else {//Obesidade III
                echo "<div class='divisao2'>";
                echo "<img class='image' src='IMAGE/img1.png' alt=''>";
                echo "<div class='div1'>";
                echo "<h1>Obesidade grau III</h1>";
                echo "<h3>Seu imc é: $imc</h3>";
                echo "<p class='text'>";
                echo "Aqui o sinal é vermelho, com forte probabilidade de já existirem doenças muito graves associadas. O tratamento deve ser ainda mais urgente.";
                echo "</p>";
                echo "</div>";
                echo "</div>";
            }
            //echo "</section>";
            ?>
    </section>
    <div>
        <?php
            
        ?>
    </div>
</body>
</html>