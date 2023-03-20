
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

const nome = urlParams.get('nome')
const CPF = urlParams.get('cpf')
let rendimento = urlParams.get('rendimento')

const Nome = document.getElementById("nome")
const Cpf = document.getElementById("cpf")
const Rendimento = document.getElementById("rendimento")
const Aliquota = document.getElementById("aliquota")
const Termo = document.getElementById("termo")


let aliquota;

if ( rendimento <= 22847.76 ) {
    aliquota = 0;
}

else if ( rendimento <= 33919.80 ) {
    aliquota = 7.5
}

else if ( rendimento <= 45012.60 ) {
    aliquota = 15
}

else if ( rendimento <= 55976.16 ) {
    aliquota = 22.5
}

else if ( rendimento > 55976.16 ) {
    aliquota = 27.5
}

let termo = (aliquota/100)*rendimento;

Nome.textContent = nome
Cpf.textContent = CPF
Rendimento.textContent = rendimento
Aliquota.textContent = aliquota
Termo.textContent = termo.toFixed(2)

console.log(aliquota)