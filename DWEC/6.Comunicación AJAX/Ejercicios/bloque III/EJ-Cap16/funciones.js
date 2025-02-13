addEventListener('load', inicioEventos, false);

function inicioEventos() {
    let vec = document.getElementsByTagName('div');
    for (let i = 0; i < vec.length; i++) {
        vec[i].addEventListener('mouseover', mostrarToolTip, false);
        vec[i].addEventListener('mouseout', ocultarToolTip, false);
        vec[i].addEventListener('mousemove', actualizarToolTip, false);
    }
    let elemento = document.createElement('div');
    elemento.setAttribute('id', 'divmensaje');
    vec = document.getElementsByTagName('body');
    vec[0].appendChild(elemento);
}

function mostrarToolTip(e) {
    let d = document.getElementById('divmensaje');
    d.style.visibility = 'visible';
    d.style.left = (e.clientX + document.body.scrollLeft + 15) + 'px';
    d.style.top = (e.clientY + document.body.scrollTop + 15) + 'px';
    let ref = e.target;
    // recuperarServidorTooltip(ref.getAttribute('id'));
    recuperarServidorTooltip(ref.getAttribute('id').replace('parte',''));
}

function ocultarToolTip() {
    let d = document.getElementById('divmensaje');
    d.style.visibility = 'hidden';
}

function actualizarToolTip(e) {
    let d = document.getElementById('divmensaje');
    d.style.left = (e.clientX + document.body.scrollLeft + 15) + 'px';
    d.style.top = (e.clientY + document.body.scrollTop + 15) + 'px';
}

let conexion1;
function recuperarServidorTooltip(c) {
    conexion1 = new XMLHttpRequest();
    conexion1.onreadystatechange = procesarEventos;
    conexion1.open('GET', 'pagina1.php?cod='+c, true);
    conexion1.send();
}

function procesarEventos() {
    let d = document.getElementById('divmensaje');
    d.style.visibility = 'visible';

    if (conexion1.readyState == 4) {
        if (conexion1.status == 200) {
            let salida = "";
            let datos = conexion1.responseXML;

            if (!datos) {
                console.error("Error: No se recibió XML válido.");
                d.innerHTML = "<p>Error al cargar los datos.</p>";
                return;
            }

            let componentes = datos.getElementsByTagName('componente');
            let idBuscado = conexion1.responseURL.split('=')[1]; // Obtener el id de la URL de la petición AJAX

            let componenteEncontrado = null;
            for (let i = 0; i < componentes.length; i++) {
                let id = componentes[i].getElementsByTagName("id")[0]?.textContent;
                if (id === idBuscado) {
                    componenteEncontrado = componentes[i];
                    break;
                }
            }

            if (componenteEncontrado) {
                let nombre = componenteEncontrado.getElementsByTagName("nombre")[0]?.textContent || "Sin nombre";
                let descripcion = componenteEncontrado.getElementsByTagName("descripcion")[0]?.textContent || "Sin descripción";
                let imagen = componenteEncontrado.getElementsByTagName("imagen")[0]?.textContent || "sin-imagen.jpg";

                salida += `<h4>Nombre: ${nombre}</h4>`;
                salida += `<p>${descripcion}</p>`;
                salida += `<img src="${imagen}" width="100" height="100" onerror="this.onerror=null;this.src='error.jpg';">`;
            } else {
                salida = "<p>No se encontró información.</p>";
            }

            d.innerHTML = salida;
        } else {
            console.error("Error en la solicitud AJAX:", conexion1.status);
            d.innerHTML = "<p>Error al cargar los datos.</p>";
        }
    } else {
        d.innerHTML = '<img src="cargando.gif" width="120" height="120">';
    }
}





