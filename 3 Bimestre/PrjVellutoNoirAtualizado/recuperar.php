    <?php 
        $senha = $_POST['pass'];
        $confirma = $_POST['passConf'];
        $nomeUsuario = $_POST['txName'];
        $emailUsuario = $_POST['txEmail'];

        if ($senha === $confirma) {
        include('usuario.php');

        } elseif ($senha === false || $confirma === false || $nomeUsuario === false || $emailUsuario === false) {
        include('erroCadastro.php');

        } else {
        include('erroCadastro.php');
        }
    ?>
    