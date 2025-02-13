let cuenta1 = {
    titular: "Javier",
    saldo: 3000,
    ingresar: function(cantidad) {
        this.saldo += cantidad;
        return this.saldo;
    },
    extraer: function(cantidad) {
        if (cantidad <= this.saldo) {
            this.saldo -= cantidad;
        } else {
            console.log("Fondos insuficientes");
        }
        return this.saldo;
    },
    transferir: function(cuenta, cantidad) {
        if (cantidad <= this.saldo) {
            this.extraer(cantidad);
            cuenta.ingresar(cantidad);
        } else {
            console.log("Fondos insuficientes para la transferencia");
        }
    },
    toString: function() {
        return `Titular: ${this.titular}, Saldo: ${this.saldo}`;
    }
};

let cuenta2 = {
    titular: "Rocío",
    saldo: 5000,
    ingresar: function(cantidad) {
        this.saldo += cantidad;
        return this.saldo;
    },
    extraer: function(cantidad) {
        if (cantidad <= this.saldo) {
            this.saldo -= cantidad;
        } else {
            // console.log("Fondos insuficientes");
            throw new Error("Fondos insuficientes");
            
        }
        return this.saldo;
    },
    transferir: function(cuenta, cantidad) {
        if (cantidad <= this.saldo) {
            this.extraer(cantidad);
            cuenta.ingresar(cantidad);
        } else {
            console.log("Fondos insuficientes para la transferencia");
        }
    },
    toString: function() {
        return `Titular: ${this.titular}, Saldo: ${this.saldo}`;
    }
};

// Ejemplo de uso:
console.log(cuenta1.toString()); // Titular: Javier, Saldo: 3000
console.log(cuenta2.toString()); // Titular: Rocío, Saldo: 5000

// Ingresar en cuenta1
cuenta1.ingresar(1000); 
console.log(cuenta1.toString()); // Titular: Javier, Saldo: 4000

// Extraer de cuenta2
cuenta2.extraer(1000); 
console.log(cuenta2.toString()); // Titular: Rocío, Saldo: 4000

// Transferir de cuenta1 a cuenta2
cuenta1.transferir(cuenta2, 1500);
console.log(cuenta1.toString()); // Titular: Javier, Saldo: 2500
console.log(cuenta2.toString()); // Titular: Rocío, Saldo: 5500

//Array de cuentas
let cuentas = [
    {titular: "Carlos", saldo: 10000},
    {titular: "Lidia", saldo: 12500},
    {titular: "Alicia", saldo: 8500},
    {titular: "Felipe", saldo: 9000}
];

console.log(cuentas.sort((a, b) => a.titular.localeCompare(b.titular)));


