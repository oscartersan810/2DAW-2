 // Definir la función auxiliar para mostrar información de una cuenta
 function mostrarInfoCuenta(cuenta) {
    document.write("Titular: " + cuenta.titular);
    document.write(" ");
    document.write("Saldo: " + cuenta.saldo);
    document.write("<br>");
}

// Crear objetos literales para las cuentas
let cuenta1 = {
    titular: "Javier",
    saldo: 3000,
    ingresar: function(cantidad) {
        this.saldo += cantidad;
    },
    extraer: function(cantidad) {
        this.saldo -= cantidad;
    },
    transferir: function(cuentaDestino, cantidad) {
        this.extraer(cantidad);
        cuentaDestino.ingresar(cantidad);
    }
};

let cuenta2 = {
    titular: "Rocío",
    saldo: 5000,
    ingresar: function(cantidad) {
        this.saldo += cantidad;
    },
    extraer: function(cantidad) {
        this.saldo -= cantidad;
    },
    transferir: function(cuentaDestino, cantidad) {
        this.extraer(cantidad);
        cuentaDestino.ingresar(cantidad);
    }
};

// Realizar la transferencia
cuenta1.transferir(cuenta2, 500);

// Crear un array de cuentas
let cuentas = [
    {
        titular: "Carlos",
        saldo: 10000
    },
    {
        titular: "Lidia",
        saldo: 12500
    },
    {
        titular: "Alicia",
        saldo: 8500
    },
    {
        titular: "Felipe",
        saldo: 9000
    }
];

// Ordenar el array de cuentas por saldo de menor a mayor
cuentas.sort((a, b) => a.saldo - b.saldo);

// Mostrar la información de todas las cuentas
for (let cuenta of cuentas) {
    mostrarInfoCuenta(cuenta);
}