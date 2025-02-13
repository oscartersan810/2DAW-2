describe("Pruebas de filtrarNumerosPrimosMayoresOnce", function() {
    it("Debería filtrar números primos mayores que 11", function() {
        let datos = [
            { entrada: [6, 11, 18, 43, 8, 5, 45, 53, 9, 7, 24, 23], salida: [23, 43, 53] },
            { entrada: [6, 5, 24, 47, 8, 11, 18, 41, 9, 2, 35, 19], salida: [19, 41, 47] },
            { entrada: [4, 5, 45, 47, 6, 7, 27, 43, 10, 11, 35, 23], salida: [23, 43, 47] },
            { entrada: [9, 11, 20, 23, 6, 3, 24, 17, 8, 5, 14, 47], salida: [17, 23, 47] },
            { entrada: [9, 2, 45, 29, 8, 7, 18, 19, 6, 5, 12, 13], salida: [13, 19, 29] }
        ];

        datos.forEach(function(dato) {
            let resultado = filtrarNumerosPrimosMayoresOnce(dato.entrada);
            // Utilizamos toEqual para comparar arrays
            expect(resultado).toEqual(dato.salida);
        });
    });
});
