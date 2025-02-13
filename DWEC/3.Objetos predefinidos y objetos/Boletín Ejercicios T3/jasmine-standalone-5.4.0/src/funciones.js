//Ejercicio 1
function areaPiramide(l, h) {
    if (l<=0 || h<=0) {
        throw new Error("el valor introducido es negativo");
    } else {
        let area = l * (l + Math.sqrt(4 * Math.pow(h, 2) + Math.pow(l, 2)));
        return area;
    }
}

//Ejemplo de uso
console.log("Area de la piramide "+areaPiramide(6.8, 9)); //Debería devolver 177.08303

//Ejercicio 2
function esPrimo(numero) {
    if (numero<=1) {
        return false;
    }
    for (let i = 2; i < numero; i++) {
        if (numero % i == 0) return false;
    }

    return true;
}
function filtrarPrimosMayoresOnce(numeros) {
    return numeros.filter(n => esPrimo(n) && n > 11);
}

//Ejemplos de uso
let listaN = [6, 11, 18, 43, 8, 5, 45, 53, 9, 7, 24, 23];
let primosN = filtrarPrimosMayoresOnce(listaN);

console.log("Numeros Primos: ");

primosN.forEach(elemento => {
    console.log(elemento); //Debería devolver el array [23, 43, 53]
});

//Ejercicio 3
function numeroDiasFechas(fecha1, fecha2) {
    
}
