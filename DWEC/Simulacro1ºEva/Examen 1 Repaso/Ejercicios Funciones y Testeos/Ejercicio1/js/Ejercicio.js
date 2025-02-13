//Función para comprobar si el número es par o no
function esPar(n) {
  return n % 2 == 0;
}
//Funcion prueba 1
function test1() {
  let ve = [1, 2, 5, 8, 9, 12, 16];
  let ves = [false, true, false, true, false, true, true];

  for (let i = 0; i < ve.length; i++) {
    let r = esPar(ve[i]);
    console.log(
      "Número: " + ve[i] + ", Es par: " + r + ", Esperado: " + ves[i]
    );
  }
}

//Funcion prueba 2
function test2() {
  for (let i = 0; i <= 100; i++) {
    let r = esPar(i);
    if (r != (i % 2 == 0)) {
      console.log("El Test a fallado para el número: " + i);
    }
  }
  console.log("El Test se ha completado con éxito. ");
}
//Función para comprobar la si el número introducido es par o impar
function comprobarP() {
  let n = parseInt(prompt("Introduzca un número entero: "));
  let par = esPar(n);
  alert("El número " + n + " es " + (par ? "par" : "impar"));
}

function testear() {
    test1();
    test2();
}
