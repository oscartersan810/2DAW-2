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

