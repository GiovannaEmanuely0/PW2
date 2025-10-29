<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produto</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <?php include ('header.php'); ?>
</header>
    <section class="secao_principal">
        <div class="div_1_form">

            <div>
                <h1 class="titulo_cadastro"> Cadastre seu produto </h1>
                <p class="subtitulo_cadastro"> Excelentes vendas! </p>
            </div>
            <form class="formulario_produto" action="recuperarProduto.php" method="post">


                <div class="bloco">
                    <h1> Nome do Produto </h1>
                    <input class="input_cadastro_produto" type="text" placeholder="nome do produto" name="nome">
                </div>

                <div class="bloco">
                    <h1> Preço </h1>
                    <input class="input_cadastro_produto" type="text" placeholder="preço" name="preco">
                </div>

                <div class="bloco">
                    <h1> Descrição do Produto </h1>
                    <input class="input_cadastro_produto" type="text" placeholder="descrição" name="descricao">
                </div>

                <div class="bloco">
                    <h1> Público alvo </h1>
                    <p> Infantil ou Adulto</p>
                    <input class="input_cadastro_produto" type="text" placeholder="público alvo" name="publico">
                </div>

                <div class="bloco">
                    <h1> Gênero </h1>
                    <p> Feminino, Masculino ou Unisex </p>
                    <input class="input_cadastro_produto" type="text" placeholder="gênero" name="genero">
                </div>

                <div class="bloco">
                    <h1> Classificação</h1>
                    <p> Calçado ou Vestimenta </p>
                    <input class="input_cadastro_produto" type="text" placeholder="público alvo" name="classificacao">
                </div>

                <div class="bloco">
                    <h1> Tamanho </h1>
                    <p> PP, P, M, G, GG ou números de 1 a 40</p>
                    <input class="input_cadastro_produto" type="text" placeholder="tamanho" name="tamanho">
                </div>
                <div class="bloco">
                    <h1> Imagem</h1>
                    <input type="file">
                </div>

                <button class="butoes_conta" type="submit">Cadastrar</button>
            </form>

        </div>
        <footer>
            <?php include ('footer.php'); ?>
        </footer>
</body>
</html>