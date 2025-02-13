// Especificaciones para probar la clase GeometryCalculator
describe('GeometryCalculator', function () {
    let calculadoraGeometrica;
  
    // Configuración inicial antes de cada prueba
    beforeEach(function () {
      calculadoraGeometrica = new GeometryCalculator();
    });
  
    // Prueba para asegurarse de que herede de Calculator y tenga funciones adicionales
    it('debería heredar de Calculator y tener funciones adicionales', function () {
      expect(calculadoraGeometrica instanceof Calculator).toBe(true);
      expect(typeof calculadoraGeometrica.calculateSquareArea).toBe('function');
      expect(typeof calculadoraGeometrica.calculateSquarePerimeter).toBe('function');
      expect(typeof calculadoraGeometrica.calculateCircleArea).toBe('function');
      expect(typeof calculadoraGeometrica.calculateCirclePerimeter).toBe('function');
    });
  
    // Prueba para asegurarse de que la función calculateSquareArea funcione correctamente
    it('debería calcular el área de un cuadrado y agregar la operación al historial', function () {
      spyOn(calculadoraGeometrica.history, 'addOperation');
      const result = calculadoraGeometrica.calculateSquareArea(5);
      expect(result).toBe(25);
      expect(calculadoraGeometrica.history.addOperation).toHaveBeenCalledWith('Área del cuadrado: 5 * 5 = 25');
    });
  
    // Prueba para asegurarse de que la función calculateSquarePerimeter funcione correctamente
    it('debería calcular el perímetro de un cuadrado y agregar la operación al historial', function () {
      spyOn(calculadoraGeometrica.history, 'addOperation');
      const result = calculadoraGeometrica.calculateSquarePerimeter(5);
      expect(result).toBe(20);
      expect(calculadoraGeometrica.history.addOperation).toHaveBeenCalledWith('Perímetro del cuadrado: 4 * 5 = 20');
    });
  
   // Prueba para asegurarse de que la función calculateCircleArea funcione correctamente
// Prueba para asegurarse de que la función calculateCircleArea funcione correctamente
it('debería calcular el área de un círculo y agregar la operación al historial', function () {
    spyOn(calculadoraGeometrica.history, 'addOperation');
    const result = calculadoraGeometrica.calculateCircleArea(3);
    expect(result).toBeCloseTo(28.27, 2); // Modificado
    expect(calculadoraGeometrica.history.addOperation).toHaveBeenCalledWith('Área del círculo: π * 3 * 3 = 28.27');
  });
  
  // Prueba para asegurarse de que la función calculateCirclePerimeter funcione correctamente
  it('debería calcular el perímetro de un círculo y agregar la operación al historial', function () {
    spyOn(calculadoraGeometrica.history, 'addOperation');
    const result = calculadoraGeometrica.calculateCirclePerimeter(3);
    expect(result).toBeCloseTo(18.85, 2); // Modificado
    expect(calculadoraGeometrica.history.addOperation).toHaveBeenCalledWith('Perímetro del círculo: 2 * π * 3 = 18.85');
  });
  });