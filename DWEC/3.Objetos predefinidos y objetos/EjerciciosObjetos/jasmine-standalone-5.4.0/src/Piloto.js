class Piloto {
    constructor(nombre){
        this._nombre = nombre;
    }

    get nombre(){
        return this._nombre;
    }

    set nombre(nombre){
        if (typeof nombre == 'string') {
            this._nombre = nombre;
        } else {
            throw new Error("La cadena no puede ser vacía");
        }
    }
}

class AeroPlano {
    constructor(modelo, piloto, copiloto){
        this._modelo = modelo;
        this._piloto = piloto;
        this._copiloto = copiloto;
    }

    get modelo(){
        return this._modelo;
    }

    set modelo(nombre){
        if (typeof nombre == 'string') {
            this._modelo = nombre;
        } else {
            throw new Error("La cadena no puede ser vacía");
        }
    }

    volar(){
        return `Volando ${this._modelo} con ${this._piloto} como piloto y ${this._copiloto} como copiloto`;
    }
}

const piloto1 = new Piloto("Hans Solo");
const piloto2 = new Piloto("Murdock");
const avioneta = new AeroPlano ("Airbus C295", piloto1.nombre, piloto2.nombre);

//Prueba por consola
console.log(avioneta.volar());  // Debería mostrar el texto "Volando Airbus C295 con Hans Solo como piloto y Murdock como copiloto"