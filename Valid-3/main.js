//Almacenar el formulario en la variable formulario
const formulario = document.getElementById('formulario');

//Almacenar en la variable inputs un array con todos los inputs
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // 4 a 12 digitos.
    card: /^(?:\d{15,16}|\d{4}(?:(?:\s+\d{4}){3}|\s+\d{6}\s\d{5}))$/, // 14 digitos
    date: /^[\d\/]{5}$/, // 7 a 14 numeros.
    cvv: /^\d{2,5}$/ // Solo 3 digitos
}

const campos = {
    nombre: false,
    apellido: false,
    card: false,
    date: false,
    cvv: false
}


//Funcion validarFormulario
const validarFormulario = (e) => {
    //El switch escoje el name y ejecuta un caso
    switch (e.target.name) {
        case "nombre":
            //Segun el caso se usa expresion regular input y campo
            validarCampo(expresiones.nombre, e.target, 'nombre');
            break;
        case "apellido":
            validarCampo(expresiones.apellido, e.target, 'apellido');
            break;
        case "card":
            validarCampo(expresiones.card, e.target, 'card');
            break;
        case "date":
            validarCampo(expresiones.date, e.target, 'date');
            break;
        case "cvv":
            validarCampo(expresiones.cvv, e.target, 'cvv');
            break;
    }
}

// Funcion validar campo
const validarCampo = (expresion, input, campo) => {
    // Si el valor del input y la expresion es true se cambia las clases segun los datos del campo
    if (expresion.test(input.value)) {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos[campo] = true;
    }
    // Sino se ejecuta lo contrario
    else {
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos[campo] = false;
    }
}




inputs.forEach((inputs) => {
    // Si una tecla a sido apretada ejecuta la funcion validarFormulario
    inputs.addEventListener('keyup', validarFormulario);
    // Si se hace click ejecuta la funcion validarFormulario
    inputs.addEventListener('blur', validarFormulario);
})


formulario.addEventListener('submit', (e) => {


    const terminos = document.getElementById('terminos');
    if (campos.nombre && campos.apellido && campos.card && campos.date && campos.cvv) {

        // formulario.reset(); Para no enviar el formulario

        

        document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
            icono.classList.remove('formulario__grupo-correcto');
        });
    } else {
        e.preventDefault();
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
    }
});


function fechas(elEvento) {
    var evento = elEvento || window.event;
    if (evento.keyCode == 8) {} else {
        var fecha = document.getElementById('date');
        if (fecha.value.length == 2) {
            fecha.value += "/";
        }
    }
}