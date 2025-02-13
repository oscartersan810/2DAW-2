function numeroLetrasPalabras(palabras) {
    let resultado = palabras.map(function(palabra) {
        return{
            palabra: palabra,
            nLetras: palabra.length
        };
    });

    return resultado;
}
let compruebaPalabra = numeroLetrasPalabras(["jquery", "angular", "ajax"]);
console.log(compruebaPalabra);

function compruebaDivisibilidad(numeros) {
    let resultadoN = numeros.some(function(numero){
        return numero%7===0;
    });
    return resultadoN;
}

console.log(compruebaDivisibilidad([1, 3, 5, 11, 13])); // Devolverá false
console.log(compruebaDivisibilidad([3, 5, 14, 15]));// Devolverá true