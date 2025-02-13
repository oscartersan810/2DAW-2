//Ejercicio 1
function Ej1() {
   let fecha = new Date();

   alert("Pulsa f12 para mostrar la consola");
   console.log(fecha); //Fecha Actual
   console.log("-------------------------");
   console.log("Año: "+fecha.getFullYear()); //Año
   console.log("Mes: "+fecha.getMonth()); //Mes (0 al 11)
   console.log("Dia: "+fecha.getDate()); //Dia (1 al 31) depende del mes
   console.log("Día Semana: "+fecha.getDay()); //Dia de la semana (0-6) "0" corresponde a domingo
   console.log("Hora: "+fecha.getHours()); //Hora (0-23)
   console.log("Minutos: "+fecha.getMinutes()); //Minutos (0-59)
   console.log("Segundos: "+fecha.getSeconds()); //Segundos (0-59)

}
//Ejercicio 2
function Ej2() {
   let fechaNac = new Date ("2001-08-10");
   alert("Pulsa f12 para mostrar la consola");
   console.log("Fecha de nacimiento: "+fechaNac);
}
//Ejercicio 3
function Ej3() {
   let fecha = new Date();
   let nMes = fecha.getMonth();
   alert("Pulsa f12 para mostrar la consola");
   function nombreMes(numero) {
      switch (numero) {
         case 0: return 'Enero';
         case 1: return 'Febrero';
         case 2: return 'Marzo';
         case 3: return 'Abril';
         case 4: return 'Mayo';
         case 5: return 'Junio';
         case 6: return 'Julio';
         case 7: return 'Agosto';
         case 8: return 'Septiembre';
         case 9: return 'Octubre';
         case 10: return 'Noviembre';
         case 11: return 'Diciembre';
         default: return 'Mes no válido';
      }
   }
   console.log(nombreMes(nMes));
}
//Ejercicio 4
function Ej4() {
   let fecha = new Date();
   let nDia = fecha.getDay();
   function nombreDia(numero) {
      switch (numero) {
         case 0: return 'Domingo';
         case 1: return 'Lunes';
         case 2: return 'Martes';
         case 3: return 'Miercoles';
         case 4: return 'Jueves';
         case 5: return 'Viernes';
         case 6: return 'Sabado';
         default: return 'Dia no válido';
      }
   }
   alert("Pulsa f12 para mostrar la consola");
   console.log(nombreDia(nDia));
}
//Ejercicio 5
function Ej5() {
   let msg = new Date();
   alert("Pulsa f12 para mostrar la consola");
   console.log("Milisegundos transcurridos: "+msg.getTime()+" mlsg");
   
}
//Ejercicio 6
function Ej6() {
   let msg = new Date("2001-08-10");
   alert("Pulsa f12 para mostrar la consola");
   console.log("Milisegundos transcurridos: "+msg.getTime()+" mlsg");
    
}
//Ejercicio 7
function Ej7() {
   let fecha = new Date();
   alert("Pulsa f12 para mostrar la consola");
   console.log("Hora Diferencia: "+fecha.getTimezoneOffset());
    
}
//Ejercicio 8
function Ej8() {
   let fecha = new Date();
   alert("Pulsa f12 para mostrar la consola");
   console.log("UTC HORAS:"+fecha.getUTCHours());
   console.log("HORAS:"+fecha.getHours());
   //La diferencia de Horas UTC y horas es que la UTC es la hora original del país sin cambio de horario de verano

   
}
//Ejercicio 9
function Ej9() {
   let fecha = new Date("2021-02-28");
   alert("Pulsa f12 para mostrar la consola");
   console.log("Fecha introducida: "+fecha);
   fecha.setDate(fecha.getDate()+1); // 01/03/2021
   console.log("Fecha posterior: "+fecha);
   console.log("------------------------------------------");

   //Cuando la fecha es bisiesta
   let fechaBisiesta = new Date("2020-02-28");
   console.log("Fecha introducida: "+fechaBisiesta);
   fechaBisiesta.setDate(fechaBisiesta.getDate()+1); // 29/02/2020
   console.log("Fecha posterior: "+fechaBisiesta);
   
}
//Ejercicio 10
function Ej10() {
   let fecha = new Date("2021-01-35");
   alert("Pulsa f12 para mostrar la consola");
   console.log("Fecha introducida: "+fecha) //El error seria "Invalid Date"
   //Significa que la fecha introducida es incorrecta por el dia inválido
    
}
//Ejercicio 11
function Ej11() {
   let fechaEntrada = new Date("2001-08-10");
   let fechaFinal = new Date("2008-06-15");
   function diasTotal(fecha1, fecha2) {
      let dia = 24*60*60*1000; //1000 seria los milisegundos en un dia
      let diferenciaDias = math.abs(fecha2 - fecha1);

      return Math.floor(diferenciaDias/dia);
   }
   alert("Pulsa f12 para mostrar la consola");
    
   console.log("Fecha1 : "+fechaEntrada);
   console.log("------------------------------------");
   console.log("Fecha2 : "+fechaFinal);
   console.log("------------------------------------");
   console.log(diasTotal(fechaEntrada, fechaFinal)); //Dias transcurridos
}
//Ejercicio 12
function Ej12() {
   let fechaCumple = prompt("Introduzca tu cumpleaños(Año-Mes-Dia) Ej (2024-06-15)");
   let fecha = new Date(fechaCumple);
   alert("Pulsa f12 para mostrar la consola");
   console.log("Tu cumpleaños seria: "+fecha);
}