<?php

    include ("conexao.php");

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $publico = $_POST['publico'];
    $genero = $_POST['genero'];
    $classificacao = $_POST['classificacao'];
    $tamanho = $_POST['tamanho'];

    $stmt = $pdo->prepare("insert into tbProduto 
        values ('null','$nome', '$preco', '$descricao', '$publico', '$genero','$classificacao','$tamanho'); ");

    $stmt ->execute();
?>

<?php
    header("location: produto.php");
?>