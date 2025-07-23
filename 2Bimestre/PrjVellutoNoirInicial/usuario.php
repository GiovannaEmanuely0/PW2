<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
    <link rel="stylesheet" href="./css/usuario.css">
    <link rel="stylesheet" href="./css/oculto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>

    <header> <?php include("header.php"); ?> </header>

    <?php
        
        $stmt = $pdo->prepare("select * from tbvendedor");	
        
        $stmt ->execute();
        
        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){  

    ?>

    <div class="container">    
        <div class="box"> 
            <div class="img">
                <h1 class="titUsuario"> Olá, <?php echo $row[1]; ?> </h1>
                <a href="#algumLugar" onclick="spanImagem()"> <img class="usuario" src='./IMAGE/Dracu.jpg'/> </a>
            </div>

            <div class="boxInfos"> 
                <div class="infos">
                    <p class="desc"> Seus dados: </p> </br>


                    <div >
                        <div class="infoDesc" > <p class="linha"> Nome: </p> <p class="info"> <?php echo  $row[1]; ?> </p> </div>
                        <div class="infoDesc"> <p class="linha"> Email: </p> <p class="info"> <?php echo  $row[2]; ?> </p> </div>
                        <div class="infoDesc"> <p class="linha"> Tell: </p> <p class="info"> <?php echo  $row[3]; ?> </p> </div>
                        <div class="infoDesc"> <p class="linha"> CPF: </p> <?php echo "<input type='password' value='" .$row[4]. "' readonly/>"; ?> </p> </div>
                        <div class="infoDesc"> <p class="linha"> Senha: </p> <?php echo "<input type='password' value='" .$row[5]. "' readonly/>"; ?> </div>
                    </div>

                    <?php } ?>

                </div>
            </div>

            <br> 

            <div class="boxInfos"> 
                <div class="infos">
                    <p class="desc"> Sua conta: <p>

                    <div class="displayButtons">
                        <div class="boxButtons" style="margin-left:2%"> 
                            <a href="#algumLugar" class="button"> <img src='./IMAGE/carrinho2.png' class="imgButton"/> Carrinho </a>
                        </div>
                        <div class="boxButtons">
                            <a href="#algumLugar" class="button"> <img src='./IMAGE/coracao.png' class="imgButton"/> Favoritos </a> 
                        </div>
                        <div class="boxButtons">    
                            <a href="#algumLugar" class="button"> <img src='./IMAGE/caminhao.png' class="imgButton"/> Enviados </a>
                        </div>
                        <div class="boxButtons">    
                            <a href="#algumLugar" class="button"> <img src='./IMAGE/caixa.png' class="imgButton"/> Devolução </a>
                        </div>
                        <div class="boxButtons">    
                            <a href="#algumLugar" class="button"> <img src='./IMAGE/estrela2.png' class="imgButton"/> Avaliados </a>           
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="box2"> 
            <div class="section"> </div>
        </div>

    </div>

    <footer> 
        <?php include("footer.php"); ?> 
    </footer>
    
</body>
</html>