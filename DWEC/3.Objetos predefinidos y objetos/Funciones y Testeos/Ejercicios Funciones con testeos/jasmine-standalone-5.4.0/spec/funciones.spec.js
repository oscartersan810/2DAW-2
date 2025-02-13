describe("Testeo de funciones del boletín", () => {
  describe("Testeo de la función comprobarEsPar()", () => {
    const datos = [
      { entrada: 6, valorEsperado: true },
      { entrada: 5, valorEsperado: false },
      { entrada: 11, valorEsperado: false },
      { entrada: 16, valorEsperado: true },
      { entrada: 20, valorEsperado: true },
    ];

    datos.forEach(function (caso) {
      it(
        "El numero " + caso.entrada + " se esperaba " + caso.valorEsperado,
        () => {
          expect(comprobarEsPar(caso.entrada)).toEqual(caso.valorEsperado);
        }
      );
    });
  });

  describe("Testeo de la función verCalificacion()", () => {
    const datos = [
      { entrada: -1, valorEsperado: "VALOR INCORRECTO" },
      { entrada: 3, valorEsperado: "INSUFICIENTE" },
      { entrada: 6, valorEsperado: "BIEN" },
      { entrada: 8, valorEsperado: "NOTABLE" },
      { entrada: 10, valorEsperado: "SOBRESALIENTE" },
      { entrada: 12, valorEsperado: "VALOR INCORRECTO" },
    ];

    datos.forEach(function (caso) {
      it(
        "La nota " + caso.entrada + " se esperaba " + caso.valorEsperado,
        () => {
          expect(verCalificacion(caso.entrada)).toEqual(caso.valorEsperado);
        }
      );
    });
  });

  describe("Testeo de la función verCalificacionDecimal()", () => {
    const datos = [
      { entrada: -1.8, valorEsperado: "VALOR INCORRECTO" },
      { entrada: 3.4, valorEsperado: "INSUFICIENTE" },
      { entrada: 6.1, valorEsperado: "BIEN" },
      { entrada: 8.9, valorEsperado: "NOTABLE" },
      { entrada: 9.6, valorEsperado: "SOBRESALIENTE" },
      { entrada: 12.1, valorEsperado: "VALOR INCORRECTO" },
    ];

    datos.forEach(function (caso) {
      it(
        "La nota " + caso.entrada + " se esperaba " + caso.valorEsperado,
        () => {
          expect(verCalificacionDecimal(caso.entrada)).toEqual(
            caso.valorEsperado
          );
        }
      );
    });
  });

  describe("Testeo de la función parametrosCircunferencia()", () => {
    const datos = [
      { entrada: 7.4, valorEsperado: { Perimetro: 73.04, Area: 172.03 } },
      { entrada: 10.2, valorEsperado: { Perimetro: 100.67, Area: 326.85 } },
      { entrada: 3.2, valorEsperado: { Perimetro: 31.58, Area: 32.17 } },
      { entrada: 8.9, valorEsperado: { Perimetro: 87.84, Area: 248.85 } },
      { entrada: 11, valorEsperado: { Perimetro: 108.57, Area: 380.13 } },
    ];

    datos.forEach(function (caso) {
      it(
        "El valor " +
          caso.entrada +
          " se esperaba Perimetro: " +
          caso.valorEsperado.Perimetro +
          " y el Area: " +
          caso.valorEsperado.Area,
        () => {
          const resultado = parametrosCircunferencia(caso.entrada);

          expect(resultado.Perimetro).toBeCloseTo(
            caso.valorEsperado.Perimetro,
            2
          );
          expect(resultado.Area).toBeCloseTo(caso.valorEsperado.Area, 2);
        }
      );
    });
  });

  describe("Testeo de la función esbisiesto()", () => {
    const datos = [
      { entrada: 1600, valorEsperado: true },
      { entrada: 1700, valorEsperado: false },
      { entrada: 1800, valorEsperado: false },
      { entrada: 1900, valorEsperado: false },
      { entrada: 2000, valorEsperado: true },
      { entrada: 2001, valorEsperado: false },
      { entrada: 2008, valorEsperado: true },
    ];

    datos.forEach(function (caso) {
      it(
        "El año " + caso.entrada + " se esperaba " + caso.valorEsperado,
        () => {
          expect(esBisiesto(caso.entrada)).toEqual(caso.valorEsperado);
        }
      );
    });
  });

  describe("Testeo de la función hexa2decimal()", () => {
    const datos = [
      { entrada: "A", valorEsperado: 10 },
      { entrada: "1F", valorEsperado: 31 },
      { entrada: "10", valorEsperado: 16 },
      { entrada: "FF", valorEsperado: 255 },
      { entrada: "100", valorEsperado: 256 },
      { entrada: "ABC", valorEsperado: 2748 },
      { entrada: "0", valorEsperado: 0 },
    ];

    datos.forEach(function (caso) {
      it(
        "El valor hexadecimal " +
          caso.entrada +
          " debería convertirse a " +
          caso.valorEsperado +
          " en decimal",
        () => {
          expect(hexa2decimal(caso.entrada)).toEqual(caso.valorEsperado);
        }
      );
    });
  });

  describe("Testeo de la función bonoloto", () => {
    // Devuelve un array
    it("Debería devolver un array", () => {
      let resultado = bonoloto();
      expect(Array.isArray(resultado)).toEqual(true);
    });

    // El array tiene 6 elementos
    it("Debería tener 6 elementos", () => {
      let resultado = bonoloto();
      expect(resultado).toHaveSize(6);
    });

    // Todos los elementos del array son números
    it("Todos los elementos deberían ser números", () => {
      let resultado = bonoloto();
      resultado.forEach((elemento) => {
        expect(elemento).toBeInstanceOf(Number);
      });
    });

    // Los elementos están ordenados
    it("Los elementos deberían estar ordenados", () => {
      let resultado = bonoloto();
      for (let i = 0; i < resultado.length - 1; i++) {
        expect(resultado[i]).toBeLessThanOrEqual(resultado[i + 1]);
      }
    });

    // Los elementos están comprendidos entre 1 y 49
    it("Los elementos deberían estar entre 1 y 49", () => {
      let resultado = bonoloto();
      resultado.forEach((elemento) => {
        expect(elemento).toBeGreaterThanOrEqual(1);
        expect(elemento).toBeLessThanOrEqual(49);
      });
    });

    // Los elementos no están repetidos
    it("Los elementos no deberían estar repetidos", () => {
      let resultado = bonoloto();
      for (let i = 0; i < resultado.length; i++) {
        for (let j = i + 1; j < resultado.length; j++) {
          expect(resultado[i]).not.toBe(resultado[j]);
        }
      }
    });

    // Tras 1000 llamadas deberían haberse salido todos los números entre el 1 y el 49
    it("Tras 1000 llamadas deberían haberse salido todos los números entre 1 y 49", () => {
      let numerosGenerados = [];
      for (let i = 0; i < 1000; i++) {
        let resultado = bonoloto();
        numerosGenerados.push(resultado);
      }

      for (let i = 0; i <= 49; i++) {
        expect(numerosGenerados[i]).toEqual(true);
      }
    });
  });

  describe("Testeo de la función promedio()", () => {
    let numeros = [
      { entrada: [7.2, 4.3, 9.1], esperado: 6.9 },
      { entrada: [3.2, , , 5.3, 9.7], esperado: 6.1 },
      { entrada: [4.6, 7.2, 2.7, 3.1, 5.7], esperado: 4.7 },
      { entrada: [8.18, ,], esperado: 8.2 },
    ];

    it("La funcion devuelve la media esperada", () => {
      numeros.forEach((elemento) => {
        expect(promedio(elemento.entrada).toBeCloseTo(elemento.esperado, 1));
      });
    });

    it("La funcion devuelve un dato de tipo number", () => {
      numeros.forEach((elemento) => {
        expect(promedio(elemento.entrada)).toBeInstanceOf(Number);
      });
    });
  });
});
