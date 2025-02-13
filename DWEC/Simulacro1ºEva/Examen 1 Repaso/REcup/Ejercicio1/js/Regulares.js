function validaMatricula(matricula) {
    let regexActual = /^\s*(\d{4})-?([BCDFGHJKLMNPRSTVWXYZ]{3})\s*$/;
    
    let regexAntiguo = /^\s*((H|SE|CO|J|AL|GR|MA|CA)-?\d{4}-?([BCDFGHJKLMNPSTVWXYZ]{2}))\s*$/;
    
    let regex = new RegExp(regexActual.source + '|' + regexAntiguo.source);
    
    return regex.test(matricula.trim());
}

function validaHorarioRuiz(hora) {
    
    let regex = /^(0?[8-9]|1[0-4]):[0-5][0-9]$|^1[6-9]:[0-5][0-9]$|^2[0-2]:[0-5][0-9]$/;
    return regex.test(hora);
}

function extraerPalabras(frase) {

    let regex = /\[(.*?)\]/g;
    let palabras = [];
    let match;
    while ((match = regex.exec(frase)) !== null) {
        palabras.push(match[1]);
    }
    return palabras;
}

console.log(validaHorarioRuiz("08:15")); // true
console.log(validaHorarioRuiz("14:30")); // true
console.log(validaHorarioRuiz("16:00")); // true
console.log(validaHorarioRuiz("22:00")); // true
console.log(validaHorarioRuiz("7:45")); // false
console.log(validaHorarioRuiz("15:00")); // false

let frase = "La libertad, [Sancho], es uno de los más [preciosos] dones que a los hombres dieron los [cielos]";
console.log(extraerPalabras(frase)); // ["Sancho", "preciosos", "cielos"]


console.log(validaMatricula("   8020JHS   ")); // true
console.log(validaMatricula("J-7645-U")); // true
console.log(validaMatricula("SE-7645-DU")); // true
console.log(validaMatricula("H-6784-DZ")); // true
console.log(validaMatricula("1234-ABCD")); // false
console.log(validaMatricula("GR-1234-AB")); // false
