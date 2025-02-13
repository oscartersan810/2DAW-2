function Ej1() {
  console.log("---------------------");
  console.log("EJERCICIO 1");
  alert("Pulsa f12 para ver la consola el resultado del ejercicio");
  let array1 = ["Platanos", "Naranjas", "Pomelos", "Fresas", "Limones"]; //Forma1
  let array2 = new Array(
    "Platanos",
    "Naranjas",
    "Pomelos",
    "Fresas",
    "Limones"
  ); //Forma2
  //Forma 3
  let array3 = [];
  //Asignar valores
  array3[0] = "Platanos";
  array3[1] = "Naranjas";
  array3[2] = "Pomelos";
  array3[3] = "Fresas";
  array3[4] = "Limones";

  console.log("Primera forma: " + array1);
  console.log("Segunda forma: " + array2);
  console.log("Tercera forma: " + array3);
  console.log("Ejemplo forma 3 de la posicion 2 es: " + array3[2]);

  console.log("---------------------");
}

function Ej2() {
  console.log("---------------------");
  console.log("EJERCICIO 2");
  alert("Pulsa f12 para ver la consola el resultado del ejercicio");

  let arrayDisperso = [5, 2, , 3, -2, 7, , 9];
  let suma = 0;
  let numero = 0;

  //foreach es para recorrer el array que hemos creado
  for (let i = 0; i < arrayDisperso.length; i++) {
    numero = arrayDisperso[i];
    suma += numero;
  }
  console.log("Array Disperso: " + arrayDisperso);
  console.log("Suma total de numeros: " + suma);
  console.log("---------------------");
}

function Ej3() {
  console.log("---------------------");
  console.log("EJERCICIO 3");
  alert("Pulsa f12 para ver la consola el resultado del ejercicio");

  let arrayCiudades = ["Hueva", "Sevilla", "Cordoba"];

  console.log("Array original: " + arrayCiudades);

  //Añadir Jaén y Granada al array
  arrayCiudades.push("Jaen");
  arrayCiudades.push("Granada");
  console.log("Array Añadido: " + arrayCiudades);

  //Eliminar el último elemento
  arrayCiudades.pop();
  console.log("Array eliminado último: " + arrayCiudades);
  console.log("---------------------");
}

function Ej4() {
  console.log("---------------------");
  console.log("EJERCICIO 4");
  alert("Pulsa f12 para ver la consola el resultado del ejercicio");

  let arrayCiudades = ["Hueva", "Sevilla", "Cordoba"];

  console.log("Array original: " + arrayCiudades);

  //Añadir al principio
  arrayCiudades.unshift("Cadiz");
  console.log("Array añadido principio: " + arrayCiudades);

  //Eliminar la primera posicion del array
  arrayCiudades.shift();
  console.log("Array eliminado primera palabra: " + arrayCiudades);

  console.log("---------------------");
}

function Ej5() {
  console.log("---------------------");
  console.log("EJERCICIO 5");
  alert("Pulsa f12 para ver la consola el resultado del ejercicio");
  let arrayCiudades = ["Hueva", "Sevilla", "Cordoba"];
  console.log("Array original: " + arrayCiudades);

  //Eliminar la segunda posicion del array que seria la posición 1
  delete arrayCiudades[1];
  console.log("Array Elimina segunda posicion: " + arrayCiudades);
  console.log("---------------------");
}

function Ej6() {
  console.log("---------------------");
  console.log("EJERCICIO 6");
  alert("Pulsa f12 para ver la consola el resultado del ejercicio");
  let arrayCiudades = [
    "Hueva",
    "Sevilla",
    "Cordoba",
    "Jaen",
    "Almeria",
    "Granada",
    "Malaga",
    "Cadiz",
  ];
  console.log("Array original: " + arrayCiudades);

  //Ordenar Alfabéticamente
  arrayCiudades.sort();
  console.log("Array orden alfabetico: " + arrayCiudades);

  //Orden inverso
  arrayCiudades.reverse();
  console.log("Array orden inverso: " + arrayCiudades);

  console.log("---------------------");
}

function Ej7() {
  console.log("---------------------");
  console.log("EJERCICIO 7");
  alert("Pulsa f12 para ver la consola el resultado del ejercicio");
  let frutas = ["Platanos", "Naranjas", "Pomelos", "Fresas"];
  console.log("Array frutas: " + frutas);

  //Eliminar segundo elemento del array
  frutas.splice(1, 1);
  console.log("Array Eliminado: " + frutas);

  //Añadir un elemento
  frutas.splice(1, 0, "Limones");
  console.log("Array añadido: " + frutas);
  console.log("---------------------");
}

function Ej8() {
  console.log("---------------------");
  console.log("EJERCICIO 8");
  alert("Pulsa f12 para ver la consola el resultado del ejercicio");
  let frutas = ["Platanos", "Naranjas", "Pomelos", "Fresas"];
  console.log("Array frutas: " + frutas);

  //Extraer el elemento del array frutas
  let valor = frutas.slice(2, 3);
  console.log("Array extraido: " + valor);
  console.log("---------------------");
}

function Ej9() {
  console.log("---------------------");
  console.log("EJERCICIO 9");
  alert("Pulsa f12 para ver la consola el resultado del ejercicio");

  let frutas = ["Platanos", "Naranjas", "Pomelos"];
  let verduras = ["Cebollas", "Pepinos", "Pimientos"];

  console.log("Frutas: " + frutas);
  console.log("---------------------");
  console.log("Verduras: " + verduras);

  //Concatenar los dos arrays
  let fyv = frutas.concat(verduras);
  console.log("Array Concatenados: " + fyv);
  console.log("---------------------");
}

function Ej10() {
  console.log("---------------------");
  console.log("EJERCICIO 10");
  alert("Pulsa f12 para ver la consola el resultado del ejercicio");

  let frutas = ["Platanos", "Naranjas", "Pomelos"];

  //1er Forma For tradicional
  console.log("Primera forma: ");
  for (let i = 0; i < frutas.length; i++) {
    console.log(frutas[i]);
  }

  //2da Forma For in
  console.log("Segunda forma: ");
  for (let index in frutas) {
    console.log(index + "=> " + frutas);
  }

  //3ra Forma for of
  console.log("Tercera forma: ");
  for (let item of frutas) {
    console.log(item + "=>" + frutas);
  }

  //4ta forma forEach
  console.log("Cuarta forma: ");
  frutas.forEach(function(item,index){
    console.log("item=" + item+ " indice="+index);
  });
  console.log("---------------------");
}

function Ej11() {
  console.log("---------------------");
  console.log("EJERCICIO 11");
  alert("Pulsa f12 para ver la consola el resultado del ejercicio");
  let frutas = ["Platanos", "Naranjas", "Pomelos", "Fresas"];

  for (let i = 0; i < frutas.length; i++) {
    console.log((i+1)+" => "+frutas[i]);
  }

  //Saber en que posicion se sitúa en la palabra introducida
  console.log("La Palabra 'Pomelos' se encuentra en la posición "+frutas.indexOf("Pomelos"));

  console.log("La Palabra 'Sandia' se encuentra en la posicion "+frutas.indexOf("Sandía")); //Devuelve -1
  console.log("---------------------");
}

function Ej12() {
  console.log("---------------------");
  console.log("EJERCICIO 12");
  alert("Pulsa f12 para ver la consola el resultado del ejercicio");
  let frutas = ["Platanos", "Naranjas", "Pomelos", "Fresas"];

  for (let i = 0; i < frutas.length; i++) {
    console.log((i+1)+" => "+frutas[i]);
  }

  //Saber si esa palabra incluye en el array (true/false)
  console.log("La Palabra 'Naranjas' ¿Incluye?: "+frutas.includes("Naranjas"));
  console.log("La Palabra 'Peras' ¿Incluye?: "+frutas.includes("Peras"));

  console.log("---------------------");
}

function Ej13() {
  console.log("---------------------");
  console.log("EJERCICIO 13");
  alert("Pulsa f12 para ver la consola el resultado del ejercicio");

  let numeros1 =  [2, 12, 22, 30, 36];
  console.log("Primer Array: ");

  for (let i = 0; i < numeros1.length; i++) {
    console.log((i+1)+" => "+numeros1[i]);
    
  }

  //Comprobar si todos los numeros del array son pares
  let todosPares1 = numeros1.every(numero => numero %2==0);
  console.log("Primer Array numeros si son todos pares: "+todosPares1); // true

  let numeros2 = [2, 12, 22, 7, 30, 36];
  console.log("Segundo Array: ");

  for (let i = 0; i < numeros2.length; i++) {
    console.log((i+1)+" => "+numeros2[i]);
    
  }
  let todosPares2 = numeros2.every(numero => numero %2==0);
  console.log("Segundo Array numeros si son todos pares: "+todosPares2); //false
  console.log("---------------------");
}

function Ej14() {
  console.log("---------------------");
  console.log("EJERCICIO 14");
  alert("Pulsa f12 para ver la consola el resultado del ejercicio");

  let numeros =  [2, 9, 7, 5.4, 8];
  console.log("Array Numeros: ");

  for (let i = 0; i < numeros.length; i++) {
    console.log((i+1)+" => "+numeros[i]);
  }
  //Utilizando map 
  let cuadrado = numeros.map(numero => numero*numero);

  console.log("Array calculo cuadrado: ")
  for (let i = 0; i < cuadrado.length; i++) {
    console.log((i+1)+" => "+cuadrado[i]);
    
  }
  console.log("---------------------");
}
function Ej15() {
  console.log("---------------------");
  console.log("EJERCICIO 15");
  alert("Pulsa f12 para ver la consola el resultado del ejercicio");

  let numeros =  [2, 7, 22, 3, 30, 17];
  console.log("Array Numeros: ");

  for (let i = 0; i < numeros.length; i++) {
    console.log((i+1)+" => "+numeros[i]);
  }

  //Utilizando filter
  let impares = numeros.filter(numero => numero %2 !==0);

  console.log("Array impares: ")
  for (let i = 0; i < impares.length; i++) {
    console.log((i+1)+" => "+impares[i]);
    
  }
  console.log("---------------------");
}

function Ej16() {
  console.log("---------------------");
  console.log("EJERCICIO 16");
  alert("Pulsa f12 para ver la consola el resultado del ejercicio");

  let numeros =  [2, 12, 7, 22, 3, 30, 17];
  console.log("Array Numeros: ");

  for (let i = 0; i < numeros.length; i++) {
    console.log((i+1)+" => "+numeros[i]);
  }

  //Utilizando find para el primer elemento
  let impar = numeros.find(numero => numero %2 !==0);

  console.log("Primer impar: "+impar);
  console.log("---------------------");
}
function Ej17() {
  console.log("---------------------");
  console.log("EJERCICIO 17");
  alert("Pulsa f12 para ver la consola el resultado del ejercicio");
  let frutas = ["Platanos", "Naranjas", "Pomelos", "Plátanos", "Fresas"];

  for (let i = 0; i < frutas.length; i++) {
    console.log((i+1)+" => "+frutas[i]);
  }

  //Saber en que ultima posicion se sitúa en la palabra introducida
  console.log("La Palabra 'Plátanos' se encuentra en la posición "+frutas.lastIndexOf("Plátanos"));
  console.log("---------------------");
}
