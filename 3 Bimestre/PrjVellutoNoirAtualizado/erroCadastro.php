<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro </title>
    <link rel="stylesheet" href="./css/cadastro2.css">
    <link rel="stylesheet" href="./css/erroCadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>

    <div class="container"> 
        <div class="section1">

            <h1 class='titulo'> Cadastre-se </h1>
            <p class='desc'> Não perca as novidades do mundo da moda </p>

            <form action="recuperar.php" method="post"> 

                <div class="info">
                    <label> Nome completo: </label> <br/>
                    <input type="text" placeholder="Seu nome completo aqui" name="txName"/>
                </div>

                <div class="info">
                    <label> Email: </label> <br/>
                    <input type="email" placeholder="Seu melhor email aqui" name="txEmail"/>
                </div>

                <div class="info"> 
                    <label> Senha: </label> <br/>
                    <input type="password" placeholder="Digite sua senha" name="pass" class="erro"/>
                </div>

                <div class="info"> 
                    <label> Confirme sua Senha: </label> <br/>
                    <input type="password" placeholder="Senha incorreta" name="passConf" class="erro"/>
                </div>

                <button type="submit"> Criar conta </button>

            </form>

            <div class='login'>
                <p> Já possui cadastro? </p> <a href="login.php"> Faça Login </a>
            </div>

        </div>

        <div class="section2"> 
            <img src="./IMAGE/Capa2.jpg" class="Capa"/>
        </div>
    </div>
    
</body>
</html>