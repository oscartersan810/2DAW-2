function correoCorporativo(nombre) {
    let [apellido1, apellido2, nombreC] = nombre.split(";").map(part => part.trim());

    let apellido1SA = quitarAcentos(apellido1.toLowerCase());
    let apellido2SA = quitarAcentos(apellido2.toLowerCase());
    let nombreSA = quitarAcentos(nombreC.toLowerCase());

    //Reemplazar las 'ñ' con la 'n'
    let apellido1F = apellido1SA.replace(/ñ/g, 'n');
    let apellido2F = apellido2SA.replace(/ñ/g, 'n');
    // let nombreF = nombreSA.replace(/ñ/g, 'n');

    //Crear automáticamente el correo corporativo
    let nombreArray = nombreSA.split(' ');
    let nI = '';
    
    if (nombreArray.length > 0) {
        nI += nombreArray.shift().charAt(0);
        nombreArray.forEach(nombre => {
            nI += nombre.charAt(0);
        });
    }
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

// Ejemplos de uso
console.log(correoCorporativo("García; Muñoz; Ana"));
console.log(correoCorporativo("De la Rosa; Sánchez; Juan Miguel"));
console.log(correoCorporativo("Del Corral; De la Torre; Gabriel del Cristo"));
