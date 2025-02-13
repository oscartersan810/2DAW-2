function Ej1() {
    console.log("EJERCICIO 1");
    console.log("--------------");
    alert("Pulsa f12 para ver el resultado");

    let n1 = Math.abs(3);
    let n2 = Math.abs(-5);
    let n3 = Math.abs(8);
    let n4 = Math.abs(-3.5);
    let n5 = Math.abs(12.2);
    //Valor absoluto si existe algún numero negativo
    //Lo conviere a positivo, si no se queda tal cual
    console.log("N1: "+n1);
    console.log("N2: "+n2);
    console.log("N3: "+n3);
    console.log("N4: "+n4);
    console.log("N5: "+n5);
    console.log("--------------");
}

function Ej2() {
    console.log("EJERCICIO 2");
    console.log("--------------");
    alert("Pulsa f12 para ver el resultado");

    let numeroPI = Math.PI;

    console.log("El valor PI vale: "+numeroPI);
    console.log("--------------");
}

function Ej3() {
    console.log("EJERCICIO 3");
    console.log("--------------");
    alert("Pulsa f12 para ver el resultado");

    let grados = 30;
    let radianes = grados * (Math.PI / 180);
    let coseno = Math.cos(radianes);

    console.log("Resultado coseno 30: "+coseno);

    grados = 45;
    radianes = grados * (Math.PI / 180);
    coseno = Math.cos(radianes);
    
    console.log("Resultado coseno 45: "+coseno);

    radianes = (Math.PI / 3);
    coseno = Math.cos(radianes);
    
    console.log("Resultado coseno pi/3: "+coseno);
    console.log("--------------");
}

function Ej4() {
    console.log("EJERCICIO 4");
    console.log("--------------");
    alert("Pulsa f12 para ver el resultado");

    let numero = Math.pow(Math.E, 3);

    console.log("Numero E3: "+numero);
    console.log("--------------");
}

function Ej5() {
    console.log("EJERCICIO 5");
    console.log("--------------");
    alert("Pulsa f12 para ver el resultado");

    let n1 = Math.log10(12.5);
    let n2 = Math.log(15.7);

    console.log("log 12.5 base 10: "+n1);
    console.log("log 15.7 neperiano: "+n2);
    console.log("--------------");
}

function Ej6() {
    console.log("EJERCICIO 6");
    console.log("--------------");
    alert("Pulsa f12 para ver el resultado");

    let raizC = Math.sqrt(128.12);

    console.log("Raiz cuadrada de 128.12: "+raizC);
    console.log("--------------");
}

function Ej7() {
    console.log("EJERCICIO 7");
    console.log("--------------");
    alert("Pulsa f12 para ver el resultado");

    let n1 = Math.round(2.7);
    let n2 = Math.round(-2.7);
    let n3 = Math.round(12.4);
    let n4 = Math.round(12.5);
    let n5 = Math.round(-0.6);
    let n6 = Math.round(0.6);

    console.log("N1: "+n1);
    console.log("N2: "+n2);
    console.log("N3: "+n3);
    console.log("N4: "+n4);
    console.log("N5: "+n5);
    console.log("N6: "+n6);
    console.log("--------------");
}

function Ej8() {
    console.log("EJERCICIO 8");
    console.log("--------------");
    alert("Pulsa f12 para ver el resultado");

    let n1 = Math.ceil(2.7);
    let n2 = Math.ceil(-2.7);
    let n3 = Math.ceil(12.4);
    let n4 = Math.ceil(12.5);
    let n5 = Math.ceil(-0.6);
    let n6 = Math.ceil(0.6);

    console.log("N1: "+n1);
    console.log("N2: "+n2);
    console.log("N3: "+n3);
    console.log("N4: "+n4);
    console.log("N5: "+n5);
    console.log("N6: "+n6);
    console.log("--------------");
}

function Ej9() {
    console.log("EJERCICIO 9");
    console.log("--------------");
    alert("Pulsa f12 para ver el resultado");

    let n1 = Math.floor(2.7);
    let n2 = Math.floor(-2.7);
    let n3 = Math.floor(12.4);
    let n4 = Math.floor(12.5);
    let n5 = Math.floor(-0.6);
    let n6 = Math.floor(0.6);

    console.log("N1: "+n1);
    console.log("N2: "+n2);
    console.log("N3: "+n3);
    console.log("N4: "+n4);
    console.log("N5: "+n5);
    console.log("N6: "+n6);
    console.log("--------------");
}

function Ej10() {
    console.log("EJERCICIO 10");
    console.log("--------------");
    alert("Pulsa f12 para ver el resultado");

    let numeros = Math.min(-8.7, 12.5, -12.5);

    console.log("Listado de numeros: -8.7, 12.5, -12.5"); //Deberia salir -12.5
    console.log("Mínimo del listado: "+numeros);
    console.log("--------------");
}

function Ej11() {
    console.log("EJERCICIO 11");
    console.log("--------------");
    alert("Pulsa f12 para ver el resultado");

    let numeros = Math.max(-8.7, 12.5, -12.5);

    console.log("Listado de numeros: -8.7, 12.5, -12.5"); //Deberia salir 12.5
    console.log("Máximo del listado: "+numeros);
    console.log("--------------");
}

function Ej12() {
    console.log("EJERCICIO 12");
    console.log("--------------");
    alert("Pulsa f12 para ver el resultado");

    let dado = Math.floor(Math.random()*6+1);

    console.log("El dado a sacado: "+dado);
    console.log("--------------");
}

function Ej13() {
    console.log("EJERCICIO 13");
    console.log("--------------");
    alert("Pulsa f12 para ver el resultado");

    //Es Math.floor(Math.random()*(max-min)+min)
    let dado = Math.floor(Math.random()*(79-26)+26);

    console.log("Ha salido el: "+dado);
    console.log("--------------");
}

function Ej14() {
    console.log("EJERCICIO 14");
    console.log("--------------");
    alert("Pulsa f12 para ver el resultado");
    
    let numero = Math.PI;
    let decimales = parseInt(prompt("¿Cuantos decimales mostrar?"));

    console.log("Numero: "+numero);
    console.log("Decimales: "+decimales);
    //Redondear y mostrar cantidad decimales
    console.log("Resultado: "+Math.round(numero * Math.pow(10, decimales)) / Math.pow(10, decimales));
    console.log("--------------");
    
}