<?php

    include("conexao.php");

    $senha = $_POST['pass'];
    $confirma = $_POST['passConf'];
    $nomeUsuario = $_POST['txName'];
    $emailUsuario = $_POST['txEmail'];

    if ($senha === $confirma){

        $stmt = $pdo->prepare("insert into 
                            tbcliente2 values
                            (null,'$nomeUsuario','$emailUsuario', NULL, NULL, '$senha');");	

        $stmt ->execute();

        header('location:cliente.php');

    } else {
        header('location:erroCadastro.php');
    }
    

?>