// Importamos la clase Calculator para extenderla
class GeometryCalculator extends Calculator {
    constructor() {
      // Llamamos al constructor de la clase padre usando super()
      super();
    }
  
    // Método para calcular el área de un cuadrado y agregar la operación al historial
    calculateSquareArea(side) {
      const area = side * side;
      this.history.addOperation(`Área del cuadrado: ${side} * ${side} = ${area}`);
      return area;
    }
  
    // Método para calcular el perímetro de un cuadrado y agregar la operación al historial
    calculateSquarePerimeter(side) {
      const perimeter = 4 * side;
      this.history.addOperation(`Perímetro del cuadrado: 4 * ${side} = ${perimeter}`);
      return perimeter;
    }
  
    // Método para calcular el área de un círculo y agregar la operación al historial
    calculateCircleArea(radius) {
      const area = Math.PI * radius * radius;
      this.history.addOperation(`Área del círculo: π * ${radius} * ${radius} = ${area}`);
      return area;
    }
  
    // Método para calcular el perímetro de un círculo y agregar la operación al historial
    calculateCirclePerimeter(radius) {
      const perimeter = 2 * Math.PI * radius;
      this.history.addOperation(`Perímetro del círculo: 2 * π * ${radius} = ${perimeter}`);
      return perimeter;
    }
  }