function validaDireccionIP(direccionIP) {
    // Expresión regular para validar una dirección IP
    let regex = /^((25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)\.){3}(25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)$/;
  
    return regex.test(direccionIP);
  }