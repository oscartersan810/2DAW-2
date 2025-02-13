describe("CalculaIMC", function() {
  // it("lanza una excepción si el peso es negativo", function() {
  //   expect(function() {
  //     calculaIMC(-5, 1.75, 'h');
  //   }).toThrowError("El peso no puede tener un valor negativo");
  // });

  // it("lanza una excepción si la altura es negativa", function() {
  //   expect(function() {
  //     calculaIMC(70, -1.75, 'h');
  //   }).toThrowError("La altura no puede tener un valor negativo");
  // });

  // Otras pruebas con los valores de la tabla
  it("prueba con peso 35.2, altura 1.56 y sexo 'm'", function() {
    const resultado = calculaIMC(35.2, 1.56, 'm');
    expect(resultado.imc).toBe(14.5);
    expect(resultado.diagnostico).toBe("Desnutrición");
  });

  it("prueba con peso 47.7, altura 1.42 y sexo 'm'", function() {
    const resultado = calculaIMC(47.7, 1.42, 'm');
    expect(resultado.imc).toBe(23.7);
    expect(resultado.diagnostico).toBe("Peso Normal");
  });

  it("prueba con peso 88.7, altura 1.52 y sexo 'm'", function() {
    const resultado = calculaIMC(88.7, 1.52, 'm');
    expect(resultado.imc).toBe(38.4);
    expect(resultado.diagnostico).toBe("Obesidad mórbida");
  });
  it("prueba con peso 53.2, altura 1.66 y sexo 'h'", function() {
    const resultado = calculaIMC(53.2, 1.66, 'h');
    expect(resultado.imc).toBe(19.3);
    expect(resultado.diagnostico).toBe("Bajo Peso");
  });
  it("prueba con peso 77.7, altura 1.52 y sexo 'h'", function() {
    const resultado = calculaIMC(77.7, 1.52, 'h');
    expect(resultado.imc).toBe(33.6);
    expect(resultado.diagnostico).toBe("Sobrepeso");
  });
  it("prueba con peso 95.7, altura 1.62 y sexo 'h'", function() {
    const resultado = calculaIMC(95.7, 1.62, 'h');
    expect(resultado.imc).toBe(36.5);
    expect(resultado.diagnostico).toBe("Obesidad");
  });
  it("prueba con peso 102.7, altura 1.52 y sexo 'h'", function() {
    const resultado = calculaIMC(102.7, 1.52, 'h');
    expect(resultado.imc).toBe(44.5);
    expect(resultado.diagnostico).toBe("Obesidad mórbida");
  });
});