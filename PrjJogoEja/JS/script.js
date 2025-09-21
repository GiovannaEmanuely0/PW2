const cards = document.querySelectorAll('.card');
const resultado = document.getElementById('cardSelecionado');
const selecionados = [];

cards.forEach(card => {
  card.addEventListener('click', () => {
    const valor = card.getAttribute('data-valor');
    const imagem = card.getAttribute('data-img');

    // Evita duplicatas
    if (!selecionados.includes(valor)) {
      selecionados.push(valor);
      atualizarLista();
    }
  });
});

function atualizarLista() {
  resultado.textContent = selecionados.join(', ');
  if(selecionados.length === 4){
    alert("Você selecionou 4 personagens!");
    window.location.href = 'index.php';
  }
}