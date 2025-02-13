class Reserva {
    constructor(nombre, dni, fechaEntrada, fechaSalida) {
      this.nombre = nombre;
      this.dni = dni;
      this.fechaEntrada = new Date(fechaEntrada);
      this.fechaSalida = new Date(fechaSalida);
  
      if (this.fechaSalida <= this.fechaEntrada) {
        throw new Error("Fecha de salida debe ser posterior a la de entrada");
      }
  
      let tiempoEstancia = this.fechaSalida - this.fechaEntrada;
      let unDiaEnMilisegundos = 24 * 60 * 60 * 1000;
      if (tiempoEstancia < unDiaEnMilisegundos) {
        throw new Error("Estancia mínima debe ser de un día");
      }
    }
  
    get codigoCliente() {
      let nombrePartes = this.nombre.split(";");
      let apellido1 = nombrePartes[0];
      let apellido2 = nombrePartes[1];
      let nombrePila = nombrePartes[2].trim();
      let dniUltimosTres = this.dni.slice(-3);
      let codigo = `${nombrePila[0].toUpperCase()}${apellido1}${dniUltimosTres}`;
      return codigo;
    }
  
    get numeroDiasEstancia() {
      let unDiaEnMilisegundos = 24 * 60 * 60 * 1000;
      return Math.round((this.fechaSalida - this.fechaEntrada) / unDiaEnMilisegundos);
    }
  
    modificarFechas(fechaNuevaEntrada, fechaNuevaSalida) {
      if (fechaNuevaSalida <= fechaNuevaEntrada) {
        throw new Error("Fecha de salida debe ser posterior a la de entrada");
      }
  
      let tiempoEstancia = fechaNuevaSalida - fechaNuevaEntrada;
      let unDiaEnMilisegundos = 24 * 60 * 60 * 1000;
      if (tiempoEstancia < unDiaEnMilisegundos) {
        throw new Error("Estancia mínima debe ser de un día");
      }
  
      this.fechaEntrada = fechaNuevaEntrada;
      this.fechaSalida = fechaNuevaSalida;
    }
  
    costeEstancia() {
      let costoLunesAViernes = 24;
      let costoSabado = 36;
      let costoDomingo = 43;
  
      let costoTotal = 0;
  
      let fechaActual = new Date(this.fechaEntrada);
      while (fechaActual < this.fechaSalida) {
        let diaSemana = fechaActual.getDay(); // 0: Domingo, 1: Lunes, ..., 6: Sábado
        if (diaSemana === 0) {
          costoTotal += costoDomingo;
        } else if (diaSemana === 6) {
          costoTotal += costoSabado;
        } else {
          costoTotal += costoLunesAViernes;
        }
  
        fechaActual.setDate(fechaActual.getDate() + 1);
      }
  
      return costoTotal;
    }
  }