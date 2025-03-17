<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux&family=Comfortaa:wght@300..700&family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Parkinsans:wght@300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
    <h1 class='titulo'> Números de 1 a 100 </h1>

    <section class="container">
        <?php
            for ($i = 1; $i < 101; $i++) {
                if($i%2 == 0){
                    echo "<h1 class='pares'> $i</h1>";
                }else{
                    echo "<h1 class='impares'> $i</h1>";
                }
            }
        ?>
    </section>

    
</body>
</html>