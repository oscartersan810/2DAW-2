let SEGUROS_MEDICOS = [
  { value: 1, texto: "Adeslas" },
  { value: 2, texto: "Asisa" },
  { value: 3, texto: "Caser Salud" },
  { value: 4, texto: "DKV" },
  { value: 5, texto: "Mapfre" },
  { value: 6, texto: "Sanitas" },
];

function validaDNI() {
  let dni = document.getElementById("inputDNI").value;
  let patron = /^[0-9]{8}[T|R|W|A|G|M|Y|F|P|D|X|B|N|J|Z|S|Q|V|H|L|C|K|E]$/;

  if (patron.test(dni)) {
    console.log("DNI válido");
  } else {
    console.log("DNI no existe");
  }
}

function seguroMedico() {
  let seguro = document.getElementById("inputSeguroMedico");

  SEGUROS_MEDICOS.forEach((seguroOption) => {
    let option = document.createElement("option");
    option.value = seguroOption.value;
    option.textContent = seguroOption.texto;
    seguro.appendChild(option);
  });
}

function opcionMedico() {
  let medicoEspecialista = document.getElementById("inputMedicoEspecialista");
  let medicoFamilia = document.getElementById("inputMedicoFamilia");
  let especialidad = document.getElementById('inputEspecialidad');

  if (medicoEspecialista.checked) {
    especialidad.disabled = false;
  } else if (medicoFamilia.checked) {
    especialidad.disabled = true;
  } else {
    especialidad.disabled = true;
  }
}

function fechaCita() {
  let fechaSeleccionada = document.getElementById('inputFechaCita').value;
  let fecha = new Date(fechaSeleccionada);
  let validaDia = document.getElementById('validaDia');
  validaDia.style.textAlign = "center";
  
  if (fecha.getDay() == 0 || fecha.getDay() > 4) {
    validaDia.textContent = "El día de la cita sólo puede ser de lunes a jueves";
    validaDia.style.color = "red";
    // throw new Error("El día de la cita sólo puede ser de lunes a jueves");
  } else{
    validaDia.textContent = "Fecha de la cita: " + fecha.toLocaleDateString();
    validaDia.style.color = "green";
    // console.log("Fecha de la cita: " + fechaSeleccionada);
  }
}

function horaCita() {
  let horaSeleccionada = document.getElementById('inputHoraCita').value;
  let validaHora = document.getElementById('validaHora');
  let fechaSeleccionada = document.getElementById('inputFechaCita').value;
  let fecha = new Date(fechaSeleccionada);
  validaHora.style.textAlign = "center";

  let horaInicio = "";
  let horaFin = "";

  if (fecha.getDay() >= 1 && fecha.getDay() <= 3) {
    horaInicio = "10:00";
    horaFin = "14:15";
  } else if (fecha.getDay() == 4) {
    horaInicio = "18:30";
    horaFin = "20:00";
  } else{
    validaHora.textContent = "No se puede pedir citas en ese dia";
    validaHora.style.color = "red";
  }

  //Validamos si la hora está dentro del rango
  if (horaSeleccionada < horaInicio || horaSeleccionada > horaFin) {
    validaHora.textContent = "La hora debe estar entre "+ horaInicio+ " y "+horaFin;
    validaHora.style.color = "red";
  } else{
    validaHora.textContent = "Hora de la cita: " + horaSeleccionada;
    validaHora.style.color = "green";
  }
}

//Función Hora con Date sin String
/*
function horaCita() {
  let horaSeleccionada = document.getElementById('inputHoraCita').value;
  let validaHora = document.getElementById('validaHora');
  let fechaSeleccionada = document.getElementById('inputFechaCita').value;
  let fecha = new Date(fechaSeleccionada);
  validaHora.style.textAlign = "center";

  let horaInicio = null;
  let horaFin = null;

  // Determinar el rango de horarios según el día de la semana
  if (fecha.getDay() >= 1 && fecha.getDay() <= 3) {
    horaInicio = new Date();
    horaInicio.setHours(10, 0, 0); // 10:00 AM
    horaFin = new Date();
    horaFin.setHours(14, 15, 0); // 2:15 PM
  } else if (fecha.getDay() == 4) {
    horaInicio = new Date();
    horaInicio.setHours(18, 30, 0); // 6:30 PM
    horaFin = new Date();
    horaFin.setHours(20, 0, 0); // 8:00 PM
  } else {
    validaHora.textContent = "No se pueden pedir citas en ese día";
    validaHora.style.color = "red";
    return;
  }

  // Convertir la hora seleccionada en un objeto Date
  let [hora, minuto] = horaSeleccionada.split(':').map(Number);
  let horaCita = new Date();
  horaCita.setHours(hora, minuto, 0);

  // Validar si la hora está dentro del rango
  if (horaCita < horaInicio || horaCita > horaFin) {
    validaHora.textContent =
      "La hora debe estar entre " +
      horaInicio.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }) +
      " y " +
      horaFin.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    validaHora.style.color = "red";
  } else {
    validaHora.textContent = "Hora de la cita: " + horaSeleccionada;
    validaHora.style.color = "green";
  }
}

*/