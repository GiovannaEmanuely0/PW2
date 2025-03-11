<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <section class="divisao_principal">
        <div class="divisao_titulo">
            <h1>Cadastro</h1>
        </div>
        <div class="divisao_formulario">
            <form action="recuperacao.php" method="post">
                <h2>Nome</h2>
                <input class="input" type="text" placeholder="name" name="nome_tx">
                <h2>Data de Nascimento</h2>
                <input type="date" name="date_tx">
                <h2>Sexo</h2>
                <input type="radio" id="masc" name="sexo" value="Masculino">Masculino<br>
                <input type="radio" id="fema" name="sexo" value="Feminino">Feminino<br>
                <h2>Estado Civil</h2>
                <select name="estado_civil" id="estado_civil">
                    <option value="Casado(a)">Casado(a)</option>
                    <option value="Viúvo(a)">Viúvo(a)</option>
                    <option value="Divorciado(a)">Divorciado(a)</option>
                    <option value="Solteiro(a)">Solteiro(a)</option>
                </select>
                <h2>E-mail</h2>
                <input class="input" type="email" name="seu_email" placeholder="E-mail">
                <h2>Telefone</h2>
                <input class="input" type="text" placeholder="Telefone" name="phone">
                <h2>CEP</h2>
                <input class="input" type="text" placeholder="CEP" name="cep">
                <br/>
                <!-- <button type="button">Cadastrar</button> -->
                 <input type="submit" value="Cadastrar">
            </form>
        </div>
    </section>
</body>
</html>