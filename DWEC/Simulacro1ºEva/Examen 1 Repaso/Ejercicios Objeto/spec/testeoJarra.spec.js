describe("Jarra", function () {
    let jarra1;
    let jarra2;

    beforeEach(function () {
      jarra1 = new Jarra(10, 4);
      jarra2 = new Jarra(15, 8);
    });

    it("debería comparar correctamente las jarras", function () {
      let jarraConMasCantidad = Jarra.comparar(jarra1, jarra2);
      expect(jarraConMasCantidad).toBe(jarra2);
    });

    it("debería llenar una jarra desde otra correctamente", function () {
      jarra1.llenarDesde(jarra2);
      expect(jarra1.cantidad).toBe(10);
      expect(jarra2.cantidad).toBe(2);
    });

    it("debería llenar una jarra completamente", function () {
      jarra2.llenar();
      expect(jarra2.cantidad).toBe(15);
    });

    it("debería vaciar una jarra completamente", function () {
      jarra2.vaciar();
      expect(jarra2.cantidad).toBe(0);
    });

    it("debería manejar errores al asignar cantidad negativa", function () {
      expect(function () {
        jarra2.cantidad = -10;
      }).toThrowError("La cantidad debe ser un número positivo");
      expect(jarra2.cantidad).toBe(15);
    });

    it("debería llenar la jarra al asignar una cantidad mayor a la capacidad", function () {
      jarra2.cantidad = 30;
      expect(jarra2.cantidad).toBe(15);
    });

    it("debería devolver jarras con más cantidad que la actual", function () {
      let jarra3 = new Jarra(10, 8);
      let jarra4 = new Jarra(5, 3);
      let jarrasConMasCantidad = jarra2.jarrasConMasCantidad(jarra3, jarra4);
      expect(jarrasConMasCantidad).toEqual([jarra3]);
    });
  });