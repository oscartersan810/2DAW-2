class Jarra {
  constructor(capacidad, cantidad) {
    if (capacidad < 0 || cantidad < 0 || cantidad > capacidad) {
      throw new Error("Argumento no válido");
    }
    this._capacidad = capacidad;
    this._cantidad = cantidad;
  }

  get cantidad() {
    return this._cantidad;
  }

  set cantidad(n) {
    if (n <= this._capacidad) {
      this._cantidad = n;
    } else {
      throw new Error("No se puede llenar mas de la capacidad actual");
    }
  }

  get capacidad() {
    return this._capacidad;
  }

  set capacidad(n) {
    if (n > 0) {
      this._capacidad = n;
    } else {
      throw new Error("La capacidad debe ser mayor a 0");
    }
  }

  llenar() {
    this._cantidad = this._capacidad;
  }

  vaciar() {
    this._cantidad = 0;
  }

  llenarDesde(jarra) {
    let espacio = jarra.capacidad - jarra.cantidad;
    let espacioDisponible = this.capacidad - this.cantidad;
    let cantidad = Math.min(espacio, espacioDisponible);
    this.cantidad += cantidad;
  }

  static comparar(jarra1, jarra2) {
    return jarra1.cantidad > jarra2.cantidad ? jarra1 : jarra2;
  }
  jarrasConMasCantidad(...jarras) {
    //FORMA MÁS COMPACTA (CON EL .filter DE ARRAYS)
    return jarras.filter((jarra) => jarra.cantidad > this.cantidad);

    /*FORMA MÁS TRADICIONAL
    let jarrasMasCantidad = [];
    for (let i=0; i<jarras.length; i++) {
        if(jarras[i].cantidad > this.cantidad) {
            jarrasMasCantidad.push(jarras[i]);
        }
    }
    return jarrasConMasCantidad;
    */
  }

  toString() {
    return `Capacidad: ${this._capacidad} litros, Cantidad: ${this._cantidad} litros`;
  }
}

const jarra1 = new Jarra(10, 4); // Crearía un objeto jarra1 con capacidad 10 litros y llena con una cantidad de 4 litros.
const jarra2 = new Jarra(15, 8); // Crearía un objeto jarra2 con capacidad 15 litros y llena con una cantidad de 8 litros.
