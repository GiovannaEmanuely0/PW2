<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <link rel="stylesheet" href="CSS/slider.css">
    <script src="JS/slide.js" defer></script>
</head>
<body>
     <section class="slider">
        <div class="conteudo_slide">
            <input type="radio" name="button-radio" id="radio1">
            <input type="radio" name="button-radio" id="radio2">
            <input type="radio" name="button-radio" id="radio3">

            <div class="slide primeiro">
                <img class="img_slide" src="https://assets.multiplan.com.br/Multiplan/filer_public/eb/e2/ebe20ceb-3cc4-47bc-aeb8-3ecda3b3e248/sacada.jpg?ims=x800" alt="grade1">
            </div>

            <div class="slide">
                <img class="img_slide" src="https://varejodemoda.com.br/wp-content/uploads/2021/04/primeira-compra-arara-de-roupas-1024x521.jpg" alt="grade2">
            </div>

            <div class="slide">
                <img class="img_slide" src="https://crfa7.com.br/wp-content/uploads/2024/10/moda-evangelica-3.png" alt="grade3">
            </div>

            <div class="nav_auto">
                <div class="auto_btn1"></div>
                <div class="auto_btn2"></div>
                <div class="auto_btn3"></div>
            </div>

            <div class="nav_manual">
                <label for="radio1" class="manual_btn"></label>
                <label for="radio2" class="manual_btn"></label>
                <label for="radio3" class="manual_btn"></label>
            </div>

        </div>
    </section>
</body>
</html>