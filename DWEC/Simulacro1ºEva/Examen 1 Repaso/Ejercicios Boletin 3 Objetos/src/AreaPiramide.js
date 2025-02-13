function areaPiramide(lado, altura) {
    // Calcula el área de la pirámide utilizando la fórmula dada
     let area = (lado * lado) + 2 * lado * Math.sqrt((lado/2) * (lado/2) + altura * altura);

     // Redondea el área a cinco decimales
     let areaR = area.toFixed(5);

    return parseFloat(areaR);
}
function calcularArea() {
    // Ejemplo de uso
    let resultado = areaPiramide(6.8, 9);

    // Mostrar el resultado en la página
    document.write("El área de la pirámide es: " + resultado);
}