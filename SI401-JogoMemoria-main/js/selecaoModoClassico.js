const myForm = document.querySelector('.formSelecaoModoClassico');
const selectTabuleiro = document.querySelector('.selectdimensao');

const salvarTabuleiro = (event) => {
    event.preventDefault();
    localStorage.setItem('tabuleiro',selectTabuleiro.value);
    window.location = 'modoClassico.html';
}

myForm.addEventListener('submit', salvarTabuleiro);
