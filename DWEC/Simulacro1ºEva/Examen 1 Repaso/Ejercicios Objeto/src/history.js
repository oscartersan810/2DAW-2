// Definición de la clase History que almacena el historial de operaciones
class History {
    constructor() {
      // Inicializa el arreglo de operaciones
      this.operations = [];
    }
  
    // Método para agregar una operación al historial
    addOperation(operation) {
      this.operations.push(operation);
    }
  
    // Método para limpiar el historial
    clear() {
      this.operations = [];
    }
  }