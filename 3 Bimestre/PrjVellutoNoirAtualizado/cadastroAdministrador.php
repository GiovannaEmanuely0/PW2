<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="secao_principal_cadastro">
        <div class="divisao_1_cadastro">

            <form action="recuperarAdmin.php" method="post">
                <div>
                    <h1 class="titulo_cadastro">Cadastra-se</h1>
                    <p class="subtitulo_cadastro">Preencha os dados abaixo e seja Administrador</p>
                </div>
                <div class="caixa">
                    <p>Nome Completo:</p>
                    <input class="caixa_texto_cadastro" type="text" placeholder="Seu nome completo aqui" name="nome">
                </div>
                <div class="caixa">
                    <p>CPF:</p>
                    <input class="caixa_texto_cadastro" type="text" placeholder="Seu CPF aqui" name="cpf">
                </div>
                <div class="caixa">
                    <p>E-mail:</p>
                    <input class="caixa_texto_cadastro" type="text" placeholder="Seu melhor e-mail aqui" name="email">
                </div>
                <div class="caixa">
                    <p>Senha:</p>
                    <input class="caixa_texto_cadastro" type="password" placeholder="Sua senha aqui" name="pass">
                </div>
                <div class="caixa">
                    <p>Confirmar senha:</p>
                    <input class="caixa_texto_cadastro" type="password" placeholder="Digite a senha novamente" name="passConf">
                </div>
                <button class="butoes_conta" type="submit">Criar conta</button>
            </form>
            <div class='caixa'>
                <p> Já possui cadastro? <a class="link_cadastro" href="login.php"> Faça Login </a></p>
            </div>
        </div>
        <div class="divisao_2_cadastro">
            <img src="./IMAGE/Capa2.jpg" class="Capa" alt="Capa">
        </div>

    </section>
</body>
</html>