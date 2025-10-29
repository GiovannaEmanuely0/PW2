<?php 
    //criar método cadastrarProdutos - para os vendedores
    /* 
       1. recuperar valores do form
       2. guardar em variáveis
       3. mandar para o banco
     */
    //criar método recuperarProdutos para dar um select * from
        /*
        1. conexão com o banco ✅
        2. gerar select * from ✅
        3. mostrar os produtos na página inicial ✅
        4. mostrar os produtos a partir de uma pesquisa - não implementado
         */
    //criar método excluirProdutos - para os vendedores
        /*
        1. ao selecionar o campo
        2. gerar delet from tbProduto where id = x
        */
?>
<?php

    class Produto{

        public function recuperarProdutos(){
            include("conexao.php");
    
            $stmt = $pdo->prepare("SELECT * FROM tbProduto WHERE idProduto >= 0 AND idProduto <8");
            $stmt->execute();
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $produto[] = $row['nomeProduto'];
                $preco[] = $row['precoProduto'];
                $imagemProduto[] = $row['caminhoDaImagem'];
            }

            for($i = 0; $i < count($produto); $i++) {
                echo "
                    <div class='conteudo'>
                        <a href='./desc.php?id=$i'><figure class='item'>
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
        }

    }

?>