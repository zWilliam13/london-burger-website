function Informacion() {
    var numeroEmpleado = document.getElementById("numeroEmpleado").value;

    // Validar que se ingresó un número de 4 cifras
    if (numeroEmpleado.length !== 4) {
      alert("Ingrese un número de 4 cifras válido.");
      return;
    }
    
    var estadoCivil = parseInt(numeroEmpleado.charAt(0));
    var edad = parseInt(numeroEmpleado.substring(1, 3));
    var sexo = parseInt(numeroEmpleado.charAt(3));
    
    if(edad < 18){
      alert("Error en la edad");
      return
    }

    var estadoCivilTexto;
    switch (estadoCivil) {
      case 1:
        estadoCivilTexto = "Soltero";
        break;
      case 2:
        estadoCivilTexto = "Casado";
        break;
      case 3:
        estadoCivilTexto = "Viudo";
        break;
      case 4:
        estadoCivilTexto = "Divorciado";
        break;
      default:
        estadoCivilTexto = "Estado civil desconocido";
    }
    
    if(sexo % 2 == 0) {
        sexoTexto = "Femenino"; 
      }
    else if(sexo % 2 != 0){
      sexoTexto = "Masculino";         
      }
       
    
    var resultado = "Estado Civil: " + estadoCivilTexto +
                    "\nEdad: " + edad + 
                    "\nSexo: " + sexoTexto;
    
    document.getElementById("resultado").innerHTML = resultado;
  }
  


  function Triangulo() {
    var caracter = document.construir.caracter.value;
    var tamaño = document.construir.tamaño.value;
    var resultado = '';

        for (var i = tamaño; i >= 1; i--) {
                for (var j = 1; j <= i; j++) {
                    resultado += ' '+caracter;
                }
                resultado += "\n";
            }
            document.construir.forma.value = resultado;
        }



function signoZodiacal(fecha){
    var dia = document.signo.dia.value;
    var mes = document.signo.mes.value;
    var resultado = '';
    var imagenSrc = '';

    if ((mes == 1 && dia >= 20) || (mes == 2 && dia <= 18)) {
        resultado = "Acuario" +": Existen dos tipos : los que son tímidos, sensibles y pacientes; y los que son exuberantes, vivos y frívolos." ;
        imagenSrc = './img/acuario.jpg';
    } 
    else if ((mes == 2 && dia >= 19) || (mes == 3 && dia <= 20)) {
        resultado = "Piscis" +": Los Piscis son sensibles a los sentimientos de los demás y responden con simpatía al tacto y al sufrimiento.";
        imagenSrc = './img/piscis.jpg';
    } 
    else if ((mes == 3 && dia >= 21) || (mes == 4 && dia <= 19)) {
        resultado = "Aries" + ": Son personas llenas de energía y entusiasmo por la vida ";
        imagenSrc = './img/aries.jpg';
    } 
    else if ((mes == 4 && dia >= 20) || (mes == 5 && dia <= 20)) {
        resultado = "Tauro" +": Es una persona que tiene una gran fuerza de voluntad, es práctico y decidido en la toma de decisiones.";
        imagenSrc = './img/tauro.jpg';
    } 
    else if ((mes == 5 && dia >= 21) || (mes == 6 && dia <= 20)) {
        resultado = "Géminis"+": Carácter doble, complejo y contradictorio es lo que mejor define a un Géminis.";
        imagenSrc = './img/geminis.jpg';
    } 
    else if ((mes == 6 && dia >= 21) || (mes == 7 && dia <= 22)) {
        resultado = "Cáncer"+": Son personas complicadas de clasificar, si se atiende a su carácter, también tímidos, aburridos pero también brillantes y famosos.";
        imagenSrc = './img/cancer.jpg';
    } 
    else if ((mes == 7 && dia >= 23) || (mes == 8 && dia <= 22)) {
        resultado = "Leo"+": Es creativo y extrovertido. Tienen ambición, fuerza, valentía y seguridad en sus capacidades.";
        imagenSrc = './img/leo.jpg';
    } 
    else if ((mes == 8 && dia >= 23) || (mes == 9 && dia <= 22)) {
        resultado = "Virgo"+": Los Virgo son observadores, pacientes y les cuesta hacer amigos por su carácter frío que muestran a veces.";
        imagenSrc = './img/virgo.jpg';
    } 
    else if ((mes == 9 && dia >= 23) || (mes == 10 && dia <= 22)) {
        resultado = "Libra"+": Tienen encanto, elegancia, buen gusto y son amables y pacíficos, por lo que no es raro que ante conflictos sean imparciales y muestren su rechazo a ellos. ";
        imagenSrc = './img/libra.png';
    } 
    else if ((mes == 10 && dia >= 23) || (mes == 11 && dia <= 21)) {
        resultado = "Escorpio"+": Es una persona tranquila que parece alejada de la realidad, aunque nunca dejan de observar todo a su alrededor con el ojo crítico.";
        imagenSrc = './img/escorpio.jpg';
    } 
    else if ((mes == 11 && dia >= 22) || (mes == 12 && dia <= 21)) {
        resultado = "Sagitario"+": Ser buenos organizadores y abarcar nuevos proyectos y aprender cosas nuevas.";
        imagenSrc = './img/sagitario.jpg';
    } 
    else {
        resultado = "Capricornio"+": Son personas justas y exigentes con los demás, porque también lo son con ellos mismos.";
        imagenSrc = './img/capricornio.jpg';
    }

    document.signo.zodiacal.value = resultado;
    document.getElementById('imagenSigno').src = imagenSrc;
}