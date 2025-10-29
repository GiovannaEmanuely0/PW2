<?php

    include("conexao.php"); 

    $nomeLoja = $_POST['txNomeLoja'];
    $CNPJ = $_POST['txCNPJ'];
    $CEP = $_POST['txCEP'];

    $nomeVendedor = $_POST['txNomeVendedor'];
    $CPF = $_POST['txCPF'];
    $tell = $_POST['txTell'];
    $email = $_POST['txEmail'];
    $pass = $_POST['txPass'];
    $passConf = $_POST['txPassConf'];

    if($pass === $passConf){

        $stmt = $pdo->prepare("insert into 
                tbvendedor values
                (null, '$nomeVendedor','$email','$tell','$CPF','$pass', null); 

                insert into 
                tbloja values
                (null,'$nomeLoja', null, '$CEP');");	

        $stmt ->execute();

        header('location:vendedor.php');

    } else{
        header('location:cadastroVendedor.php');
    }

?>