addEventListener('load', inicializarEventos, false);

function inicializarEventos() {
    let ob = document.getElementById('boton1');
    ob.addEventListener('click', presionBoton, false);
}

let conexion1;
function presionBoton(e) {
    conexion1 = new XMLHttpRequest();
    conexion1.open('GET', 'pagina1.php', true);
    conexion1.timeout = 3000;
    conexion1.addEventListener('readystatechange', procesarDatos);
    conexion1.addEventListener('timeout', tiempoVencido);
    conexion1.send();
}

function tiempoVencido() {
    document.getElementById("tablaJugadores").innerHTML = "Tiempo de espera vencido";
}

function procesarDatos() {
    if (conexion1.readyState == 4) {
        if (conexion1.status == 200) {
            let resultados = document.getElementById("tablaJugadores");
            try {
                let salida = '';
                let datos = JSON.parse(conexion1.responseText);
                let graficaDatos = [['Jugador', 'Partidas Ganadas']]; // Encabezado para Google Charts
                
                for (let f = 0; f < datos.length; f++) {
                    salida += 'Id: ' + datos[f].id + "<br>";
                    salida += 'Nombre: ' + datos[f].nombre + "<br>";
                    salida += 'Apellidos: ' + datos[f].apellidos + "<br>";
                    salida += 'Total Partidas Ganadas: ' + datos[f].partidas_ganadas + "<br><br>";

                    graficaDatos.push([datos[f].nombre + ' ' + datos[f].apellidos, datos[f].partidas_ganadas]);
                }
                resultados.innerHTML = salida;

                // Dibujar la gráfica con los datos
                drawChart(graficaDatos);
            } catch (ex) {
                document.getElementById("tablaJugadores").innerHTML = "Error al parsear el JSON: " + ex.message;
            }
        } else {
            document.getElementById("tablaJugadores").innerHTML = "Error al cargar los datos";
        }
    } else {
        document.getElementById("tablaJugadores").innerHTML = "Cargando...";
    }
}

// Función para dibujar la gráfica
function drawChart(datos) {
    google.charts.load('current', { packages: ['corechart', 'bar'] });
    google.charts.setOnLoadCallback(function () {
        var data = google.visualization.arrayToDataTable(datos);

        var options = {
            title: 'Partidas Ganadas por Jugador',
            hAxis: { title: 'Jugadores' },
            vAxis: { title: 'Partidas Ganadas' },
            bars: 'horizontal'
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    });
}
