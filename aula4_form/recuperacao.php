<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recuperação</title>
    <link rel="stylesheet" href="CSS/style2.css">
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
    <section class='resultado'>
        <?php
            echo "<h1 class='nomes'>$nome</h1>";
            echo "<h1 class='nomes'>$dtaNasc</h1>";
            echo "<h1 class='nomes'>$sexo</h1>";
            echo "<h1 class='nomes'>$estado_civil</h1>";
            echo "<h1 class='nomes'>$email</h1>";
            echo "<h1 class='nomes'>$fone</h1>";
            echo "<h1 class='nomes'>$cep</h1>";
        ?>
    </section>
   
</body>
</html>