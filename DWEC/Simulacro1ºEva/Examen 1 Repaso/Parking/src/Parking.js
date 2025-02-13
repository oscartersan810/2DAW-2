class Parking {
    static ERROR_PLAZA_SIN_VEHICULO = "No hay ningún vehículo en esa plaza";

    constructor(totalPlazas, costePorMinuto) {
        this.totalPlazas = totalPlazas;
        this.costePorMinuto = costePorMinuto;
        this._plazasOcupadas = [];
    }

    entradaVehiculo(matricula, plaza, fechaHoraEntrada) {
        if (plaza < 1 || plaza > this.totalPlazas) {
            throw new Error("La plaza no es válida");
        }

        if (this._plazasOcupadas.some(v => v.plaza === plaza)) {
            throw new Error("La plaza ya está ocupada");
        }

        this._plazasOcupadas.push({ matricula, plaza, fechaHoraEntrada: new Date(fechaHoraEntrada) });
        return `Vehículo con matrícula ${matricula} ha entrado en la plaza ${plaza} a las ${fechaHoraEntrada}`;
    }

    salidaVehiculo(plaza, fechaHoraSalida) {
        const vehiculo = this._plazasOcupadas.find(v => v.plaza === plaza);
        if (!vehiculo) {
            throw new Error(Parking.ERROR_PLAZA_SIN_VEHICULO);
        }

        const horaSalida = new Date(fechaHoraSalida);
        const tiempoEstacionado = (horaSalida - vehiculo.fechaHoraEntrada) / (1000 * 60); // Convertir a minutos
        const coste = tiempoEstacionado * this.costePorMinuto;

        this._plazasOcupadas = this._plazasOcupadas.filter(v => v.plaza !== plaza);

        return {
            matricula: vehiculo.matricula,
            minutosEstacionamiento: tiempoEstacionado,
            costeEstacionamiento: coste
        };
    }

    get plazasLibres() {
        return this.totalPlazas - this._plazasOcupadas.length;
    }

    get plazasOcupadas() {
        return this._plazasOcupadas.length;
    }

    comprobarPlazaLibre(plaza) {
        return !this._plazasOcupadas.some(v => v.plaza === plaza);
    }
}

module.exports = Parking;

