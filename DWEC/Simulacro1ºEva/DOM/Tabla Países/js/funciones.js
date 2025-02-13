let paises = [
    {
      nombre: "Francia",
      capital: "París",
      datos: {
        gobierno: "República",
        habitantes: 67407241,
        idioma: "francés",
      },
      imagen: "imagenes/france.png",
    },
    {
      nombre: "Alemania",
      capital: "Berlín",
      datos: {
        gobierno: "República federal",
        habitantes: 83149300,
        idioma: "alemán",
      },
      imagen: "imagenes/germany.png",
    },
    {
      nombre: "Italy",
      capital: "Roma",
      datos: {
        gobierno: "República parlamentaria",
        habitantes: 60257566,
        idioma: "italiano",
      },
      imagen: "imagenes/italy.png",
    },
    {
      nombre: "Portugal",
      capital: "Lisboa",
      datos: {
        gobierno: "República unitaria",
        habitantes: 10295909,
        idioma: "portugués",
      },
      imagen: "imagenes/portugal.png",
    },
    {
      nombre: "España",
      capital: "Madrid",
      datos: {
        gobierno: "Monarquía parlamentaria",
        habitantes: 47450795,
        idioma: "español",
      },
      imagen: "imagenes/spain.png",
    },
  ];
  
  function generaTabla() {
    let tabla = document.getElementById("tablaPaises");
    let tbody = tabla.getElementsByTagName("tbody")[0];
  
    // Eliminar todas las filas existentes en la tabla
    while (tbody.firstChild) {
      tbody.removeChild(tbody.firstChild);
    }
  
    for (let i = 0; i < paises.length; i++) {
      let fila = document.createElement("tr");
  
      let numero = document.createElement("td");
      numero.textContent = i + 1;
      fila.appendChild(numero);
  
      let pais = document.createElement("td");
      pais.textContent = paises[i].nombre;
      fila.appendChild(pais);
  
      let capital = document.createElement("td");
      capital.textContent = paises[i].capital;
      fila.appendChild(capital);
  
      let habitantes = document.createElement("td");
      habitantes.textContent = paises[i].datos.habitantes;
      fila.appendChild(habitantes);
  
      let bandera = document.createElement("td");
      let imagen = document.createElement("img");
      imagen.src = paises[i].imagen;
      bandera.appendChild(imagen);
      fila.appendChild(bandera);
  
      let acciones = document.createElement("td");
      let botonIdioma = document.createElement("button");
      botonIdioma.textContent = "Idioma";
      botonIdioma.addEventListener("click", function () {
        idioma(paises[i].datos.idioma);
      });
      acciones.appendChild(botonIdioma);
  
      let botonBorrar = document.createElement("button");
      botonBorrar.textContent = "Borrar";
      botonBorrar.addEventListener("click", function () {
        borrar(i);
      });
      acciones.appendChild(botonBorrar);
  
      let botonArriba = document.createElement("button");
      botonArriba.textContent = "Arriba";
      botonArriba.addEventListener("click", function () {
        arriba(i);
      });
      acciones.appendChild(botonArriba);
  
      let botonAbajo = document.createElement("button");
      botonAbajo.textContent = "Abajo";
      botonAbajo.addEventListener("click", function () {
        abajo(i);
      });
      acciones.appendChild(botonAbajo);
  
      fila.appendChild(acciones);
  
      tbody.appendChild(fila);
    }
  }
  
  function idioma(idioma) {
    alert("El idioma es: " + idioma);
  }
  
  function borrar(indice) {
    paises.splice(indice, 1);
    generaTabla(); // Actualizar la tabla después de eliminar el país
  }
  
  function arriba(indice) {
    if (indice > 0) {
      const pais = paises.splice(indice, 1)[0];
      paises.splice(indice - 1, 0, pais);
      generaTabla(); // Actualizar la tabla después de mover el país
    } else{
      alert("No se puede mover mas arriba");
    }
  }
  
  function abajo(indice) {
    if (indice < paises.length - 1) {
      const pais = paises.splice(indice, 1)[0];
      paises.splice(indice + 1, 0, pais);
      generaTabla(); // Actualizar la tabla después de mover el país
    } else{
      alert("No se puede mover mas abajo");
    }
  }
  
  
