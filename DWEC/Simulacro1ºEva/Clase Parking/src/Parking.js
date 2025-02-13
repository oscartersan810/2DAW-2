class Parking {
    static ERROR_PLAZA_SIN_VEHICULO = "No hay ningún vehículo en esa plaza";

    constructor(plazas, costePorMinuto) {
        this._plazas = Array(plazas).fill(null); // Inicializamos las plazas vacías
        this._coste = costePorMinuto; // Coste por minuto
    }

    entradaVehiculo(matricula, numeroPlaza, fechaHora) {
        let indice = numeroPlaza - 1;
        if (indice < 0 || indice >= this._plazas.length) {
            throw new Error(`La plaza ${numeroPlaza} no existe`);
        }
        if (this._plazas[indice]) {
            throw new Error(`La plaza ${numeroPlaza} ya está ocupada`);
        }
        this._plazas[indice] = {
            matricula,
            fechaHoraEntrada: new Date(fechaHora),
        };
    }

    get plazasLibres() {
        return this._plazas.filter(plaza => plaza === null).length;
    }

    get plazasOcupadas() {
        return this._plazas.filter(plaza => plaza !== null).length;
    }

    salidaVehiculo(numeroPlaza, fechaHoraSalida) {
        let indice = numeroPlaza - 1;
        if (indice < 0 || indice >= this._plazas.length) {
            throw new Error(`La plaza ${numeroPlaza} no existe`);
        }

        let vehiculo = this._plazas[indice];
        if (!vehiculo) {
            throw new Error(Parking.ERROR_PLAZA_SIN_VEHICULO);
        }

        let fechaHoraEntrada = new Date(vehiculo.fechaHoraEntrada);
        let fechaHoraSalidaDate = new Date(fechaHoraSalida);

        if (fechaHoraSalidaDate <= fechaHoraEntrada) {
            throw new Error("La fecha y hora de salida debe ser posterior a la de entrada");
        }

        // Calculamos el tiempo estacionado en minutos
        let tiempoEstacionado = Math.floor((fechaHoraSalidaDate - fechaHoraEntrada) / (1000 * 60)); // En minutos
        let costeTotal = (tiempoEstacionado * this._coste).toFixed(2); // Coste total

        // Liberamos la plaza
        this._plazas[indice] = null;

        // Retornamos la información con nombres consistentes con los tests
        return {
            matricula: vehiculo.matricula,
            minutosEstacionamiento: tiempoEstacionado,
            costeEstacionamiento: parseFloat(costeTotal),
        };
    }
}
