function Ej1() {
    function comprobarEsPar(numero) {
        return numero % 2 == 0;
    }
    let numero = parseInt(prompt("Introduce un numero"));
    console.log("El numero "+numero+" es par(true) o impar(false): "+comprobarEsPar(numero));
}

function Ej2() {
    
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

    let nota = parseInt(prompt("Introduzca la nota que sacastes en DWEC"));
    console.log("Has sacado un "+nota+ " sería un "+verCalificacion(nota));
}

function Ej3() {
    function verCalificacionDecimal(nota) {

        if (nota<0 && nota>10) {
            return "VALOR INCORRECTO";
        } else if (nota>=0 && nota<5) {
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
            document.write("No valido");
        }
        
    }

    let nota = parseFloat(prompt("Introduzca la nota que sacastes en DWEC"));
    console.log("Has sacado un "+nota+ " sería un "+verCalificacionDecimal(nota));
}

function Ej4() {
    function parametrosCircunferencia(radio) {
        let area = (Math.PI * Math.pow(radio, 2));
        let perimetro = ((Math.PI * Math.PI) * radio);
    
        return {Perimetro:  perimetro, Area: area};
    
    }
    

    let radio = parseFloat(prompt("Introduzca el radio de la circunferencia"));
    let resultados = parametrosCircunferencia(radio);
    
    console.log("El radio es " + radio + ". El área es " + resultados.Area + " y el perímetro es " + resultados.Perimetro);
}

function Ej5() {
    function esBisiesto(numero) {
        if (numero % 4 == 0) {
            if (numero % 100 == 0) {
                return anio % 400 == 0;
            }
            return true;
        }
        return false;
    }

    let anio = parseInt(prompt("Introduzca el año para saber si es bisiesto o no"));
    console.log("El año "+anio+ " es bisiesto (true/false): "+esBisiesto(anio));
}

function Ej6() {
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
    
    let hexadecimal = prompt("Introduzca un valor hexadecimal");
    console.log("El valor decimal de " + hexadecimal + " es: " + hexa2decimal(hexadecimal));
    
    
}