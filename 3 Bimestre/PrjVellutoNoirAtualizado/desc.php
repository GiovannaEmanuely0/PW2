<?php 

    $produto = array();
    $preco = array();
    $descricao = array();
    $imagemProduto = array();   

    // Conexão com o banco de dados
    include('conexao.php');
    $stmt = $pdo->prepare("SELECT * FROM tbproduto");
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $imagemProduto[] = $row['caminhoDaImagem'];
        $produto[] = $row['nomeProduto'];
        $preco[] = $row['precoProduto'];
        $descricao[] = $row['descProduto'];
    }

    $desc2 = "Detalhes: Feito com materiais de alta qualidade, este produto é durável e resistente. Disponível em várias cores e tamanhos, para atender a todas as suas necessidades.";

    // Verifica se o ID do produto foi passado na URL
    $id = array();
    $id[0] = 1;
    $id[1] = 2;
    $id[2] = 3;

    $x = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="CSS/style.css">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <?php include('header.php')?>
    </header>

    <main>

        <section class="secaoProduto1">
            <div class="primeiraDivisaoProduto">
                <img class="imagemProdutoDesc" src="<?php echo $imagemProduto[$x]; ?>" alt="Imagem do produto">
            </div>
            <div class="segundaDivisaoProduto">
                <div>
                    <h1 class="produto1"><?php echo $produto[$x]; ?></h1>
                    <h3 class="preco1">R$ <?php echo $preco[$x]; ?></h3>
                    <p><?php echo $descricao[$x]; ?></p>
                    <div>
                        <label for="tamanho">Tamanho:</label>
                        <input type="radio" name="tamanho" value="P"> P
                        <input type="radio" name="tamanho" value="M"> M
                        <input type="radio" name="tamanho" value="G"> G
                        <input type="radio" name="tamanho" value="GG"> GG
                    </div>
                </div>
                <div>
                    <p><?php echo "$desc2"; ?></p>
                </div>
                <div class="botoes">
                    <button class="butao2">Comprar</button>
                    <button class="butao2">Carrinho</button>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <?php include('footer.php')?>
    </footer>
</body>
</html>