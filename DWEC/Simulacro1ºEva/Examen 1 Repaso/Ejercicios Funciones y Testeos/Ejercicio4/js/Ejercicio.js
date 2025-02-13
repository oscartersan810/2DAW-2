function pCircunferencia(r) {
    let p = (2 * Math.PI * r).toFixed(2);
    let a = (Math.PI * r * r).toFixed(2);
    return {p , a};
}

function calculoCircunferencia() {
    let r = parseFloat(prompt("Introduzca la radio de la circunferencia"));
    if (r>=0) {
        let res = pCircunferencia(r);
        alert("Perímetro: " + res.p + ", Área: " + res.a);
    } else {
        alert("Introduzca un radio que sea válido, por favor");
    }
}