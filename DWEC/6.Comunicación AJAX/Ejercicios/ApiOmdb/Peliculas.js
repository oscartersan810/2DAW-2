addEventListener('load', inicializarEventos, false);

function inicializarEventos() {
    let formulario = document.getElementById('formulario');
    let ob = document.getElementById('buscar');
    formulario.addEventListener('change', presionBoton, false);
    ob.addEventListener('click', presionBoton, false);
}

let conexion1;
function presionBoton(e) {
    let api = "5a279acb";
    let nombre = document.getElementById('titulo').value;
    let anio = document.getElementById('anio').value;
    let tipo = document.getElementById('tipo').value;

    let url = "https://www.omdbapi.com/?apikey="+api+"&s="+nombre+"&y="+anio+"&type="+tipo;

    conexion1 = new XMLHttpRequest();
    conexion1.open('GET', url, true);
    conexion1.timeout = 5000; // Tiempo máximo de espera del API 5sg
    conexion1.addEventListener('readystatechange', procesarDatos);  // Añadimos el callback
    conexion1.addEventListener('timeout', tiempoVencido); // El evento ontimeout se dispara cuando se ha superado el tiempo de espera
    conexion1.send();
}


function tiempoVencido() {
    document.getElementById("resultados").innerHTML = "Tiempo de espera vencido";
}

function procesarDatos() {
	if(conexion1.readyState==4){
		    if (conexion1.status == 200) {
        let resultados = document.getElementById("resultados");
        try {
			let salida = '';
            // Con JSON.parse se convierte el texto JSON en un objeto JavaScript
            let datos = JSON.parse(conexion1.responseText); // Los datos JSON se recuperan al igual que el texto plano
      
            for (let f = 0; f < datos.Search.length; f++) {
                salida += "Titulo:" + datos.Search[f].Title + "<br>";
                salida += "Año:" + datos.Search[f].Year + "<br>";
                salida += "Tipo:" + datos.Search[f].Type + "<br>";
                salida += "Poster: <img src='" + datos.Search[f].Poster + "'><br>";
                salida += "<br><br>";
            }
            resultados.innerHTML = salida;
        } catch (ex) {
            document.getElementById("resultados").innerHTML = "Error al cargar parsear el JSON: " + ex.message;
        }

    } else {
        // Se ha recibido un código status distinto de 200
        document.getElementById("resultados").innerHTML = "Error al cargar los datos";
    }
	} else {
		document.getElementById("resultados").innerHTML = "Cargando...";
	}
	

}