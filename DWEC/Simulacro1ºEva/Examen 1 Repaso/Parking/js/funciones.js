class Parking {
    constructor(totalPlazas, costePorMinuto) {
        this.totalPlazas = totalPlazas;
        this.costePorMinuto = costePorMinuto;
        this._plazasOcupadas = []; 
    }

    entradaVehiculo(matricula, plaza, fechaHoraEntrada) {
        if (plaza < 1 || plaza > this.totalPlazas) {
            throw new Error("La plaza no es válida");
        }

        let plazaOcupada = this._plazasOcupadas.find(p => p.plaza === plaza);
        if (plazaOcupada) {
            throw new Error("La plaza ya está ocupada");
        }

        this._plazasOcupadas.push({ matricula, plaza, fechaHoraEntrada: new Date(fechaHoraEntrada) });
        return `Vehículo con matrícula ${matricula} ha entrado en la plaza ${plaza} a las ${fechaHoraEntrada}`;
    }

    salidaVehiculo(plaza, fechaHoraSalida) {
        const index = this._plazasOcupadas.findIndex(p => p.plaza === plaza);
        if (index === -1) {
            throw new Error("No hay ningún vehículo en esa plaza");
        }

        let vehiculo = this._plazasOcupadas[index];
        let horaSalida = new Date(fechaHoraSalida);
        let tiempoEstacionado = (horaSalida - vehiculo.fechaHoraEntrada) / (1000 * 60); // Convertir a minutos
        let coste = tiempoEstacionado * this.costePorMinuto;

        this._plazasOcupadas.splice(index, 1);

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
}

let parking1 = new Parking(10, 0.02);
try {
    console.log(parking1.entradaVehiculo("8025JHR", 7, "5/11/2023 12:16"));
    console.log(parking1.salidaVehiculo(7, "5/11/2023 15:35"));
} catch (error) {
    console.error(error.message);
}
