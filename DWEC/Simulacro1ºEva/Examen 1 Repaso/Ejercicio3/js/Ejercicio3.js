class Parking {
    constructor(totalPlazas, costePorMinuto) {
      this.totalPlazas = totalPlazas;
      this.costePorMinuto = costePorMinuto;
      this._plazasOcupadas = new Map(); // Cambiado el nombre de la variable interna
    }
  
    entradaVehiculo(matricula, numeroPlaza, fechaHoraEntrada) {
      if (this._plazasOcupadas.has(numeroPlaza)) {
        throw new Error("La plaza ya está ocupada");
      }
      this._plazasOcupadas.set(numeroPlaza, {
        matricula: matricula,
        fechaHoraEntrada: new Date(fechaHoraEntrada),
      });
    }
  
    get plazasLibres() {
      return this.totalPlazas - this._plazasOcupadas.size;
    }
  
    get plazasOcupadas() {
      return this._plazasOcupadas.size;
    }
  
    salidaVehiculo(numeroPlaza, fechaHoraSalida) {
      if (!this._plazasOcupadas.has(numeroPlaza)) {
        throw new Error("No hay ningún vehículo en esa plaza");
      }
  
      const vehiculo = this._plazasOcupadas.get(numeroPlaza);
      this._plazasOcupadas.delete(numeroPlaza);
  
      const fechaEntrada = vehiculo.fechaHoraEntrada;
      const tiempoEstacionamiento = Math.floor(
        (new Date(fechaHoraSalida) - fechaEntrada) / (1000 * 60) // Convertir a minutos
      );
  
      const costeEstacionamiento = tiempoEstacionamiento * this.costePorMinuto;
  
      return {
        matricula: vehiculo.matricula,
        minutosEstacionamiento: tiempoEstacionamiento,
        costeEstacionamiento: costeEstacionamiento.toFixed(2),
      };
    }
  }
  
  // Ejemplo de uso:
  const parking1 = new Parking(10, 0.02);
  
  try {
    parking1.entradaVehiculo("8025JHR", 7, "5/11/2023 12:16");
    console.log("Plazas libres:", parking1.plazasLibres);
    console.log("Plazas ocupadas:", parking1.plazasOcupadas);
  
    const resultadoSalida = parking1.salidaVehiculo(7, "5/11/2023 15:35");
    console.log(resultadoSalida);
    console.log("Plazas libres:", parking1.plazasLibres);
    console.log("Plazas ocupadas:", parking1.plazasOcupadas);
  } catch (error) {
    console.error(error.message);
  }
  
  