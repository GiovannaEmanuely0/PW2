document.addEventListener('DOMContentLoaded', () => {

    const cards = document.querySelectorAll('.card');
    const numJogadoresInput = document.getElementById('numJogadores');
    const container = document.getElementById("inputs-selecionados");
    let selecionadosCount = 0;
    let limite = parseInt(numJogadoresInput.value, 10) || 0;

    function updateSelecionadosCount() {
        selecionadosCount = document.querySelectorAll('.card.selecionado').length;
    }

    //   cards.forEach(card => {
    // card.addEventListener('click', () => {
    //   card.classList.toggle('selecionado');
    //     });
    // });

    numJogadoresInput.addEventListener('input', () => {
        let novoLimite = parseInt(numJogadoresInput.value, 10);

        if (isNaN(novoLimite) || novoLimite < 1) {
            limite = 0;
        } else if (novoLimite > 4) {
            limite = 4;
            numJogadoresInput.value = 4;
        } else {
            limite = novoLimite;
        }

        const cardsSelecionadas = document.querySelectorAll('.card.selecionado');
        if (cardsSelecionadas.length > limite) {
            for (let i = cardsSelecionadas.length - 1; i >= limite; i--) {
                cardsSelecionadas[i].classList.remove('selecionado');

                // Remove input hidden correspondente
                const nomeRemover = cardsSelecionadas[i].dataset.valor;
                const inputRemover = container.querySelector(`input[value="${nomeRemover}"]`);
                if (inputRemover) container.removeChild(inputRemover);
            }
            updateSelecionadosCount();
        }
    });

    cards.forEach(card => {
        card.addEventListener('click', () => {
            const isSelected = card.classList.contains('selecionado');

            if (isSelected) {
                card.classList.remove('selecionado');

                // Remove input hidden correspondente
                const nomeRemover = card.dataset.valor;
                const inputRemover = container.querySelector(`input[value="${nomeRemover}"]`);
                if (inputRemover) container.removeChild(inputRemover);

            } else {
                if (selecionadosCount < limite) {
                    card.classList.add('selecionado');

                    // Cria input hidden para envio via formulário
                    const nome = card.dataset.valor;
                    if (!container.querySelector(`input[value="${nome}"]`)) {
                        const input = document.createElement("input");
                        input.type = "hidden";
                        input.name = "personagens[]";
                        input.value = nome;
                        container.appendChild(input);
                    }

                } else {
                    if (limite === 0) {
                        alert("Por favor, digite quantos jogadores irão jogar (1-4).");
                    } else {
                        alert(`Você só pode selecionar no máximo ${limite} personagens.`);
                    }
                }
            }

            updateSelecionadosCount();
        });
    });

    // Remove chamada de função inexistente
    // updateMaxCharacters(); → removido
});