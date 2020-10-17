const N1 = document.getElementById('numero1');
const N2 = document.getElementById('numero2');
const btnSoma = document.getElementById('btnSoma');
const btnSubtracao = document.getElementById('btnSubtracao');
const btnMultiplicacao = document.getElementById('btnMultiplicacao');
const btnDivisao = document.getElementById('btnDivisao');
const result = document.getElementById('resultado');
//somar
function somar() 
{
  const N1 = parseInt(numero1.value);
  const N2 = parseInt(numero2.value);
  const result  = N1 + N2;
  resultado.value = result;

function limpaCampos() 
{
  N1.value = '';
  N2.value = '';
  result.value = '';
}
//subtrair
function subtracao() 
{
  const N1 = parseInt(numero1.value);
  const N2 = parseInt(numero2.value);
  const result  = N1 - N2;
  resultado.value = result;
}
function limpaCampos() 
{
  N1.value = '';
  N2.value = '';
  result.value = '';
}
//multiplicacao
function multiplicacao() 
{
  const N1 = parseInt(numero1.value);
  const N2 = parseInt(numero2.value);
  const result  = N1 * N2;
  result.value = result;
}
function limpaCampos() 
{
  N1.value = '';
  N2.value = '';
  result.value = '';
}
//divisao
function divisao() 
{
  const N1 = parseInt(numero1.value);
  const N2 = parseInt(numero2.value);
  const result  = N1 / N2;
  resultado.value = result;
}
function limpaCampos() 
{
  N1.value = '';
  N2.value = '';
  result.value = '';
}
}