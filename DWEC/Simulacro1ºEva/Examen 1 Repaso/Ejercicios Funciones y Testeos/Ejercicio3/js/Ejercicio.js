//Funcion Calificaciones por argumento
function verCalificacionDecimal() {
  let nota = parseFloat(prompt("Introduzca la nota"));
  let nNota = "";

  if (nota < 0 || nota > 10) {
    alert("VALOR INCORRECTO");
  } else if (nota <= 4.9) {
    nNota = "INSUFICIENTE";
  } else if (nota <= 5.9) {
    nNota = "SUFICIENTE";
  } else if (nota <= 6.9) {
    nNota = "BIEN";
  } else if (nota <= 8.9) {
    nNota = "NOTABLE";
  } else {
    nNota = "SOBRESALIENTE";
  }
  alert("Tu nota introducida es: " + nota + ", sería un " + nNota);
}
//Funcion Calificacion Testeo
function verCalificacionDecimalTest(nota) {
  if (nota < 0 || nota > 10) {
    return alert("VALOR INCORRECTO");
  } else if (nota <= 4.9) {
    return "INSUFICIENTE";
  } else if (nota <= 5.9) {
    return "SUFICIENTE";
  } else if (nota <= 6.9) {
    return "BIEN";
  } else if (nota <= 8.9) {
    return "NOTABLE";
  } else {
    return "SOBRESALIENTE";
  }
}
//Funcion Testeo
function test() {
    let notas = [-1.5,0,1,2,3,4.5,4.9,5,5.1,5.9,6,6.1,6.9,7,7.1,7.9,8,8.1,8.9,9,9.1,9.9,10,11];
    let rEsperados = ["VALOR INCORRECTO", "INSUFICIENTE", "INSUFICIENTE", "INSUFICIENTE", "INSUFICIENTE", "INSUFICIENTE", "INSUFICIENTE", "SUFICIENTE", "SUFICIENTE", "SUFICIENTE", "SUFICIENTE", "BIEN", "BIEN", "BIEN", "NOTABLE", "NOTABLE", "NOTABLE", "SOBRESALIENTE", "SOBRESALIENTE", "SOBRESALIENTE", "SOBRESALIENTE", "VALOR INCORRECTO"];

    for (let i = 0; i < notas.length; i++) {
        let r = verCalificacionDecimalTest(notas[i]);
        let e = rEsperados[i];
        
        console.log("Nota: " + notas[i] + ", Resultado: " + r + ", Esperado: " + e);

    }
}