document.getElementById("exemplo-um").innerHTML = "Inserir texto no exemplo um";

function exemploDois(){
    var nomeElemento = document.getElementsByName("curso");
    console.log(nomeElemento);

    //Tamanho do NodeList
    console.log("Tamanho do NodeList: " + nomeElemento.length);
    //Ler elementos do NodeList individual
    console.log("Elemento da posição 0: " + nomeElemento[0]['value']);
    console.log("Elemento da posição 1: " + nomeElemento[1]['value']);
    console.log("Elemento da posição 2: " + nomeElemento[2]['value']);

    //Ler elementos dinâmicamente
    for(var i = 0; i < nomeElemento.length; i++){
        console.log(nomeElemento[i]['value']);
    }
}

function exemploTres(){
    var nomeTag = document.getElementsByTagName("span");
    console.log(nomeTag);

    //Tamanho do NodeList
    console.log("Tamanho do HTMLCollection: " + nomeTag.length);
    //Ler elementos do NodeList individual
    console.log("Elemento da posição 0: " + nomeTag[0]['innerHTML']);
    console.log("Elemento da posição 1: " + nomeTag[1]['innerHTML']);
    console.log("Elemento da posição 2: " + nomeTag[2]['innerHTML']);

    //Ler elementos dinâmicamente
    for(var i = 0; i < nomeTag.length; i++){
        console.log(nomeTag[i]['innerHTML']);
    }
}

function exemploQuatro(){
    var nomeTagLista = document.getElementsByTagName("li");
    console.log(nomeTagLista);

    //Tamanho do NodeList
    console.log("Tamanho do HTMLCollection: " + nomeTagLista.length);
    //Ler elementos do NodeList individual
    console.log("Elemento da posição 0: " + nomeTagLista[0]['innerText']);
    console.log("Elemento da posição 1: " + nomeTagLista[1]['innerText']);
    console.log("Elemento da posição 2: " + nomeTagLista[2]['innerText']);

    //Ler elementos dinâmicamente
    for(var i = 0; i < nomeTagLista.length; i++){
        console.log(nomeTagLista[i]['innerText']);
    }
}

function exemploCinco(){
    var nomeClasse = document.getElementsByClassName("produto");
    console.log(nomeClasse);

    //Tamanho do NodeList
    console.log("Tamanho do HTMLCollection: " + nomeClasse.length);
    //Ler elementos do NodeList individual
    console.log("Elemento da posição 0: " + nomeClasse[0]['innerText']);
    console.log("Elemento da posição 1: " + nomeClasse[1]['innerText']);
    console.log("Elemento da posição 2: " + nomeClasse[2]['innerText']);

    //Ler elementos dinâmicamente
    for(var i = 0; i < nomeClasse.length; i++){
        console.log(nomeClasse[i]['innerText']);
    }
}