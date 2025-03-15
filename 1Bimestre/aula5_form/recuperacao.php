<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recuperação</title>
    <link rel="stylesheet" href="CSS/formulario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux&family=Comfortaa:wght@300..700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Parkinsans:wght@300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>

    <?php

        $nome = $_POST['nome_tx'];
        $dtaNasc = $_POST['date_tx'];
        $email = $_POST['seu_email'];
        $fone = $_POST['phone'];
        $cep = $_POST['cep'];
        if(isset($_POST['sexo'])){
            $sexo = $_POST['sexo'];
        }
        if(isset($_POST['estado_civil'])){
            $estado_civil = $_POST['estado_civil']; 
        }
        ?>
    <div class="titulo">
        <h1>Registro do formulário</h1>
    </div>
    <section class='resultado'>
        <div class="primeira_secao">
            <?php
                echo "<h2 class='name'>Nome:</h2>";
                echo "<h1 class='nomes'>$nome</h1>";
                echo "<h2 class='name'>Data de Nascimento:</h2>";
                echo "<h1 class='nomes'>$dtaNasc</h1>";
                echo " <h2 class='name'>Sexo:</h2>";
                echo "<h1 class='nomes'>$sexo</h1>";
                echo "<h2 class='name'>Estado civil:</h2>";
                echo "<h1 class='nomes'>$estado_civil</h1>";
            ?>
        </div>
        <div class="primeira_secao">
            <?php
                echo " <h2  class='name'>E-mail:</h2>";
                echo "<h1 class='nomes'>$email</h1>";
                echo "<h2  class='name'>Telefone:</h2>";
                echo "<h1 class='nomes'>$fone</h1>";
                echo " <h2  class='name'>CEP:</h2>";
                echo "<h1 class='nomes'>$cep</h1>";
            ?>
        </div>
    </section>
   
</body>
</html>