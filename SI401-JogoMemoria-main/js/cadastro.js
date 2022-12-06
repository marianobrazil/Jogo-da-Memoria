
// const btnSubmit = document.querySelector('.botao');
// const cpf = document.getElementsByName('cpf');
// btnSubmit.addEventListener('click',TestaCPF(cpf));

const btnSubmit = document.getElementById('btnSubmit');


btnSubmit.addEventListener('click', function (e) {
    const nome = document.getElementById('nome').value;
    const dtNasc = document.getElementById('dtNasc').value;
    const cpf = document.getElementById('cpf').value;
    const tel = document.getElementById('tel').value;
    const email = document.getElementById('email').value;
    const usuario = document.getElementById('usuario').value;
    const senha = document.getElementById('senha').value;
    const senha2 = document.getElementById('senha2').value;
    let event = e;
    if((nome,dtNasc,cpf,tel,email,usuario,senha,senha2) != ""){
        e.preventDefault();
        if(senha != senha2){
            alert("Senhas não coincidem!");
        }
        else if(!TestaCPF(cpf)){
            alert("CPF Inválido!");
        }
        else{
            window.location = '../index.html';
        }
    }
});

function TestaCPF(strCPF) {
    strCPF = strCPF.toString()
    var Soma;
    var Resto;
    Soma = 0;
    if (strCPF == "00000000000") return false;

    for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10))) return false;

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11))) return false;
    return true;
}