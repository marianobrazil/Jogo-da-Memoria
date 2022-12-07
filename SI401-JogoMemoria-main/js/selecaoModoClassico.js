const myForm = document.querySelector('.formSelecaoModoClassico');
const selectTabuleiro = document.querySelector('.selectdimensao');

const salvarTabuleiro = (event) => {
    event.preventDefault();
    localStorage.setItem('tabuleiro', selectTabuleiro.value);
    var today = new Date();
    var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
    var seconds = today.getSeconds() <= 9 ? '0' + today.getSeconds() : today.getSeconds();
    var time = today.getHours() + ':' + today.getMinutes() + ':' + seconds;
    localStorage.setItem('dataJogo', date + ' ' + time);
    localStorage.removeItem('tempoUsado');
    localStorage.removeItem('statusVitoria');

    window.location = 'modoClassico.php';
}

myForm.addEventListener('submit', salvarTabuleiro);
