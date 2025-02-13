//Ejercicio 1
function Ej1() {
    let nombre = prompt("Introduzca tu nombre completo");
    let cuentaCaracteres = nombre.length;
    console.log("EJERCICIO 1");
    console.log("Tu nombre: "+nombre);
    console.log("Total caractéres: "+cuentaCaracteres);
}
//Ejercicio 2
function Ej2() {
    let nombre = prompt("Introduzca tu nombre");
    console.log("EJERCICIO 2");
    for (let i = 0; i < nombre.length;  i++) {
        console.log("Caracter "+(i+1)+ " : "+nombre.charAt(i));
        
    }
}
//Ejercicio 3
function Ej3() {
    let nombre = prompt("Introduzca tu nombre");
    console.log("EJERCICIO 3");

    console.log("Cadena en Mayúsculas: "+nombre.toUpperCase());
    console.log("Cadena en Minúsculas: "+nombre.toLowerCase());
}
//Ejercicio 4
function Ej4() {
    let frase = "En un lugar de la Mancha de cuyo nombre no quiero acordarme";

    console.log("EJERCICIO 4");
    alert("Pulsa f12 para ver el resultado");
    console.log("Longitud cadena: "+frase.length);

    //Usando IndexOf
    console.log("La primera palabra 'Mancha' está en la posición: "+frase.indexOf("Mancha"));
    console.log("La primera palabra 'Quijote' está en la posición: "+frase.indexOf("Quijote")); //devolverá -1

    //Usando lastOf
    console.log("La última palabra 'de' está en la posición: "+frase.lastIndexOf("de"));
}
//Ejercicio 5
function Ej5() {
    let frase = "En un lugar de la Mancha de cuyo nombre no quiero acordarme";

    console.log("EJERCICIO 5");
    alert("Pulsa f12 para ver el resultado");
    console.log("Longitud cadena: "+frase.length);

    console.log("Frase: "+frase);

    let buscar = prompt("¿Que palabra quieres extraer?");

    //Usando substring
    //Determinar posiciones de la palabra que quieres buscar
    console.log("Primera posición: "+frase.indexOf(buscar));
    console.log("Última posición: "+(frase.indexOf(buscar) + buscar.length));

    console.log(frase.substring(frase.indexOf(buscar), frase.indexOf(buscar) + buscar.length));

}
//Ejercicio 6
function Ej6() {
    let frase = "En un lugar de la Mancha de cuyo nombre no quiero acordarme";

    console.log("EJERCICIO 6");
    alert("Pulsa f12 para ver el resultado");

    let palabra = prompt("¿Que palabra quieres buscar?");
    let posicion = parseInt(prompt("¿En que posicion se encuentra la palabra '"+palabra+"'?"));

    if (isNaN(posicion)) {
        posicion = 0;
        console.log("La palabra '"+palabra+"' con la posicion "+posicion+": "+frase.includes(palabra, posicion));
    } else{
        console.log("La palabra '"+palabra+"' con la posicion "+posicion+": "+frase.includes(palabra, posicion));
    } 
}
//Ejercicio 7
function Ej7() {
    let frase = "En un lugar de la Mancha de cuyo nombre no quiero acordarme";

    console.log("EJERCICIO 7");
    alert("Pulsa f12 para ver el resultado");

    let palabra = prompt("Introduzca la palabra para saber si termina o no");

    console.log("La palabra introducida '"+palabra+"' termina: "+frase.endsWith(palabra));
}
//Ejercicio 8
function Ej8() {
    let frase = "En un lugar de la Mancha de cuyo nombre no quiero acordarme";

    console.log("EJERCICIO 8");
    alert("Pulsa f12 para ver el resultado");

    let palabra = prompt("Introduzca la palabra para saber si termina o no");
    let remplazo = prompt("Ahora la palabra que deseas reemplazar");

    console.log("Frase Original: "+frase);

    let fraseAc = frase.replace(palabra, remplazo);

    console.log("Frase Actualizada: "+fraseAc);
}
//Ejercicio 9
function Ej9() {
    let palabras = "Cebollas;Patatas;Pimientos;Tomates";

    console.log("EJERCICIO 9");
    alert("Pulsa f12 para ver el resultado");

    console.log("Palabras: "+palabras);

    let arrayPalabras = palabras.split(";");
    console.log(arrayPalabras);
}
//Ejercicio 10
function Ej10() {
    let frase = "En un lugar de la Mancha de cuyo nombre no quiero acordarme";

    console.log("EJERCICIO 10");
    alert("Pulsa f12 para ver el resultado");

    let palabra = prompt("Introduzca la palabra para saber si empieza o no");

    console.log("La palabra introducida '"+palabra+"' empieza: "+frase.startsWith(palabra));
}
//Ejercicio 11
function Ej11() {
    let frase = "En un lugar de la Mancha de cuyo nombre no quiero acordarme";

    console.log("EJERCICIO 11");
    alert("Pulsa f12 para ver el resultado");

    let buscar = prompt("Introduzca la palabra a buscar");
    //Usando substr
    console.log("USANDO SUBSTR");
    console.log("Posicion: "+frase.indexOf(buscar));
    console.log(frase.substr(frase.indexOf(buscar), buscar.length));
    console.log("----------------");

    //Usando susbtring
    console.log("USANDO SUBSTRING");
    console.log("Posición: "+frase.indexOf(buscar));
    console.log(frase.substring(frase.indexOf(buscar) , frase.indexOf(buscar) + buscar.length));
}
//Ejercicio 12
function Ej12() {
    let nombreCompleto = " Javier Soldado ";

    console.log("EJERCICIO 12");
    alert("Pulsa f12 para ver el resultado");

    console.log("Nombre con Espacios: "+nombreCompleto);
    console.log("Nombre sin Espacios: "+nombreCompleto.trim());

}
//Ejercicio 13
function Ej13() {
    let nombre = "Javascript";

    console.log("EJERCICIO 13");
    alert("Pulsa f12 para ver el resultado");

    console.log("La palabra '"+nombre+"' tiene: "+nombre.length);
    console.log("Añadido principio: "+nombre.padStart(15, "#"));
    console.log("Añadido final: "+nombre.padEnd(15, "*"));
}