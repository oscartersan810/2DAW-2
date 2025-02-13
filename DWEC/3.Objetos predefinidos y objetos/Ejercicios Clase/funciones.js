function volumenCilindro(){
    let radio = parseFloat (prompt("Introduce el radio del cilindro"));
    let altura = parseFloat (prompt("Introduce la altura del cilindro"));
    let volumen = Math.PI * Math.pow(radio,2) * altura;
    alert(volumen);  
 }
 