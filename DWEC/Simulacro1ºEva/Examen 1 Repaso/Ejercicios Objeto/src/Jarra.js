class Jarra {
    constructor(capacidad, cantidad) {
        this._capacidad = capacidad;
        this._cantidad = Math.min(cantidad, capacidad);
    }

    get capacidad() {
        return this._capacidad;
    }

    set capacidad(nuevaCapacidad) {
        this._capacidad = nuevaCapacidad;
    }

    get cantidad() {
        return this._cantidad;
    }

    set cantidad(nuevaCantidad) {
        if (nuevaCantidad < 0) {
            throw new Error("La cantidad debe ser un número positivo");
        }
        this._cantidad = Math.min(nuevaCantidad, this._capacidad);
    }

    llenar() {
        this._cantidad = this._capacidad;
    }

    vaciar() {
        this._cantidad = 0;
    }

    llenarDesde(otraJarra) {
        let espacioDisponible = this._capacidad - this._cantidad;
        let cantidadTransferida = Math.min(otraJarra.cantidad, espacioDisponible);
        this._cantidad += cantidadTransferida;
        otraJarra.cantidad -= cantidadTransferida;
    }

    static comparar(jarra1, jarra2) {
        return jarra1.cantidad > jarra2.cantidad ? jarra1 : jarra2;
    }

    jarrasConMasCantidad(...jarras) {
        return jarras.filter(jarra => jarra.cantidad > this._cantidad);
    }

    toString() {
        return `Capacidad: ${this._capacidad} litros, Cantidad: ${this._cantidad} litros`;
    }
}
