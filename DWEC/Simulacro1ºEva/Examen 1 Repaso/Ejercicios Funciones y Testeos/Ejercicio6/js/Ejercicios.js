function convertirHexadecimal() {
    let hex = prompt("Introduce un número hexadecimal:");
    if (hex !== null) {
        let decimal = hexa2decimal(hex);
        alert("Resultado en decimal: " + decimal);
    }
}
function digitoHexa2Dec(digito) {
    let hex = "0123456789ABCDEF";
    let decimal = hex.indexOf(digito.toUpperCase());
    if (decimal === -1) {
        return "Dígito hexadecimal no válido";
    }
    return decimal;
}

function hexa2decimal(hexadecimal) {
    let decimal = 0;
    for (let i = 0; i < hexadecimal.length; i++) {
        let digit = hexadecimal[i];
        let v = digitoHexa2Dec(digit);
        if (typeof v === "string") {
            return v;
        }
        decimal = decimal * 16 + v;
    }
    return decimal;
}

