function calculaIMC(peso, altura, sexo) {
    //Comprobaciones y errores
    if (peso < 0) {
        return {
            error: "El peso no puede tener un valor negativo" 
        };
    }

    if (altura < 0) {
        return {
            error: "La altura no puede tener un valor negativo" 
        };
    }
    const imc = parseFloat((peso / (altura * altura)).toFixed(1));

    let diagnostico = "";
    if ((imc < 17 && sexo=='m') || (imc < 18 && sexo=='h')) {
        diagnostico = "Desnutrición";
    } else if((imc < 21 && sexo=='m') || (imc < 22 && sexo=='h')) {
        diagnostico = "Bajo Peso";
    } else if ((imc < 25 && sexo=='m') || (imc < 26 && sexo=='h')) {
        diagnostico = "Peso Normal";
    } else if ((imc < 30 && sexo=='m') || (imc < 36 && sexo=='h')) {
        diagnostico = "Sobrepeso";
    } else if ((imc < 37 && sexo=='m') || (imc < 38 && sexo=='h')) {
        diagnostico = "Obesidad";
    } else {
        diagnostico = "Obesidad mórbida";
    }

    return {
        imc: imc,
        diagnostico: diagnostico
    };
}

//Ejemplo de uso
let resultado = calculaIMC(85.0, 1.65, 'h');
if (resultado.error) {
    console.error(resultado.error);
} else {
    console.log(resultado);
}