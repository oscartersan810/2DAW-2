// Especificaciones para probar la clase Calculator
describe('Calculator', function () {
  let calculadora;

  // Configuración inicial antes de cada prueba
  beforeEach(function () {
    calculadora = new Calculator();
  });

  // Prueba para asegurarse de que la suma funcione correctamente
  it('debería sumar números', function () {
    calculadora.add(5);
    calculadora.add(10);
    expect(calculadora.result).toBe(15);
  });

  // Prueba para asegurarse de que la resta funcione correctamente
  it('debería restar números', function () {
    calculadora.subtract(7);
    calculadora.subtract(3);
    expect(calculadora.result).toBe(-10);
  });

  // Prueba para asegurarse de que la multiplicación funcione correctamente
  it('debería multiplicar números', function () {
    calculadora.add(2);
    calculadora.multiply(3);
    expect(calculadora.result).toBe(6);
  });

  // Prueba para asegurarse de que la división funcione correctamente
  it('debería dividir números', function () {
    calculadora.add(10);
    calculadora.divide(2);
    expect(calculadora.result).toBe(5);
  });

  // Prueba para manejar la división por cero y lanzar una excepción
  it('debería manejar la división por cero', function () {
    expect(function () {
      calculadora.divide(0);
    }).toThrowError('Cannot divide by zero');
  });

  // Prueba para asegurarse de que la limpieza funcione correctamente
  it('debería limpiar la calculadora', function () {
    calculadora.add(8);
    calculadora.clear();
    expect(calculadora.result).toBe(0);
  });
});