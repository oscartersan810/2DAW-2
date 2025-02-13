function Ejercicio1() {
    console.log("Ejercicio 1");
    let array1 = ['Platanos' , 'Naranjas' , 'Pomelos' , 'Fresas' , 'Limones'];
    let array2 = new Array('Platanos', 'Naranjas', 'Pomelos' , 'Fresas' , 'Limones');
    let array3 = [];
    array3.push('Platanos', 'Naranjas', 'Pomelos' , 'Fresas' , 'Limones');
    let array4 = [];
    array4[0] = 'Platanos';
    array4[1] = 'Naranjas';
    array4[2] = 'Pomelos';
    array4[3] = 'Fresas';
    array4[4] = 'Limones';

    console.log("Array1: ", array1);
    console.log("Array2: ", array2);
    console.log("Array3: ", array3);
    console.log("Array4: ", array4);
}
function Ejercicio2() {
    console.log("Ejercicio 2");
    let arrayDisperso = [5,2,,3,-2,7,,9];
    let suma = 0;

    for (let i = 0; i < arrayDisperso.length; i++) {
        if (typeof arrayDisperso[i] === 'number') {
            suma+=arrayDisperso[i];
        }
        
    }
    console.log("La suma de los elementos del array es: ", suma);
}
function Ejercicio3() {
    console.log("Ejercicio 3");
    let arrayAndalucia = ['Huelva' , 'Sevilla' , 'Cordoba'];
    console.log("Array original: ", arrayAndalucia);

    arrayAndalucia.push('Jaen' , 'Granada');
    console.log("Array Actualizado: ", arrayAndalucia);

    arrayAndalucia.pop('Granada');
    console.log("Array Actualizado 2: ", arrayAndalucia);
}
function Ejercicio4() {
    console.log("Ejercicio 4");
    let arrayAndalucia = ['Huelva' , 'Sevilla' , 'Cordoba'];
    console.log("Array original: ", arrayAndalucia);

    arrayAndalucia.unshift('Cadiz');
    console.log("Array añadido: ", arrayAndalucia);

    arrayAndalucia.shift('Cadiz');
    console.log("Array extraido: ", arrayAndalucia);
}
function Ejercicio5() {
    console.log("Ejercicio 5");
    let arrayAndalucia = ['Huelva' , 'Sevilla' , 'Cordoba' , 'Jaen' , 'Almeria' , 'Granada' , 'Malaga' , 'Cadiz'];
    console.log("Array original: ",arrayAndalucia);

    arrayAndalucia.splice(1,1);
    console.log("Array actualizado: ", arrayAndalucia);
    console.log("Posicion 1: ",arrayAndalucia[1]);
}
function Ejercicio6() {
    console.log("Ejercicio 6");
    let arrayAndalucia = ['Huelva' , 'Sevilla' , 'Cordoba' , 'Jaen' , 'Almeria' , 'Granada' , 'Malaga' , 'Cadiz'];
    console.log("Array original: ",arrayAndalucia);

    arrayAndalucia.sort();
    console.log("Array ordenado: ", arrayAndalucia);

    arrayAndalucia.reverse();
    console.log("Array ordenado: ", arrayAndalucia);
}
function Ejercicio7() {
    console.log("Ejercicio 7");
    let arrayFrutas = ['Platanos' , 'Naranjas' , 'Pomelos' , 'Fresas'];
    console.log("Array original: ",arrayFrutas);

    arrayFrutas.splice(1,1);
    console.log("Array actualizada: ",arrayFrutas);

    arrayFrutas.splice(1,0,'Limones');
    console.log("Array Actualizado 2: ",arrayFrutas);
}
function Ejercicio8() {
    console.log("Ejercicio 8");
    let arrayFrutas = ['Platanos' , 'Naranjas' , 'Pomelos' , 'Fresas'];
    console.log("Array original: ",arrayFrutas);

    let terceraFruta = arrayFrutas.slice(2,3);
    console.log("Tercera fruta: ",terceraFruta);

    console.log("Array sin modificar: ",arrayFrutas);
}
function Ejercicio9() {
    console.log("Ejercicio 9");
    let arrayFrutas = ['Platanos' , 'Naranjas' , 'Pomelos'];
    console.log("Array Frutas: ", arrayFrutas);

    let arrayVerduras = ['Cebollas' , 'Pepinos'];
    console.log("Array Verduras: ", arrayVerduras);

    let arrayAlimentos = arrayFrutas.concat(arrayVerduras);
    console.log("Array Alimentos: ",arrayAlimentos);
}
function Ejercicio10() {
    console.log("Ejercicio 10");
    let arrayFrutas = ['Platanos' , 'Naranjas' , 'Pomelos'];

    console.log("Primera forma For normal");
    for (let i = 0; i < arrayFrutas.length; i++) {
        console.log(arrayFrutas[i]);
    }

    console.log("Segunda forma For of");
    for (const fruta of arrayFrutas) {
        console.log(fruta);
    }

    console.log("Tercera forma forEach()");
    arrayFrutas.forEach(function(fruta) {
        console.log(fruta);
    })

    console.log("Ultima forma funcion map");
    arrayFrutas.map(function(fruta) {
        console.log(fruta);
    })
}
function Ejercicio11() {
    console.log("Ejercicio 11");
    let arrayFrutas = ['Platanos' , 'Naranjas' , 'Pomelos' , 'Fresas'];
    console.log("Array original: ",arrayFrutas);

    console.log("Pomelos: ",arrayFrutas.indexOf('Pomelos'));
    console.log("Sandias: ",arrayFrutas.indexOf('Sandias'));
}
function Ejercicio12() {
    console.log("Ejercicio 12");
    let arrayFrutas = ['Platanos' , 'Naranjas' , 'Pomelos' , 'Fresas'];
    console.log("Array original: ",arrayFrutas);

    console.log("Pomelos: ",arrayFrutas.includes('Pomelos'));
    console.log("Peras: ",arrayFrutas.includes('Peras'));
}
function Ejercicio13() {
    console.log("Ejercicio 13");
    let numeros1 = [2,12,22,30,36];

    function paresArray(numeroP) {
        return numeroP % 2 == 0;
    }
    console.log("Array1 Pares: ", numeros1.every(paresArray));

    let numeros2 = [2,12,22,7,30,36];

    console.log("Array2 Pares: ", numeros2.every(paresArray));
}
function Ejercicio14() {
    console.log("Ejercicio 14");
    let numeros = [2,9,7,5.4,8];

    let cuadrados = numeros.map(function(numero) {
        return numero * numero
    })

    console.log(cuadrados);
}
function Ejercicio15() {
    console.log("Ejercicio 15");
    let numeros = [2,7,22,3,30,17];

    function imparesArray(numero) {
        return numero % 2 !== 0;
    }

    console.log("Array impares: ", numeros.filter(imparesArray));
}
function Ejercicio16() {
    console.log("Ejercicio 16");
    let numeros = [2,12,7,22,3,30,17];

    function primerImpar(numero) {
        return numero % 2 !== 0;
    }
    console.log("Array Primer Impar: ",numeros.find(primerImpar));
}
function Ejercicio17() {
    console.log("Ejercicio 17");
    let arrayFrutas = ['Platanos' , 'Naranjas' , 'Pomelos' ,'Platanos', 'Fresas'];
    console.log("Array original: ",arrayFrutas);

    console.log("Platanos: ",arrayFrutas.lastIndexOf('Platanos'));
}