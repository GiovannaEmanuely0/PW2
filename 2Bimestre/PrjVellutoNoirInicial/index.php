<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas</title>
    <link rel="stylesheet" href="CSS/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="CSS/index2.css"> -->
</head>
<body>
    <header>
        <?php include('header.php')?>
    </header>

    <!-- <section class="secao_carrossel">
        <?php include('carrosselPrincipal.php') ?>
    </section> -->

        <?php 
            $produto = array();

            $preco = array();

            $imagemProduto = array();
            $imagemProduto[0] = "https://static.dafiti.com.br/p/adidas-adidas-t%C3%8Anis-grand-court-2.0-8518-58297931-1-zoom.jpg?ims=filters:quality(70)";
            $imagemProduto[1] = "https://bobags.com.br/assets-v2/products/vestido-florido-com-faixa-p-2d48c12cc6eb95c0813bb4f9eab213115bad13e7.jpg?p=productlist&cache=d4b44564722748239b0dcf03249071f80c913&fm=webp&s=1ad0c45c2abfb64c47a7c3c7197c9bb9";
            $imagemProduto[2] = "https://down-br.img.susercontent.com/file/br-11134201-23020-1y8fdpnsxrnvb2";
            $imagemProduto[3] = "https://m.media-amazon.com/images/I/51TcXFnIXEL._AC_SY1000_.jpg";
            $imagemProduto[4] = "https://oqvestir.fbitsstatic.net/img/p/blazer-feminino-alongado-blended-bege-217281/622593.jpg?w=1600&h=2133&v=202504091215";

            // Conexão com o banco de dados
            include('conexao.php');
            $stmt = $pdo->prepare("SELECT * FROM tbproduto");
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $produto[] = $row['nomeProduto'];
                $preco[] = $row['precoProduto'];
            }

        ?>
        <h1 style="text-align: center;">NOVIDADES</h1>
    <section class="secao_card1">
      <?php 
            for($i = 0; $i < count($produto); $i++) {
                echo "
                    <div class='conteudo'>
                        <a href='desc.php?id=$i'><figure class='item'>
                            <img class='imagemProduto' src='$imagemProduto[$i]' alt='Imagem do produto'>
                            <figcaption>
                                <h2 class='titulo_produto'>$produto[$i]</h2>
                                <p>R$ $preco[$i]</p>
                                <button class='botao'>Adicionar ao carrinho</button>
                            </figcaption>
                        </figure></a>
                    </div>
                ";
            }
      ?>
    </section>

    <section class="secao_requisitos">
        <div class="requisitos">
            <a class="requisitos_funcionais" href="requisitos.php">Requisitos funcionais</a>
        </div>
    </section>

    <footer>
        <?php include('footer.php')?>
    </footer>
</body>
</html>