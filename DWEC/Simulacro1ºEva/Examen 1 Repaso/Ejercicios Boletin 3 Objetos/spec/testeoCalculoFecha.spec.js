describe("Pruebas de numeroDiasFechas", function() {
    it("Debería calcular el número de días transcurridos correctamente", function() {
        // Datos de prueba
        let datos = [
            { fechaDesde: "9/11/2021", fechaHasta: "9/11/2021", diasEsperados: 0 },
            { fechaDesde: "28/02/2020", fechaHasta: "1/3/2020", diasEsperados: 2 },
            { fechaDesde: "28/02/2021", fechaHasta: "1/3/2021", diasEsperados: 1 },
            { fechaDesde: "17/04/1973", fechaHasta: "14/11/1979", diasEsperados: 2402 }
        ];

        datos.forEach(function(dato) {
            let resultado = numeroDiasFechas(dato.fechaDesde, dato.fechaHasta);
            // Utilizamos toEqual para comparar números
            expect(resultado).toEqual(dato.diasEsperados);
        });
    });
});