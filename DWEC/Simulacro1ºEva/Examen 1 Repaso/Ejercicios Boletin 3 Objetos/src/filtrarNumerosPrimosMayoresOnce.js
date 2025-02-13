function esPrimo(numero) {
    if (numero <= 1) {
      return false;
    }
    if (numero <= 3) {
      return true;
    }
    if (numero % 2 === 0 || numero % 3 === 0) {
      return false;
    }
    let i = 5;
    while (i * i <= numero) {
      if (numero % i === 0 || numero % (i + 2) === 0) {
        return false;
      }
      i += 6;
    }
    return true;
  }

  function filtrarPrimosMayoresOnce(array) {
    let primosMayoresOnce = array.filter(
      (numero) => numero > 11 && esPrimo(numero)
    );

    // Ordena el array de menor a mayor
    primosMayoresOnce.sort((a, b) => a - b);

    return primosMayoresOnce;
  }
  