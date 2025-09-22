<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perseverança - um jogo EJA</title>
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux&family=Comfortaa:wght@300..700&family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Julius+Sans+One&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mozilla+Text:wght@200..700&family=Parkinsans:wght@300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=person" />
</head>
<body>
    <header class="header">
        <ul>
            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" ><path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm70-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z"/></svg></a></li>
            <li onclick="popUp()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" ><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
        </ul>
    </header>
    <section class="conteiner">
        <div id="menu" class="invisivel">
            <h1 style="font-weight: bold;">COMO JOGAR:</h1>
            <p>1. Escolha o número de jogadores (1 a 4).</p>
            <p>2. Cada jogador deve escolher um personagem.</p>
            <p>3. Clique no dado para jogar.</p>
            <img class="dado_exemplo" src="https://www.tudodesenhos.com/uploads/images/9620/dois-dados.png" alt="dado">
            <p>4. Avance no tabuleiro conforme o número sorteado.</p>
            <p>5. No tabuleiro há casas com desafios.</p>
            <p>6. O objetivo é chegar até a linha de chegada.</p>

        </div>
        <div class="configure">
            <img class="logo" src="IMAGE/pixel_art_large.png" alt="logo">
        </div>
        <div class="principal active">
            <button id="iniciar_jogo" type="button">INICIAR</button>
            <button id="mostrar_personagens" type="button"><a href="personagens.php">ESCOLHA O AVATAR</a></button>
            <button id="continuar_jogo" type="button">CONTINUAR</button>
            <button id="sair_jogo" type="button">SAIR</button>
        </div>
    </section>
    <script src="JS/script1.js"></script>
</body>
</html>