<?php 
        include("conexao.php");

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];

        $senha = $_POST['pass'];
        $confirma = $_POST['passConf']; 

        if ($senha === $confirma){
            $stmt = $pdo->prepare("insert into tbAdministrador 
                values (null, '$nome', '$cpf', null); 

                insert into tbLoginAdministrador values (null, '$email', '$senha', '', null);
                ");
            $stmt ->execute();
            ?>
            <?php
            header("location: administrador.php");
        }elseif($senha != $confirma){
            echo "<script>alert('Senha Incorreta! Digite novamente');</script>";
            header("location: cadastroAdministrador.php");
        }

?>