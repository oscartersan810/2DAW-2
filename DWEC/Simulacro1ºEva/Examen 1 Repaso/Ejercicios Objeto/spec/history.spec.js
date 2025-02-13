// Especificaciones para probar la clase History
describe('History', function () {
    let historial;
  
    // Configuración inicial antes de cada prueba
    beforeEach(function () {
      historial = new History();
    });
  
    // Prueba para asegurarse de que se agreguen operaciones al historial
    it('debería agregar operaciones al historial', function () {
      historial.addOperation('+ 5');
      historial.addOperation('- 3');
      expect(historial.operations).toEqual(['+ 5', '- 3']);
    });
  
    // Prueba para asegurarse de que la limpieza del historial funcione correctamente
    it('debería limpiar el historial', function () {
      historial.addOperation('* 10');
      historial.clear();
      expect(historial.operations).toEqual([]);
    });
  });