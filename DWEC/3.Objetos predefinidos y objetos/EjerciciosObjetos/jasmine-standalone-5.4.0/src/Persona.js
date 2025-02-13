class Persona{
    constructor(nombre, edad){
        this._nombre = nombre;
        this._edad = edad;
    }

    get nombre(){
        return this._nombre;
    }

    get edad(){
        return this._edad;
    }

    set nombre(nombre){
        if (typeof nombre == 'string') {
            this._nombre = nombre;
        } else {
            throw new Error("El nombre no puede estar vacío");
        }
    }

    set edad(n){
        if (n>=0) {
            this._edad = edad;
        } else{
            throw new Error("No puede ser numero negativo");
        }
    }

    toString(){
        return `Nombre ${this._nombre} con edad ${this._edad}`;
    }

}

class Empleado extends Persona{

    constructor(nombre, edad, sueldo){
        super(nombre, edad);
        this._sueldo = sueldo;
    }

    get sueldo(){
        return this._sueldo;
    }

    set sueldo(n){
        if (n<=0) {
            this._sueldo = sueldo;
        } else{
            throw new Error("El sueldo no puede ser negativo");
            
        }
    }

    toString(){
        return super.toString()+` con sueldo ${this._sueldo}`;
    }
}

//Ejemplos de testeo
const persona = new Persona("Juan", 30);
console.log(persona.toString()); //Se mostraría Nombre Juan con edad 30

const empleado = new Empleado("Maria", 40, 3000);
console.log(empleado.toString()); //Se mostraría Nombre Maria con edad 40 con sueldo 30000

//Array de varios empleados

const empleados = [
    new Empleado("Juan", 18, 1250),
    new Empleado("Ana", 15, 870),
    new Empleado("Zamudio", 21, 1320),
    new Empleado("María", 19, 1650)
];

empleados.forEach(elemento => {
    console.log(elemento);
});

let copiaEmpleado = empleados;

//Por edad
copiaEmpleado.sort((a, b) => a.edad - b.edad);

copiaEmpleado.forEach(elemento => {
    console.log(elemento);
});

//Por sueldo
copiaEmpleado.sort((a, b) => a.sueldo - b.sueldo);

copiaEmpleado.forEach(elemento => {
    console.log(elemento);
});

copiaEmpleado.sort((a, b) => a.nombre.localeCompare(b.nombre));

copiaEmpleado.forEach(elemento => {
    console.log(elemento);
});