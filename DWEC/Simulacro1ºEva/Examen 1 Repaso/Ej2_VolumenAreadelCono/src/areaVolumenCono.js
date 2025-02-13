    // Datos de testeo de varios conos de distintos radios y alturas
    let datos_testeo = [
        { radio: 5.2, altura: 12.7, area: 309.137, volumen: 359.616 },
        { radio: 7.1, altura: 16.3, area: 554.938, volumen: 860.464 },
        { radio: 2.81, altura: 19.35, area: 197.418, volumen: 160.001 }
    ];
function areaVolumenCono(r, h) {
    if (r < 0) {
        throw new Error("Radio debe ser positivo");
    }
    if (h < 0) {
        throw new Error("Altura debe ser positiva");
    }

    // Calcular volumen del cono
    let volumen = (Math.PI * Math.pow(r, 2) * h) / 3;

    // Calcular área del cono
    let area = Math.PI * r * (r + Math.sqrt(Math.pow(r, 2) + Math.pow(h, 2)));

    // Redondear ambas magnitudes a tres decimales
    let roundedVolumen = parseFloat(volumen.toFixed(3));
    let roundedArea = parseFloat(area.toFixed(3));

    // Devolver los resultados en un objeto literal
    return { area: roundedArea, volumen: roundedVolumen };
}

// Ejemplo de uso
try {
    let resultado = areaVolumenCono(5.2, 12.7);
    console.log(resultado); // Output: { area: 309.137, volumen: 359.616 }
} catch (error) {
    console.error(error.message);
}

