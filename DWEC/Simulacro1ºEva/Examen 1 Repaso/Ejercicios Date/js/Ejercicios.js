function Ejercicio1() {
    console.log("Ejercicio 1");
    let fechaActual = new Date();
    console.log(fechaActual);
    console.log("Año: "+fechaActual.getFullYear());
    console.log("Mes: "+fechaActual.getMonth()); //Enero corresponde al numero 0
    console.log("Día: "+fechaActual.getDate());
    console.log("Día Semana: "+fechaActual.getDay());
    console.log("Horas: "+fechaActual.getHours());
    console.log("Minutos: "+fechaActual.getMinutes());
    console.log("Segundos: "+fechaActual.getSeconds());

}
function Ejercicio2() {
    console.log("Ejercicio 2");
    let fechaN = new Date(2001, 7, 10, 19, 15);
    console.log("Fecha Nacimiento: "+fechaN);
}
function Ejercicio3() {
    console.log("Ejercicio 3");
    function numeroMes(mes) {
        let nombreMes = "";
        switch (mes) {
            case 0:
                nombreMes = "Enero";
                break;
            case 1:
                nombreMes = "Febrero";
                break;
            case 2:
                nombreMes = "Marzo";
                break;
            case 3:
                nombreMes = "Abril";
                break;
            case 4:
                nombreMes = "Mayo";
                break;
            case 5:
                nombreMes = "Junio";
                break;
            case 6:
                nombreMes = "Julio";
                break;
            case 7:
                nombreMes = "Agosto";
                break;
            case 8:
                nombreMes = "Septiembre";
                break;
            case 9:
                nombreMes = "Octubre";
                break;
            case 10:
                nombreMes = "Noviembre";
                break;
            case 11:
                nombreMes = "Diciembre";
                break;
            default:
                nombreMes = "Numero Incorrecto";
                break;
        }
        return nombreMes;
    }
    let mesN = parseInt(prompt("Introduzca un numero del 0-11"));
    let nombre = numeroMes(mesN);
    console.log(nombre);
}
function Ejercicio4() {
    console.log("Ejercicio 4");
    function numeroDia(dia) {
        let nombreDia = "";
        switch (dia) {
            case 0:
                nombreDia = "Domingo";
                break;
            case 1:
                nombreDia = "Lunes";
                break;
            case 2:
                nombreDia = "Martes";
                break;
            case 3:
                nombreDia = "Miércoles";
                break;
            case 4:
                nombreDia = "Jueves";
                break;
            case 5:
                nombreDia = "Viernes";
                break;
            case 6:
                nombreDia = "Sábado";
                break;
            default:
                nombreDia = "Numero Incorrecto";
                break;
        }
        return nombreDia;
    }
    let diaN = parseInt(prompt("Introduzca un numero del 0-6"));
    let nombre = numeroDia(diaN);
    console.log(nombre);
}
function Ejercicio5() {
    console.log("Ejercicio 5");
    const fechaActual = new Date() ;
    const mSegundos = fechaActual.getTime();
    console.log("Milisegundos desde el 1 enero de 1970: ", mSegundos);
}
function Ejercicio6() {
    console.log("Ejercicio 6");
    //milisegundos hasta mi fecha: 997470900
    const fechaN = new Date(2001, 7, 10, 19, 15);
    const mSegundos = fechaN.getTime();
    console.log("Milisegundos de mi fecha de nacimiento: ", mSegundos);
}
function Ejercicio7() {
    console.log("Ejercicio 7");
    let fechaActual = new Date();
    let diferenciaHM = fechaActual.getTimezoneOffset();

    let horas = Math.abs(Math.floor(diferenciaHM / 60));
    let minutos = Math.abs(diferenciaHM % 60);

    console.log("La diferencia horaria de España UTC es de "+horas+" horas y "+minutos+ " minutos");
}
function Ejercicio8() {
    console.log("Ejercicio 8");
    const fechaActual = new Date();

    const horaUTC = fechaActual.getUTCHours();
    const horaLocal = fechaActual.getHours();

    console.log("Hora UTC:", horaUTC);
    console.log("Hora Local:", horaLocal);
}
function Ejercicio9() {
    console.log("Ejercicio 9")
    function obtenerDiaSiguiente(fecha) {
        const dia = fecha.getDate();
        fecha.setDate(dia + 1);
        return fecha;
      }
      
      // 28/2/2021
      const fecha1 = new Date('2021-02-28');
      const diaSiguiente1 = obtenerDiaSiguiente(fecha1);
      
      console.log("Fecha 28/2/2021:");
      console.log("Día Actual:", fecha1.toDateString());
      console.log("Día Siguiente:", diaSiguiente1.toDateString());
      
      // 28/2/2020
      const fecha2 = new Date('2020-02-28');
      const diaSiguiente2 = obtenerDiaSiguiente(fecha2);
      
      console.log("Fecha 28/2/2020:");
      console.log("Día Actual:", fecha2.toDateString());
      console.log("Día Siguiente:", diaSiguiente2.toDateString());
}
function Ejercicio10() {
    console.log("Ejercicio 10");
    const fecha = new Date('2021-01-35');
    console.log(fecha.toDateString());
    //El resultado es que la fecha es inválida
}
function Ejercicio11() {
    console.log("Ejercicio 11");
    function calcularDiasTranscurridos(fechaInicio, fechaFin) {
        const unDiaEnMilisegundos = 24 * 60 * 60 * 1000; // 24 horas * 60 minutos * 60 segundos * 1000 milisegundos
        const tiempoTranscurrido = fechaFin - fechaInicio;
        const diasTranscurridos = Math.floor(tiempoTranscurrido / unDiaEnMilisegundos);
        return diasTranscurridos;
      }
      
      // Ejemplo de uso
      const fecha1 = new Date('2023-01-01');
      const fecha2 = new Date('2023-02-15');
      const diasTranscurridos = calcularDiasTranscurridos(fecha1, fecha2);
      console.log("Días transcurridos:", diasTranscurridos);
      
}
function Ejercicio12() {
    console.log("Ejercicio 12");
    const fechaCumpleaños = new Date('2001-08-10');
    console.log(fechaCumpleaños);
}