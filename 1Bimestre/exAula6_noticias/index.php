<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux&family=Comfortaa:wght@300..700&family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Julius+Sans+One&family=Parkinsans:wght@300..800&display=swap" rel="stylesheet">
</head>
<body>
        <header class='cabeca'>
            <ul>
                <li>Esportes</li>
                <li>Celebridades</li>
                <li>Jornalismo</li>
                <li>Receitas</li>
                <!-- <li><img class='home' src="IMAGE/home.png" alt=""></li> -->
            </ul>
        </header>
            <h1> Últimas Notícias </h1>
        <?php

            /* Criar 1 vetor pro TÍTULO, 1 vetor pra IMAGEM e 1 vetor pra DESC*/

            $array1 = Array();
                $array1[0] = "Ameaça ao tráfego de navios e pressão no Irã: como Trump justifica o ataque aos Houthis";
                $array1[1] = "Vaticano divulga foto do Papa Francisco celebrando missa em hospital após um mês internado";
                $array1[2] = "Para quem vai fortuna de US$ 80 mi de Gene Hackman, que tirou filhos do testamento?";
                $array1[3] = "Gilberto Gil revê a obra no espelho do ‘tempo rei’ em show que destaca o período 1965–1984 no roteiro de hits";
            
            $array2 = Array();
                $array2[0] = "https://www.francetvinfo.fr/pictures/FCFRP5QTW4CjWOiM8yAIX5AciOQ/908x510/2023/12/14/gaza-israel-hamas-657aea21d0be0271019921.jpg";
                $array2[1] = "https://s2-g1.glbimg.com/piAioW8j9dHNyJ3lnUDy9CKFYes=/0x0:1280x960/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2025/F/7/1CSZ80TBmtg8cYvX6RVw/gmlj2tsboaa2pon.jpeg";
                $array2[2] = "https://s2-g1.glbimg.com/UcdSfZK0Evnb3lEdWqAsJVgSXzo=/0x0:640x360/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2025/Z/W/Z1PXkgSqSegon3ul9bzQ/thumbnail-image001-21-.png";
                $array2[3] = "https://s2-g1.glbimg.com/gMEhwL3x7cTtEO04UNaYfyxHmtA=/0x0:640x716/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2025/B/A/6Hmz2FQSegiF5cDK3FCQ/gilpridia.jpg";
            
            $array3 = Array();
                $array3[0] = "Segundo o presidente americano, ataques contra os rebeldes visam proteger o transporte marítimo americano e restaurar a liberdade de navegação. Trump prometeu responsabilizar o Irã pelas ações dos Houthis.";
                $array3[1] = "Pontífice aparece celebrando a Santa Missa na capela do apartamento localizado no décimo andar do hospital Policlínico Gemelli, em Roma, na Itália.";
                $array3[2] = "Especialistas jurídicos declararam que, dado que as autoridades concluíram que Arakawa morreu sete dias antes de seu marido, os filhos de Hackman poderiam herdar sua fortuna, apesar de não figurarem no testamento.";
                $array3[3] = "Abertura da turnê “Tempo Rei” aconteceu neste sábado (15), na Arena Fonte Nova.";
        ?>
         <!-- Imagem da G1 Globo - O portal de notícias da Globo -->
        <div class="container">
            <?php
                for ($i = 0; $i<count($array1); $i++) {
                    echo "
                            <figure class='item'>
                                <img src= '$array2[$i]' id='imagem'/>
                                <figcaption>
                                    <h2>$array1[$i]</h2>
                                    <p id='display'>$array3[$i]</p> 
                                </figcaption>
                            </figure>
                                    ";
                }
            ?>
        </div>
        <!-- //<button id='botao' type='button'>Mais</button> -->
</body>
</html>