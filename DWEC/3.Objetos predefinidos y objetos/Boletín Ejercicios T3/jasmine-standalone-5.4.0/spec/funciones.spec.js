describe("Testeo de boletín Ejercicio Tema 3", () => {
    describe("Testeo función Ej1 areaPiramide()", () => {
        const datos = [
            {lado: 6.8, altura: 9, valorEsperado: 177.083},
            {lado: 7.1, altura: 9.4, valorEsperado: 193.092},
            {lado: 7.4, altura: 9.8, valorEsperado: 209.793}
        ];

        it("La función devuelve el valor correcto", () => {
            datos.forEach(elemento => {
                expect(areaPiramide(elemento.lado, elemento.altura)).toBeCloseTo(elemento.valorEsperado, 3);
            });
        });

        it("La función devuelve un dato tipo Number", () => {
            datos.forEach(elemento => {
                expect(areaPiramide(elemento.lado, elemento.altura)).toBeInstanceOf(Number);
            });
        });

        it("La función lanza un error cuando el lado es negativo", () => {
            expect(function() { areaPiramide(-4.5, 6) }).toThrowError('el valor introducido es negativo');
        });

        it("La función lanza un error cuando la altura es negativo", () => {
            expect(function() { areaPiramide(5, -9.8) }).toThrowError('el valor introducido es negativo');
        });
        
    });

    describe("Testeo función EJ2 filtrarPrimosMayoresOnce()", () => {

        const datos = [
            { entrada: [6, 11, 18, 43, 8, 5, 45, 53, 9, 7, 24, 23], salida: [23, 43, 53] },
            { entrada: [6, 5, 24, 47, 8, 11, 18, 41, 9, 2, 35, 19], salida: [19, 41, 47] },
            { entrada: [4, 5, 45, 47, 6, 7, 27, 43, 10, 11, 35, 23], salida: [23, 43, 47] },
            { entrada: [9, 11, 20, 23, 6, 3, 24, 17, 8, 5, 14, 47], salida: [17, 23, 47] },
            { entrada: [9, 2, 45, 29, 8, 7, 18, 19, 6, 5, 12, 13], salida: [13, 19, 29] }
        ];

        it("La función devuelve un array", () => {
            datos.forEach(elemento => {
                expect(filtrarPrimosMayoresOnce(elemento.entrada)).toBeInstanceOf(Array);
            });
        });
    
    });
});
