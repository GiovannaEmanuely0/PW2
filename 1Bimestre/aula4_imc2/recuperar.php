<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado IMC</title>
    <link rel="stylesheet" href="CSS/style2.css">
</head>
<body>
    <?php
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
        $imc = $imc = $peso/($altura*$altura);
    ?>
    <?php
         if ($imc<=18.5) {
            echo "<div class='divisao2'>";
            echo "<img class='image' src='IMAGE/img6.png' alt=''>";
            echo "<div class='div1'>";
            echo "<h1>Abaixo do Normal</h1>";
            echo "<h1>IMC: $imc</h1>";
            echo "<p class='text'>";
            echo "Procure um médico. Algumas pessoas têm um baixo peso por características do seu organismo e tudo bem. Outras podem estar enfrentando problemas, como a desnutrição. É preciso saber qual é o caso.";
            echo "</p>";
            echo "</div>";
            echo "</div>";
        }
        else if ($imc<=24.9) {
            echo "<div class='divisao2'>";
            echo "<img class='image' src='IMAGE/img5.png' alt=''>";
            echo "<div class='div1'>";
            echo "<h1>Normal</h1>";
            echo "<h1>IMC: $imc</h1>";
            echo "<p class='text'>";
            echo "Que bom que você está com o peso normal! E o melhor jeito de continuar assim é mantendo um estilo de vida ativo e uma alimentação equilibrada.";
            echo "</p>";
            echo "</div>";
            echo "</div>";
        }
        else if ($imc<=29.9) {
            echo "<div class='divisao2'>";
            echo "<img class='image' src='IMAGE/img4.png' alt=''>";
            echo "<div class='div1'>";
            echo "<h1>Sobrepeso</h1>";
            echo "<h1>IMC: $imc</h1>";
            echo "<p class='text'>";
            echo "Ele é, na verdade, uma pré-obesidade e muitas pessoas nessa faixa já apresentam doenças associadas, como diabetes e hipertensão. Importante rever hábitos e buscar ajuda antes de, por uma série de fatores, entrar na faixa da obesidade pra valer.";
            echo "</p>";
            echo "</div>";
            echo "</div>";
        }
        else if ($imc<=34.9) {
            echo "<div class='divisao2'>";
            echo "<img class='image' src='IMAGE/img3.png' alt=''>";
            echo "<div class='div1'>";
            echo "<h1>Obesidade grau I</h1>";
            echo "<h1>IMC: $imc</h1>";
            echo "<p class='text'>";
            echo "Sinal de alerta! Chegou na hora de se cuidar, mesmo que seus exames sejam normais. Vamos dar início a mudanças hoje! Cuide de sua alimentação. Você precisa iniciar um acompanhamento com nutricionista e/ou endocrinologista.";
            echo "</p>";
            echo "</div>";
            echo "</div>";
        }
        else if ($imc<=39.9) {
            echo "<div class='divisao2'>";
            echo "<img class='image' src='IMAGE/img2.png' alt=''>";
            echo "<div class='div1'>";
            echo "<h1>Obesidade grau II</h1>";
            echo "<h1>IMC: $imc</h1>";
            echo "<p class='text'>";
            echo "Mesmo que seus exames aparentem estar normais, é hora de se cuidar, iniciando mudanças no estilo de vida com o acompanhamento próximo de profissionais de saúde.";
            echo "</p>";
            echo "</div>";
            echo "</div>";
        }
        else {
            echo "<div class='divisao2'>";
            echo "<img class='image' src='IMAGE/img1.png' alt=''>";
            echo "<div class='div1'>";
            echo "<h1>Obesidade grau III</h1>";
            echo "<h1>IMC: $imc</h1>";
            echo "<p class='text'>";
            echo "Aqui o sinal é vermelho, com forte probabilidade de já existirem doenças muito graves associadas. O tratamento deve ser ainda mais urgente.";
            echo "</p>";
            echo "</div>";
            echo "</div>";
        }
    ?>
</body>
</html>