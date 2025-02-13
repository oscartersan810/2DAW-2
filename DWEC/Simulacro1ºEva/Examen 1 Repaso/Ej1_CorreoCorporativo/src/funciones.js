function correosCorporativos(alumnos) {
    return alumnos.map(nombre => correoCorporativo(nombre));
}

function correoCorporativo(nombre) {
    let [apellido1, apellido2, nombreC] = nombre.split(";").map(part => part.trim()); // Eliminar espacios adicionales después de separar

    let apellido1SA = quitarAcentos(apellido1.toLowerCase());
    let apellido2SA = quitarAcentos(apellido2.toLowerCase());
    let nombreSA = quitarAcentos(nombreC.toLowerCase());

    let apellido1F = apellido1SA.replace(/ñ/g, 'n');
    let apellido2F = apellido2SA.replace(/ñ/g, 'n');

    let nombreArray = nombreSA.split(' ');
    let nI = nombreArray.shift().charAt(0) + (nombreArray.length > 0 ? nombreArray.map(nombre => nombre.charAt(0)).join('') : '');
    
    let correo = nI + '.' + apellido1F + '-' + apellido2F + '@iesruizgijon.com';

    return correo;
}

function quitarAcentos(str) {
    let acentos = {
        'á': 'a', 'é': 'e', 'í': 'i', 'ó': 'o', 'ú': 'u',
        'Á': 'A', 'É': 'E', 'Í': 'I', 'Ó': 'O', 'Ú': 'U',
        'ñ': 'n', 'Ñ': 'N'
    };
    return str.replace(/[áéíóúÁÉÍÓÚñÑ]/g, letra => acentos[letra] || letra);
}

// Ejemplo de uso
let alumnos = [
    "García; Muñoz; Ana",
    "De la Rosa; Sánchez; Juan Miguel",
    "Del Corral; De la Torre; Gabriel del Cristo"
];

let correos = correosCorporativos(alumnos);
console.log(correos);
