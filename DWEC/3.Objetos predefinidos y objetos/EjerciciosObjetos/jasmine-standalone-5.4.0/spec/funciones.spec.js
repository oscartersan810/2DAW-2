describe("Testeo de boletín Objetos", () => {
    describe("Testeo Objeto Cuenta Bancaria", () => {

        const cuentas = [
            {titular: "Carlos", saldo: 10000},
            {titular: "Lidia", saldo: 12500},
            {titular: "Alicia", saldo: 8500},
            {titular: "Felipe", saldo: 9000}
        ];

        it("Las cuentas es un Array de Objeto", () => {
            cuentas.forEach(elemento => {
                expect(elemento).toBeInstanceOf(Object);
            });
        });

        it("Las Cuentas deberian de estar ordenadas alfabéticamente", () => {
            const cuentasOrdenadas = cuentas.sort((a, b) => a.titular.localeCompare(b.titular));
            expect(cuentas).toEqual(cuentasOrdenadas);
        });
    });

    describe("Testeo Jarra", () => {
        let jarra1;
        let jarra2;
        let jarra3;
        let jarra4;
        
        beforeEach(function () { // Se ejecuta una vez antes de llamar a cada especificación it
            jarra1 = new Jarra(10, 4); //Creamos jarra de 10l de capacidad y llena con 4l
            jarra2 = new Jarra(15, 8); //Creamos jarra de 15l de capacidad y llena con 8l
            jarra3 = new Jarra(20, 2); //Creamos jarra de 20l de capacidad y llena con 2l
            jarra4 = new Jarra(25, 1); //Creamos jarra de 25l de capacidad y llena con 1l
        });

        it("jarra1 debería tener contener una cantidad no superior a la capacidad", function () {
            jarra1.cantidad = 2 * jarra1.capacidad; //* jarra1.capacidad; // Intentamos cargar más litros de los que caben
            expect(jarra1.cantidad).toEqual(jarra1.capacidad);
        });
    
        it("jarra1 debería debería devolver una excepción si en cantidad cargamos un valor negativo", function () {
            expect(function () { jarra1.cantidad = -5 }).toThrowError("La cantidad no puede ser inferior a 0");
        });
    });
});
