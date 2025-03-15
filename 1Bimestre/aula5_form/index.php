<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5</title>
    <link rel="stylesheet" href="CSS/formulario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux&family=Comfortaa:wght@300..700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Parkinsans:wght@300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>

    <section class="divisao_principal">
        <div class="divisao_titulo">
            <h1>Cadastro</h1>
            <p>Preencha o formulário a seguir para entrar em contato com nossa empresa</p>
            <p>* Por favor insira todos os campos</p>
        </div>
        <div class="divisao_formulario">
            <form action="recuperacao.php" method="post" class="form">
                <h2>Nome</h2>
                <input class="input" type="text" placeholder="Nome" name="nome_tx">
                <div class="nova_divisao">
                    <h2>Data de Nascimento</h2>
                    <h2>Estado Civil</h2>
                </div>
                <div class="nova_divisao">
                    <input class='input2' type="date" name="date_tx">
                    <select class='input2' name="estado_civil" id="estado_civil">
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="Viúvo(a)">Viúvo(a)</option>
                        <option value="Divorciado(a)">Divorciado(a)</option>
                        <option value="Solteiro(a)">Solteiro(a)</option>
                    </select>
                </div>
                <h2>Sexo</h2>
                <input type="radio" id="masc" name="sexo" value="Masculino">Masculino<br>
                <input type="radio" id="fema" name="sexo" value="Feminino">Feminino<br>
                <h2>E-mail</h2>
                <input class="input" type="email" name="seu_email" placeholder="E-mail">
                <div class="nova_divisao">
                    <h2>Telefone</h2>
                    <h2>CEP</h2>
                </div>
                <div class="nova_divisao">
                    <input class="input2" type="text" placeholder="Telefone" name="phone">
                    <input class="input2" type="text" placeholder="CEP" name="cep">
                </div>
                <br/>
                <!-- <button type="button">Cadastrar</button> -->
                 <input class='butao' type="submit" value="Cadastrar">
            </form>
        </div>
    </section>
</body>
</html>