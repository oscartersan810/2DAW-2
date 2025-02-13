function comprobarEsPar(numero) {
    return numero % 2 == 0;
}

function verCalificacion(nota) {
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

function verCalificacionDecimal(nota) {

    if (nota>=0 && nota<5) {
        return "INSUFICIENTE";
    } else if (nota>=5 && nota<6) {
        return "SUFICIENTE";
    } else if (nota>=6 && nota<7) {
        return "BIEN";
    } else if (nota>=7 && nota<9) {
        return "NOTABLE";
    } else if (nota>=9 && nota<11) {
        return "SOBRESALIENTE"
    } else {
        return "VALOR INCORRECTO";
    }
    
}

function parametrosCircunferencia(radio) {
    let area = (Math.PI * Math.pow(radio, 2));
    let perimetro = ((Math.PI * Math.PI) * radio);

    return {Perimetro:  perimetro, Area: area};

}

function esBisiesto(numero) {
    if (numero % 4 == 0) {
        if (numero % 100 == 0) {
            return numero % 400 == 0;
        }
        return true;
    }
    return false;
}

function digitoHexa2Dec(digito) {
    let valor = parseInt(digito, 16);
    if (isNaN(valor)) throw new Error("Dígito hexadecimal no válido");
    return valor;
}

function hexa2decimal(hexadecimal) {
    let decimal = 0;
    for (let i = 0; i < hexadecimal.length; i++) {
        decimal = decimal * 16 + digitoHexa2Dec(hexadecimal[i]);
    }
    return decimal;
}

//Crea una función llamada bonoloto() que devuelva un array de 6 numeros aleatorios entre 1 y 49 no repetidos. 

function bonoloto() {
    let numeros = [];
    
    while (numeros.length < 6) {
        let num = Math.floor(Math.random() * 49) + 1; 
        if (!numeros.includes(num)) {
            numeros.push(num); 
        }
    }
    
    return numeros.sort((a, b) => a - b); 
}

function promedio(numeros) {
    if (!Array.isArray(numeros)) {
        throw new Error("No es un Array");
    } else {
        let suma = 0;
        let media = 0;
        let contador = 0;

        numeros.forEach(elemento => {
            if (isNaN(elemento)) {
                throw new Error("No es un número");
            } else{
                contador++;
                suma += elemento;
            }

        });

        media = suma / contador;
        return media;
    }
}
