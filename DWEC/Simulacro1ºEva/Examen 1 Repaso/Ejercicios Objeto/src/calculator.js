// Definición de la clase Calculator que realiza operaciones matemáticas básicas
class Calculator {
    constructor() {
      // Inicializa el resultado en 0 y crea una instancia de la clase History
      this.result = 0;
      this.history = new History();
    }
  
    // Método para sumar un número al resultado y registrar la operación en el historial
    add(number) {
      this.result += number;
      this.history.addOperation(`+ ${number}`);
    }
  
    // Método para restar un número al resultado y registrar la operación en el historial
    subtract(number) {
      this.result -= number;
      this.history.addOperation(`- ${number}`);
    }
  
    // Método para multiplicar el resultado por un número y registrar la operación en el historial
    multiply(number) {
      this.result *= number;
      this.history.addOperation(`* ${number}`);
    }
  
    // Método para dividir el resultado por un número y registrar la operación en el historial
    divide(number) {
      // Verifica que el número no sea cero antes de realizar la división
      if (number !== 0) {
        this.result /= number;
        this.history.addOperation(`/ ${number}`);
      } else {
        // Lanza una excepción si se intenta dividir por cero
        throw new Error('Cannot divide by zero');
      }
    }
  
    // Método para restablecer el resultado a 0 y limpiar el historial
    clear() {
      this.result = 0;
      this.history.clear();
    }
  }