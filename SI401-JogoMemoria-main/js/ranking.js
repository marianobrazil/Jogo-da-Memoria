let btn2x2 = document.getElementById('span2x2');
let btn4x4 = document.getElementById('span4x4');
let btn6x6 = document.getElementById('span6x6');
let btn8x8 = document.getElementById('span8x8');

var xhttp;

function enviarDados() {
    let dimensao = localStorage.getItem('dimensao');
    alert(dimensao);
    xhttp = new XMLHttpRequest();
    if (!xhttp) {
        alert('Não foi possível criar um objeto XMLHttpRequest.');
        return false;
    }
    
    xhttp.onreadystatechange = mostraResposta;
    xhttp.open('POST', './backend/criartabela.php', true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send('dimensao=' + encodeURIComponent(dimensao));
}

function mostraResposta() {
    try {
        if (xhttp.readyState === XMLHttpRequest.DONE) {
            if (xhttp.status === 200) {
                let resposta = JSON.parse(xhttp.responseText);
                console.log(resposta);
            }
            else {
                alert('Um problema ocorreu.');
            }
        }
    }
    catch (e) {
        alert("Ocorreu uma exceção: " + e.description);
    }
}

const criarTabela = (parametro) => {
    localStorage.setItem('dimensao',`${parametro}`);
    enviarDados();
}

btn2x2.addEventListener("click", function() {
    criarTabela('2x2');
}, false);
btn4x4.addEventListener("click", function() {
    criarTabela('4x4');
}, false);
btn6x6.addEventListener("click", function() {
    criarTabela('6x6');
}, false);
btn8x8.addEventListener("click", function() {
    criarTabela('8x8');
}, false);



