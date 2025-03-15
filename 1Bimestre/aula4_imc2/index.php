<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="CSS/style2.css">
</head>
<body>
    <header class="cabeca">
        <img class="logo" src="IMAGE/imcLogo.png" alt="logo">
        <h1 class="titulo">Calculadora de IMC - peso ideal</h1>
    </header>
    <section class="secao">
        <div class="principal">
            <form action="recuperar.php" method="post">
                <div class='div'>
                    <label for="input">Peso</label>
                    <input type="text" name="peso">
                    <label for="input">Altura</label>
                    <input type="text" name="altura">
                    <input class="butao" type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </section>
</body>
</html>