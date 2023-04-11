
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

const CPF = urlParams.get('cpf')
const Cpf = document.getElementById("cpf")

//verificar se o CPF é valido
function validarCPF(){
    var sum = 0;
    var rest;
    var i;
    var cpf = CPF;
    cpf = cpf.replace(/\./g, '');
    cpf = cpf.replace('-', '');
    cpf = cpf.split('');

    for (i=1; i<=9; i++) sum = sum + parseInt(cpf[i-1]) * (11 - i);
    rest = (sum * 10) % 11;

    if ((rest == 10) || (rest == 11))  rest = 0;
    if (rest != parseInt(cpf[9])) return false;

    sum = 0;
    for (i = 1; i <= 10; i++) sum = sum + parseInt(cpf[i-1]) * (12 - i);
    rest = (sum * 10) % 11;

    if ((rest == 10) || (rest == 11))  rest = 0;
    if (rest != parseInt(cpf[10])) return false;
    return true;
}

if (validarCPF() == false){
    alert("CPF inválido");
    window.location.href = "index.php";
}



