var radio = document.querySelector('.manual_btn');
// guardou a navegação manual dentro de uma variável
var contador = 1;
// contador para controlar a imagem atual

document.getElementById('radio1').checked = true;
// o primeiro botão de navegação manual será selecionado por padrão

setInterval(() => {
    proximaImg()
}, 3000)

function proximaImg(){
    contador++;

    if(contador > 3){
        contador = 1;
    }

    document.getElementById('radio'+contador).checked = true;
}