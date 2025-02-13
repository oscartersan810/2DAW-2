class Reserva{
    constructor(nombreCompleto, dni, fechaEntrada, fechaSalida){
        let nombres = nombreCompleto.split(";"); //Separador

        this._nombre = nombres[2].trim(); //Nombre
        this._apellido1 = nombres[0].trim(); //Primer apellido
        this._apellido2 = nombres[1].trim(); //Segundo apellido
        this._dni = dni;
        this._fechaEntrada = fechaEntrada;
        this._fechaSalida = fechaSalida;
    }

    get codigoCliente(){
        let nombrePila = this._nombre.charAt(0);
        let apellidoInicial2 = this._apellido1;
        let codigoDni = this._dni.substring(5, 8);
        
        let codigo = (nombrePila+apellidoInicial2+codigoDni);
        return codigo.toUpperCase();
    }

    get numeroDiasEstancia(){
        //Fecha Entrada
        let fechaStr1 =  this._fechaEntrada.split("/");
        let diaE = fechaStr1[0];
        let mesE = fechaStr1[1];
        let anioE = fechaStr1[2];

        //Fecha Salida
        let fechaStr2 =  this._fechaSalida.split("/");
        let diaS = fechaStr2[0];
        let mesS = fechaStr2[1];
        let anioS = fechaStr2[2];

        //Convertir a Tipo Date
        let fecha1 = new Date(anioE, mesE-1, diaE).getTime();
        let fecha2 = new Date(anioS, mesS-1, diaS).getTime();

        return Math.round((fecha2 - fecha1) / (1000 * 60 * 60 * 24));
    }

    modificarFechas(fecha1, fecha2){
        this._fechaEntrada = fecha1;
        this._fechaSalida = fecha2;

        
    }
}

let reserva1 = new Reserva("Franco;Salvatierra;Luis Fernando", "44958629E", "27/10/2021", "01/11/2021");

console.log(reserva1.codigoCliente);
console.log("Numero de dias restantes: "+reserva1.numeroDiasEstancia);