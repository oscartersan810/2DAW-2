describe("Pruebas de la clase Reserva", function () {
    it("Operaciones de reserva y comprobación de propiedades", function () {
      // Crea una reserva para Juan Antonio García Ortiz
      let reserva = new Reserva("Juan Antonio García Ortiz", "44958625A", "27/02/2020", "03/03/2020");
  
      // Comprobar código del cliente
      expect(reserva.codigoCliente).toEqual("JGARCÍA625");
  
      // Comprobar número de días de estancia
      expect(reserva.numeroDiasEstancia).toEqual(5);
  
      // Comprobar coste de estancia
      expect(reserva.costeEstancia()).toEqual(131);
  
      // Comprobar que las propiedades internas fechaEntrada y fechaSalida no se ven modificadas
      expect(reserva.fechaEntrada).toEqual(new Date(2020, 1, 27));
      expect(reserva.fechaSalida).toEqual(new Date(2020, 2, 3));
  
      // Modificar fechas de entrada y salida
      reserva.modificarFechas(new Date(2020, 1, 28), new Date(2020, 2, 1));
  
      // Comprobar que se ha modificado correctamente
      expect(reserva.numeroDiasEstancia).toEqual(2);
  
      // Comprobar que lanzará un error si la fecha de salida es anterior a la de entrada
      expect(() => {
        reserva.modificarFechas(new Date(2020, 2, 1), new Date(2020, 1, 28));
      }).toThrowError("Fecha de salida debe ser posterior a la de entrada");
  
      // Comprobar que lanzará un error si no ha transcurrido al menos un día entre la entrada y la salida
      expect(() => {
        reserva.modificarFechas(new Date(2020, 2, 1), new Date(2020, 2, 1));
      }).toThrowError("Estancia mínima debe ser de un día");
    });
  });
  