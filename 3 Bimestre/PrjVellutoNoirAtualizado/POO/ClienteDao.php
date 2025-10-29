<?php

    class ClienteDao{
    
        public function cadastrarCliente(){
            include("conexao.php");

            $senha = $_POST['pass'];
            $confirma = $_POST['passConf'];
            $nomeUsuario = $_POST['txName'];
            $emailUsuario = $_POST['txEmail'];

            if ($senha === $confirma ) {

                session_start();

                $_SESSION['logado'] = true; 
                $_SESSION['usuario'] = $usuario; 

                $stmt = $pdo->prepare("insert into tbcliente values (null,'$nomeUsuario','$emailUsuario',      '$senha','null','null','null','null','null','null','null','null','null','null','null');");	
    
                    $stmt ->execute();
    
                    header('location:cliente.php');


            } else {
                header('location:erroCadastro.php');
            }

        }

        public function editarCliente(){
            include("conexao.php");

            $senha = $_POST['pass'];
            $nomeUsuario = $_POST['txName'];
            $emailUsuario = $_POST['txEmail'];

            $stmt = $pdo->prepare("
            update tbCliente set
                nomeCliente='$nomeUsuario',
                emailCliente='$emailUsuario',
                senhaCliente='$senha',
                where tbCliente ='$id';
            ");	    
	            $stmt ->execute(); 
        }

        public function excluirCliente(){
            include("conexao.php");

             include("conexao.php");

                $stmt = $pdo->prepare("delete from tbCliente where idContato='$x'");	
                $stmt ->execute();  
            
        }
 
        public function listarCliente(){
            include("conexao.php");

            $stmt = $pdo->prepare("select * from tbcliente limit 10");
            $stmt ->execute();

            $row = $stmt->fetch(PDO::FETCH_BOTH);

            echo "<h1> Lista de Clientes </h1>";
            echo "<table border='1'>
                    <tr class='headTable'>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                    </tr>";
            foreach ($stmt as $row){
                echo "<table border=''>
                        <tr>
                            <th>$row[0]</th>
                            <th>$row[1]</th>
                            <th>$row[2]</th>
                        </tr>";
            }

        }

    }

?>
<style>
    h1{
        text-align: center;
        font-size: 50px;
    }
    table{
        border-collapse: collapse;
        /* width: 50%; */
        margin: auto;
    }
    th{
        box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
        padding: 5px;
        height: 50px;
        width: 400px;
    }
    .headTable{
        background-color: black;
        color: white;
    }
    th:hover{
        background-color: gray;
        color: white;
        cursor: pointer;
        transition: 0.5s;
    }
</style>