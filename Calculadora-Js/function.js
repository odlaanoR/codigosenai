function Soma() 
{
    let num1 = parseInt(document.getElementById("v1").value);
    let num2 = parseInt(document.getElementById("v2").value);
    let resultado = num1 + num2;
    document.getElementById("res").innerHTML = "Resposta: " + resultado;
    document.getElementById("res").style.color= "red";
}

function Subtrair() 
{
    let num1 = parseInt(document.getElementById("v1").value);
    let num2 = parseInt(document.getElementById("v2").value);
    let resultado = num1 - num2;
    document.getElementById("res").innerHTML = "Resposta: " + resultado;
}

function Multiplicar() 
{
    let num1 = parseInt(document.getElementById("v1").value);
    let num2 = parseInt(document.getElementById("v2").value);
    let resultado = num1 * num2;
    document.getElementById("res").innerHTML = "Resposta: " + resultado;
}

function Dividir() 
{
    let num1 = parseInt(document.getElementById("v1").value);
    let num2 = parseInt(document.getElementById("v2").value);
    let resultado = num1 / num2;
    document.getElementById("res").innerHTML = "Resposta: " + resultado;
}

function troca() 
{
    document.getElementById("mude").innerHTML = "Boa tarde.";
}   

function oculto () {
    document.getElementById("oculto").style="block";
    document.getElementById("oculto").style.color= "purple";
}
function Z() 
{
    let a, b, c;
    a = 12;
    b = 6;
    c = a + b;
    document.getElementById("valorz").innerHTML = "O valor de C é: " + c +".";
}