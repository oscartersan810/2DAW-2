let encabezados=["Horas", "Previsión", "Viento", "Velocidad", "Lluvias"];         
let datos=[
    {
    hora:"19:00",
    prevision:{ temperatura: "33º", icono:"dia" },
    viento:"oeste",
    velocidad:"15 km/h",
    lluvias:"0 mm"
    },
    {
    hora:"20:00",
    prevision:{ temperatura: "30º", icono:"dia" },
    viento:"norte",
    velocidad:"5 km/h",
    lluvias:"10 mm"
    },
    {
    hora:"21:00",
    prevision:{ temperatura: "28º", icono:"noche" },
    viento:"sur",
    velocidad:"0 km/h",
    lluvias:"5 mm"
    },
];

function generaTabla() {
    let tabla = document.getElementById("tablaTiempo");
    let thead = tabla.getElementsByTagName("thead")[0];
    let tbody = tabla.getElementsByTagName("tbody")[0];

    while (thead.firstChild) {
        thead.removeChild(thead.firstChild);
    }

    while (tbody.firstChild) {
        tbody.removeChild(tbody.firstChild);
    }

    let filaHead = document.createElement("tr");

    for (let i = 0; i < encabezados.length; i++) {
        let celda = document.createElement("th");
        celda.textContent = encabezados[i];
        filaHead.appendChild(celda);
    }
    thead.appendChild(filaHead);

    for (let i = 0; i < datos.length; i++) {
        let filaBody = document.createElement("tr");

        let hora = document.createElement("th");
        hora.textContent = datos[i].hora;
        filaBody.appendChild(hora);

        let prevision = document.createElement("td");

        let temperatura = document.createElement("p");
        temperatura.textContent = datos[i].prevision.temperatura;
        prevision.appendChild(temperatura);

        let icono = document.createElement("img");
        icono.src = "imagenes/"+datos[i].prevision.icono+".png";
        prevision.appendChild(icono);

        prevision.style.display = "flex"
        filaBody.appendChild(prevision);

        let viento = document.createElement("td");

        let vientoContenido = document.createElement("img");
        vientoContenido.src = "imagenes/"+datos[i].viento+".png";
        viento.appendChild(vientoContenido);
        filaBody.appendChild(viento);

        let velocidad = document.createElement("td");
        velocidad.textContent = datos[i].velocidad;
        filaBody.appendChild(velocidad);

        let lluvias = document.createElement("td");
        lluvias.textContent = datos[i].lluvias;
        filaBody.appendChild(lluvias);

        tbody.appendChild(filaBody);
    }
}

addEventListener('load', generaTabla);
