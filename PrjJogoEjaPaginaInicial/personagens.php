<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personagens</title>
    <link rel="stylesheet" href="CSS/personagem.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux&family=Comfortaa:wght@300..700&family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Julius+Sans+One&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mozilla+Text:wght@200..700&family=Parkinsans:wght@300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>



<body>
    <div class="selecao-jogadores">
      <h1 class="titulo">Selecione o número de jogadores: (1 a 4)</h1>
      <input class="input" type="number" id="numJogadores" min="1" max="4" value="0">
    </div>
    
    <form action="" method="post" class="card-form">
      <h1>Escolha seus personagens</h1>
      <section class="secao_personagem">

        <div class="card" data-valor="Mulher Negra">
          <img class="image" src="IMAGE/MulherNegra.png" alt="Mulher Negra">
          <h1>Mulher Negra</h1>
        </div>

        <div class="card" data-valor="Idoso">
          <img class="image" src="IMAGE/Idoso.png" alt="Idoso">
          <h1>Idoso</h1>
        </div>

        <div class="card" data-valor="Mãe Solteira">
          <img class="image" src="IMAGE/MulherGravida.png" alt="Mãe Solteira">
          <h1>Mãe Solteira</h1>
        </div>

        <div class="card" data-valor="Retirante">
          <img class="image" src="IMAGE/Retirante.png" alt="Retirante">
          <h1>Retirante</h1>
        </div>

        <div class="card" data-valor="Homem Trans">
          <img class="image" src="IMAGE/HomemTrans.png" alt="Homem Trans">
          <h1>Homem Trans</h1>
        </div>

        <div class="card" data-valor="Deficiente Fisico">
          <img class="image" src="IMAGE/Deficiente.png" alt="Deficiente Fisico">
          <h1>Deficiente Físico</h1>
        </div>

      </section>

      <div id="inputs-selecionados"></div>

      <button class="submit" type="submit">Salvar Selecionados</button>
    </form>

    <?php
        include("conexaoPaginaInicial.php");

        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['personagens'])) {
            $personagens = $_POST['personagens'];

            $stmt = $pdo->prepare("INSERT INTO tbPersonagemSelecionado (nomePersonagemSelcionado) VALUES (:nome)");

            foreach ($personagens as $p) {
                $stmt->execute([':nome' => $p]);
            }

            echo "Personagens adicionados com sucesso!";
            header("Location: index.php");
            exit();
        }
    ?>

    <script src="JS/script.js"></script>
    </form>
</body>
</html>