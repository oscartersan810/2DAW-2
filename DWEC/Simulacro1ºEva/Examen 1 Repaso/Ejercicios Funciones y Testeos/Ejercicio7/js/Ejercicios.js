function bonoloto() {
    let numeros = [];
    while (numeros.length < 6) {
        let numeroAleatorio = Math.floor(Math.random() * 49) + 1;
        if (!numeros.includes(numeroAleatorio)) {
            numeros.push(numeroAleatorio);
        }
    }
    return numeros.sort((a, b) => a - b);
}

function generarBonoloto() {
    let combinacion = bonoloto();
    console.log("Combinación de la Bonoloto: " + combinacion.join(", "));
}