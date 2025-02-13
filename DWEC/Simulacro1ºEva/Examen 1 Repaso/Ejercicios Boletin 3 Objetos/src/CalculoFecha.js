function numeroDiasFechas(fechaDesde, fechaHasta) {
    // Separa las fechas en día, mes y año
    let fechaDesdePartes = fechaDesde.split('/');
    let fechaHastaPartes = fechaHasta.split('/');
    let diaDesde = parseInt(fechaDesdePartes[0], 10);
    let mesDesde = parseInt(fechaDesdePartes[1], 10);
    let anoDesde = parseInt(fechaDesdePartes[2], 10);
    let diaHasta = parseInt(fechaHastaPartes[0], 10);
    let mesHasta = parseInt(fechaHastaPartes[1], 10);
    let anoHasta = parseInt(fechaHastaPartes[2], 10);

    // Crea objetos Date con las fechas
    let fechaDesdeObj = new Date(anoDesde, mesDesde - 1, diaDesde);
    let fechaHastaObj = new Date(anoHasta, mesHasta - 1, diaHasta);

    // Calcula la diferencia en milisegundos
    let diferenciaMilisegundos = fechaHastaObj - fechaDesdeObj;

    // Convierte la diferencia en días
    let diferenciaDias = diferenciaMilisegundos / (1000 * 60 * 60 * 24);

    // Redondea la diferencia a un número entero
    return Math.round(diferenciaDias);
}