<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícia</title>
    <link rel="stylesheet" href="CSS/OnlyNotice.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux&family=Comfortaa:wght@300..700&family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Julius+Sans+One&family=Parkinsans:wght@300..800&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php
        $array1 = Array();
        $array1[0] = "Ameaça ao tráfego de navios e pressão no Irã: como Trump justifica o ataque aos Houthis";
        $array1[1] = "Vaticano divulga foto do Papa Francisco celebrando missa em hospital após um mês internado";
        $array1[2] = "Para quem vai fortuna de US$ 80 mi de Gene Hackman, que tirou filhos do testamento?";
        $array1[3] = "Gilberto Gil revê a obra no espelho do ‘tempo rei’ em show que destaca o período 1965–1984 no roteiro de hits";
    
        $array3= Array();
        $array3[0] = "Segundo o presidente americano, ataques contra os rebeldes visam proteger o transporte marítimo americano e restaurar a liberdade de navegação. Trump prometeu responsabilizar o Irã pelas ações dos Houthis.";
        $array3[1] = "Pontífice aparece celebrando a Santa Missa na capela do apartamento localizado no décimo andar do hospital Policlínico Gemelli, em Roma, na Itália.";
        $array3[2] = "Especialistas jurídicos declararam que, dado que as autoridades concluíram que Arakawa morreu sete dias antes de seu marido, os filhos de Hackman poderiam herdar sua fortuna, apesar de não figurarem no testamento.";
        $array3[3] = "Abertura da turnê “Tempo Rei” aconteceu neste sábado (15), na Arena Fonte Nova.";
    
        $array2 = Array();
        $array2[0] = "https://www.francetvinfo.fr/pictures/FCFRP5QTW4CjWOiM8yAIX5AciOQ/908x510/2023/12/14/gaza-israel-hamas-657aea21d0be0271019921.jpg";
        $array2[1] = "https://s2-g1.glbimg.com/piAioW8j9dHNyJ3lnUDy9CKFYes=/0x0:1280x960/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2025/F/7/1CSZ80TBmtg8cYvX6RVw/gmlj2tsboaa2pon.jpeg";
        $array2[2] = "https://s2-g1.glbimg.com/UcdSfZK0Evnb3lEdWqAsJVgSXzo=/0x0:640x360/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2025/Z/W/Z1PXkgSqSegon3ul9bzQ/thumbnail-image001-21-.png";
        $array2[3] = "https://s2-g1.glbimg.com/gMEhwL3x7cTtEO04UNaYfyxHmtA=/0x0:640x716/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2025/B/A/6Hmz2FQSegiF5cDK3FCQ/gilpridia.jpg";
    
        $array4 = Array();
        $array4[0] = "O presidente dos EUA, Donald Trump disse ter ordenado, neste sábado (15), ataques aéreos contra rebeldes Houthis, grupo apoiado pelo Irã no Iêmen e mandou um aviso a Teerã (veja mapa mais abaixo).Pelo menos 31 pessoas morreram e 101 ficaram feridas nos ataques americanos, de acordo com o Ministério da Saúde administrado pelos rebeldes. Um vídeo obtido pela Reuters mostra fumaça na capital do Iêmen, Sana (veja acima). </br></br>
        Em outubro de 2023, após o início da guerra entre o Hamas e Israel, o grupo rebelde começou a atacar navios militares e comerciais em um dos corredores de navegação mais movimentados do mundo. Os alvos eram embarcações de Israel e de seus aliados — em especial os Estados Unidos e o Reino Unido —, alegando solidariedade aos palestinos. Desde então, mais de 100 ataques foram realizados contra navios mercantes e militares. Dois deles afundaram, e quatro marinheiros foram mortos. </br></br>
        As ofensivas foram interrompidas com o atual cessar-fogo em Gaza, que entrou em vigor em janeiro.Mas, na quarta-feira (12), os Houthis anunciaram que voltariam a abrir fogo, depois de Israel interromper a ajuda humanitária a Gaza para pressionar o Hamas durante as negociações do cessar-fogo.A ofensiva focaria nos mares Vermelho e Arábico, pelo Estreito de Bab al-Mandab e pelo Golfo de Áden, rotas que vão da Índia até o Egito e ligam a Ásia à África.";
    
        $array4[1]="O Vaticano divulgou neste domingo (16) a primeira foto do Papa Francisco desde que ele iniciou seu tratamento médico há mais de um mês (veja ABAIXO). Na imagem, o Pontífice aparece de costas celebrando a Santa Missa na capela do apartamento localizado no décimo andar do hospital Policlínico Gemelli, em Roma, na Itália. A foto, publicada pela Sala de Imprensa da Santa Sé, mostra o Santo Padre de 88 anos em um momento de oração durante a celebração eucarística. </br></br>
        Na última sexta-feira (14), o Vaticano anunciou que forneceria atualizações médicas sobre o papa com menos frequência, após o 'desenvolvimento positivo' do quadro. Os avisos matinais de que Francisco havia dormido bem também foram interrompidos.Os médicos disseram que o pontífice não está mais em estado crítico — mas enfatizaram que, ainda assim, as condições de saúde continuam complexas (devido à sua idade, à falta de mobilidade e à perda de parte de um pulmão quando era jovem).";
    
        $array4[2] = "O testamento do lendário ator norte-americano Gene Hackman foi publicado, mas persiste a incerteza sobre o destino de sua fortuna, calculada em cerca de US$ 80 milhões (ou cerca de R$ 460 milhões).Hackman, que foi vencedor do Oscar duas vezes, deixou todos os seus bens para sua esposa, Betsy Arakawa, com quem foi casado por 30 anos. </br></br>
        No entanto, Arakawa, de 65 anos, foi encontrada morto junto com o ator em sua casa do Novo México no mês passado. Especialistas jurídicos declararam que, dado que as autoridades concluíram que Arakawa morreu sete dias antes de seu marido, os filhos de Hackman poderiam herdar sua fortuna, apesar de não figurarem no testamento.Os três filhos que o ator teve com sua falecida ex-esposa, Faye Maltese – Christopher, 65, Elizabeth, 62, e Leslie, 58 – não fizeram declarações públicas sobre o assunto.";
    
        $array4[3] = "Gilberto Gil faz 83 anos em 26 de junho, daqui a três meses. Mas ontem, 30 de março, no palco da Farmasi Arena, foi se como o Buda nagô – epíteto que Gil criou para Dorival Caymmi (1914 – 2008) em 1992 e que já personifica o próprio Gil – fosse o bebê com bumbum que cheira a talco na magia da cena. Sim, no arco retrospectivo do show Tempo rei, o artista transcende os ciclos da vida com o fogo eterno do palco. </br></br>
        Ao longo de duas horas e meia de show, o cantor, compositor e músico baiano celebrou a grandeza de obra autoral construída desde 1962 na cidade natal de Salvador (BA), capital da Bahia que não lhe sai do pensamento – como sublinhou ao sair do palco ao fim do bis, após cair no samba Aquele abraço (1969), com citação instrumental de Na Baixa do Sapateiro (Ary Barroso, 1938).";
    
        $id = Array();
        $id[0] = 1;
        $id[1] = 2;
        $id[2] = 3;
        $id[3] = 4;
        $x = $_GET['id'];
    ?>
    <header class="cabeca">
        <?php include('menu.php'); ?>
    </header>
    <div class="container">
            <h1><?php echo $array1[$x]?></h1>
            <h2><?php echo $array3[$x]?></h2>
            <?php echo "<img class='image' src= '$array2[$x]'/>"?>                 
            <p class="texto"><?php echo $array4[$x]?></p>
    </div>
    <footer class="rodape">
        <?php include('rodape.php');?>
    </footer>
    
</body>
</html>


