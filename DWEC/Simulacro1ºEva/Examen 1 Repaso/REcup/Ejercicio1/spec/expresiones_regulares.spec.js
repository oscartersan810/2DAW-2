describe("Testeo de funciones regulares", function(){


  describe("Testeo de la función validaMatricula", function(){
      let datos_testeo_matriculas = [
          {matricula:"8024JHS", salidaEsperada:true, observacion:"Matrícula actual sin usar separador"},
          {matricula:"8024-JHS", salidaEsperada:true, observacion:"Matrícula actual usando separador"},
          {matricula:"  8024JHS ", salidaEsperada:true, observacion:"Detecta correctamente espacios antes y después"},
          {matricula:"  8024-JHS  ", salidaEsperada:true, observacion:"Detecta correctamente espacios antes y después"},
          {matricula:"80424JHS", salidaEsperada:false, observacion:"Sólo puede contener cuatro dígitos"},
          {matricula:"804-JHS", salidaEsperada:false, observacion:"Sólo puede contener cuatro dígitos"},
          {matricula:"8024JQS", salidaEsperada:false, observacion:"La Q no es una letra permitida"},
          {matricula:"8024-JQÑ", salidaEsperada:false, observacion:"La Ñ no es una letra permitida"},
          {matricula:"8024-EVA", salidaEsperada:false, observacion:"No puede contener vocales"},
          {matricula:"8024PIS", salidaEsperada:false, observacion:"No puede contener vocales"},
          {matricula:"SE-8024-Z", salidaEsperada:true, observacion:"Matrícula de Sevilla con una letra"},
          {matricula:"SE-8024-BH", salidaEsperada:true, observacion:"Matrícula de Sevilla con dos letras"},
          {matricula:"H-8024-Z", salidaEsperada:true, observacion:"Matrícula de Huelva con una letra"},
          {matricula:"H-8024-CD", salidaEsperada:true, observacion:"Matrícula de Huelva con dos letra"},
          {matricula:"SE-8024-R", salidaEsperada:false, observacion:"La R no es una letra permitida"},
          {matricula:"  SE-8024-R  ", salidaEsperada:false, observacion:"Matrícula antigua con espacios"},
          {matricula:"SE-80424-AB", salidaEsperada:false, observacion:"Sólo puede tener cuatro números"},
          {matricula:"SE-824-AB", salidaEsperada:false, observacion:"Sólo puede tener cuatro números"},
          {matricula:"M-8024-AB", salidaEsperada:false, observacion:"Es una matrícula de Madrid"},
          {matricula:"NA-8024-AB", salidaEsperada:false, observacion:"Es una matrícula de Navarra"},
          {matricula:"SE8042AB", salidaEsperada:true, observacion:""},
          {matricula:"SE-8042AB", salidaEsperada:false, observacion:"Si se usa el primer separador hay que usar el segundo"},
          {matricula:"SE8042-AB", salidaEsperada:false, observacion:"Si no se usa el primer separador tampoco se puede usar el segundo"},
      ];

      datos_testeo_matriculas.forEach(element => {
          it(`La matrícula ${element.matricula} ${element.salidaEsperada?"sí":"no"} es válida (${element.observacion})`, function(){
              expect(validaMatricula(element.matricula)).toEqual(element.salidaEsperada);
          });
      });
  });

  describe("Testeo de la función extraerPalabras", function(){
      let datos_testeo_extraerpalabras = [
          {frase:"La libertad, [Sancho], es uno de los más [preciosos] dones que a los hombres dieron los [cielos]", salidaEsperada:["[Sancho]","[preciosos]","[cielos]"]},
          {frase:"[Sancho], es uno de los más [preciosos] dones que a los hombres dieron los [cielos] así dijo", salidaEsperada:["[Sancho]","[preciosos]","[cielos]"]}
      ];

      datos_testeo_extraerpalabras.forEach(element => {
          it(`Para frase "${element.frase} debería devolver el array ${element.salidaEsperada.toString()}`, function(){
              expect(extraerPalabras(element.frase)).toEqual(element.salidaEsperada);
          });
      });
  });


  describe("Testeo de la función validaHorario", function(){

      function pad(num, size) {
          num = num.toString();
          while (num.length < size) num = "0" + num;
          return num;
      }

      let datos_testeo_horario = [
          {hora:"08:35", salidaEsperada:true, observacion:""},
          {hora:"8:35", salidaEsperada:true, observacion:"La hora puede tener un sólo dígito"},
          {hora:"  08:35 ", salidaEsperada:true, observacion:"Se permite que contenga espacios"},
          {hora:"08:35:10", salidaEsperada:false, observacion:"Formato de hora incorrecto"},
          {hora:"08:354", salidaEsperada:false, observacion:"Formato de hora incorrecto"},
          {hora:"088:35", salidaEsperada:false, observacion:"Formato de hora incorrecto"},
          {hora:"0835", salidaEsperada:false, observacion:"Formato de hora incorrecto"},
          {hora:"083:5", salidaEsperada:false, observacion:"Formato de hora incorrecto"},
      ];

      datos_testeo_horario.forEach(element => {
          it(`Para la hora "${element.hora}" debería devolver que ${element.salidaEsperada?"sí":"no"} es correcta (${element.observacion})}`, function(){
              expect(validaHorarioRuiz(element.hora)).toEqual(element.salidaEsperada);
          });
      });
      
       // Las horas comprendidas entre las 08:00 y 14:30 sí son válidas
       for (let hora=0; hora<=24; hora++){
          for(let minutos=0; minutos <=99; minutos++ ){
              let horaStr = pad(hora, 2) + ":" + pad(minutos,2);
              let formatoValido = (hora >=0 && hora <=23 && minutos>=0 && minutos<=59);
              let horaValida = ( hora >= 8 && hora <=13 && minutos >=0 && minutos <=59 ) || (hora == 14 && minutos >= 0 && minutos <=30) || ( hora >= 16 && hora <=21 && minutos >=0 && minutos <=59 ) || (hora == 22 && minutos == 0);
              let observaciones = formatoValido?(horaValida?"dentro del horario de Ruiz Gijón":"fuera del horario de Ruiz Gijón"):"formato de hora no válido";
              console.log("'" + horaStr + "'");
              it(`La hora ${horaStr} ${horaValida?"sí":"no"} es válida (${observaciones})`, function(){
                  expect(validaHorarioRuiz(horaStr)).toEqual(horaValida);
              });
          }
      }
      

  });

});