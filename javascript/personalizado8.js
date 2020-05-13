function nome_funcao(){
    alert("Login ou senha incorreto");
}

function somar(a, b){
    var total = a + b;
    alert("Valor da soma: " + total);
}

function desconto(a, b){
    var totalDesc = a - b;
    return totalDesc;
    //document.write("Valor final com desconto: " + totalDesc);
}

var resultTotalDesc = desconto(7, 5);
document.write("Valor final com desconto fora: " + resultTotalDesc);