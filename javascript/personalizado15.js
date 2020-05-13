var frutas = ["Abacate", "Abacaxi", "Amora", "Açaí", "Cereja", "Figo"];

//Contar a quantidade de itens no array
console.log("Quantidade de tipo de frutas: " + frutas.length );

//Acessar primeiro item do array
console.log("Primeiro tipo de fruta: " + frutas[0]);

//Acessar um item do array
console.log("Acessar um item do array: " + frutas[2]);

//Acessar o último item do array
console.log("Último tipo de fruta: " + frutas[frutas.length -1]);

//Adicionar um item no final do array
frutas.push("Maça");

//Adicionar um item no inicio do array
frutas.unshift("Kiwi");

//Remover um item do final do array
frutas.pop();

//Remover um item do inicio do array
frutas.shift();

//Remover um item pela posição do índice
//frutas.splice(pos, n);
//A partir da posição (pos) em direção ao fim do array
//(n) define o número de itens a se remover
frutas.splice(2, 1);

//Ler um array
frutas.forEach(function(item, indice, array){
    console.log(item, indice);
});

var carros = ["Voyage", "Virtus", "Jetta", "A1", "A2", "A3"];

//Adicionar um item no final do array
carros.push("A4");

//Remover um item pela posição do índice
carros.splice(2, 1);

//Ler um array
carros.forEach(function(item, indice, array){
    console.log(item, indice);
});

