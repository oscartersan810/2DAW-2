// tus_pruebas.js

describe("Pruebas de la función areaPiramide", function() {
  it("Debería calcular el área correctamente", function() {
      // Datos de entrada y valores esperados
      let datosPrueba = [
          { lado: 6.8, altura: 9, areaEsperada: 177.083 },
          { lado: 7.1, altura: 9.4, areaEsperada: 193.092 },
          { lado: 7.4, altura: 9.8, areaEsperada: 209.793 }
      ];

      datosPrueba.forEach(function(datos) {
          let resultado = areaPiramide(datos.lado, datos.altura);
          // Utilizamos toBeCloseTo para comparar valores de punto flotante con redondeo
          expect(resultado).toBeCloseTo(datos.areaEsperada, 3);
      });
  });
});
