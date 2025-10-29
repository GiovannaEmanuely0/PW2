<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="CSS/index2.css"> -->
</head>
<body>
    <header>
        <?php include('header.php')?>
    </header>

    <?php include('slider.php')?>

    <h1 style="text-align: center;">NOVIDADES</h1>
    <section class="secao_card1">
      <?php 
           include("POO/exibirProduto.php");
      ?>
    </section>

    <br><br><br>

    <footer>
        <?php include('footer.php')?>
    </footer>
</body>
</html>