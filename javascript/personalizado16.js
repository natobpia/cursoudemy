function carConteudo(){
    document.getElementById("conteudo").innerHTML = "Testando o onClick";
}

function mouseOver(){
    document.getElementById("mouseAlt").innerHTML = "Retire o mouse";
}

function mouseOut(){
    document.getElementById("mouseAlt").innerHTML = "Passe o mouse";
}

function converTexto(){
    var nome = document.getElementById("nome");
    nome.value = nome.value.toUpperCase();
}

function validarSenha(){
    var senha = document.getElementById("senha").value;

    if(senha == "" || senha.length <= 5){
        document.getElementById("erroSenha").innerHTML = "<span style='color:red'>Preencha o campo senha com mínimo 6 caracteres</span>";
    }else{
        document.getElementById("erroSenha").innerHTML = "<span style='color:green'>Senha válida</span>";
    }
}