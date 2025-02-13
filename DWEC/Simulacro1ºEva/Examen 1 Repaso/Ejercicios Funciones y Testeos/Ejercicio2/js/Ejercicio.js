//Función para ver el resultado de la nota
function verCalificacion() {
    let nota = parseInt(prompt("Introduzca tu nota"));
    let nNota = "";

    switch (nota) {
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            nNota = "INSUFICIENTE";
            break;
        case 5:
            nNota = "SUFICIENTE";
            break;
        case 6:
            nNota = "BIEN";
            break;
        case 7:
        case 8:
            nNota = "NOTABLE";
            break;
        case 9:
        case 10:
            nNota = "SOBRESALIENTE";
            break;
        default:
            alert = ("VALOR INCORRECTO");
            break;
    }
   alert("Tu nota introducida es: "+nota+ ", sería un "+nNota);
}
//Función para ver la nota haciendo test
function verCalificacionTest(nota) {
    switch (nota) {
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            return "INSUFICIENTE";
        case 5:
            return "SUFICIENTE";
        case 6:
            return "BIEN";
        case 7:
        case 8:
            return "NOTABLE";
        case 9:
        case 10:
            return "SOBRESALIENTE";
        default:
            return "VALOR INCORRECTO";
    }
}
//Testeo de la nota
function test() {
    for (let i = -1; i <=11; i++) {
        console.log("Nota de "+i+": "+verCalificacionTest(i));
    }
}