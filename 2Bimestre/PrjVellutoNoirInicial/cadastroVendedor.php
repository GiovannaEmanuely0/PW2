<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro Vendedor </title>
    <link rel="stylesheet" href="./css/cadastroVend.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

</head>
<body>

    <div class="container"> 

        <div class="section2"> 
            <img src="./IMAGE/capaV.jpg" class="Capa"/>
        </div>

        <div class="section1">

            <h1 class='titulo'> Cadastre-se </h1>
            <p class='desc'> Crie sua loja e torne-se vendedor! </p>

            <form action="validacaoVendedor.php" method="post" > 

                <p class="labelTit"> Informações da Loja: </p>

                <div class="info">
                    <label> Nome da Loja: </label> <br/>
                    <input type="text" name="txNomeLoja" placeholder="Insira o nome da loja" required/>
                </div>

                <div class="info">
                    <label> CNPJ </label> <br/>
                    <input type="number" name="txCNPJ" placeholder="Insira seu CNPJ" required/>
                </div>

                <div class="info"> 
                    <label> CEP de envio </label> <br/>
                    <input type="number" name="txCEP" placeholder="Insira um CEP válido" required/>
                </div>

                <p class="labelTit"> Informações Representante Legal: </p1> <br/>

                <div class="info">
                    <label> Nome do Representante Legal: </label> <br/>
                    <input type="text" name="txNomeVendedor" placeholder="Insira o seu nome" required/>
                </div>

                <div class="info">
                    <label> CPF </label> <br/>
                    <input type="number" name="txCPF" placeholder="Insira seu CPF" required/>
                </div>

                <div class="info"> 
                    <label> Telefone do Representante Legal </label> <br/>
                    <input type="number" name="txTell" placeholder="Insira um Tell válido" required/>
                </div>

                <div class="info"> 
                    <label> Email do Representante Legal </label> <br/>
                    <input type="email" name="txEmail" placeholder="Insira um email válido" required/>
                </div>

                <div class="info"> 
                    <label> Senha </label> <br/>
                    <input type="password" name="txPass" placeholder="Digite sua senha" required/>
                </div>

                <div class="info"> 
                    <label> Confirmação da Senha </label> <br/>
                    <input type="password" name="txPassConf" placeholder="Digite a senha novamente" required/>
                </div>

                <button type="submit"> Criar conta </button>

            </form>

            <div class='login'>
                <p> Já possui cadastro? </p> <a href="#login"> Faça Login </a>
            </div>

        </div>

    </div>

<script src="./JS/script.js"> </script>

</body>
</html>
