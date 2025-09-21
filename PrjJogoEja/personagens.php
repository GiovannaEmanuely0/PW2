<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personagens</title>
    <link rel="stylesheet" href="CSS/caracter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux&family=Comfortaa:wght@300..700&family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Julius+Sans+One&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mozilla+Text:wght@200..700&family=Parkinsans:wght@300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<?php
    $nomePersonagem = array();
    $imagemPersonagem = array();
    include("conexaoPaginaInicial.php");
    $stmt = $pdo->prepare("SELECT * FROM tbpersonagem");
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $nomePersonagem[] = $row['nomePersonagem'];
        $imagemPersonagem[] = $row['imagemPersonagem'];
    }

?>
<section class="secao">

    <h1 id="numero">Escolha seus personagens</h1>

    <section class="secao_personagem">

        <div>
          <div class="card" data-valor="Mulher Negra" data-img="IMAGE/MulherNegra.png">
            <img class="image" src="IMAGE/MulherNegra.png" alt="Mulher Negra">
          </div>
          <h1><?php echo $nomePersonagem[0] ?></h1>
        </div>

        <div>
          <div class="card" data-valor="Idoso" data-img="IMAGE/Idoso.png">
            <img class="image" src="IMAGE/Idoso.png" alt="Idoso">
          </div>
          <h1><?php echo $nomePersonagem[1] ?></h1>
        </div>

        <div>
          <div class="card" data-valor="Mulher Grávida" data-img="IMAGE/MulherGravida.png">
            <img class="image" src="IMAGE/MulherGravida.png" alt="Mãe Solteira">
          </div>
          <h1><?php echo $nomePersonagem[2] ?></h1>
        </div>

        <div>
          <div class="card" data-valor="Retirante" data-img="IMAGE/Retirante.png">
            <img class="image" src="IMAGE/Retirante.png" alt="Retirante">
          </div>
          <h1><?php echo $nomePersonagem[3] ?></h1>
        </div>

        <div>
          <div class="card" data-valor="Homem Trans" data-img="IMAGE/HomemTrans.png">
            <img class="image" src="IMAGE/HomemTrans.png" alt="Trans">
          </div>
          <h1><?php echo $nomePersonagem[4] ?></h1>
        </div>

        <div>
          <div class="card" data-valor="Deficiente Físico" data-img="IMAGE/Deficiente.png">
            <img class="image" src="IMAGE/Deficiente.png" alt="Deficiente Físico">
          </div>
          <h1><?php echo $nomePersonagem[5] ?></h1>
        </div>

    </section>

        <div class="selecionados">
            <h3 id="cardSelecionado">Selecionado(s): </h3>
        </div>
      </section>
      <script src="JS/script.js"></script>
</body>
</html>