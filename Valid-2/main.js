//Almacenar el formulario en la variable formulario
const formulario = document.getElementById('formulario');

//Almacenar en la variable inputs un array con todos los inputs
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
    address: /^[A-Za-z0-9'\.\-\s\,]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    state: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // 4 a 12 digitos.
    zip: /^[\d\/]{1,15}$/, // 14 digitos
    number: /^[0-9\-\+ ]{3,30}$/, // 7 a 14 numeros.
    country: /^[a-zA-ZÀ-ÿ\s]{1,40}$/ // Solo 3 digitos
}

const campos = {
    address: false,
    state: false,
    zip: false,
    number: false,
    country: false
}


//Funcion validarFormulario
const validarFormulario = (e) => {
    //El switch escoje el name y ejecuta un caso
    switch (e.target.name) {
        case "address":
            //Segun el caso se usa expresion regular input y campo
            validarCampo(expresiones.address, e.target, 'address');
            break;
        case "state":
            validarCampo(expresiones.state, e.target, 'state');
            break;
        case "zip":
            validarCampo(expresiones.zip, e.target, 'zip');
            break;
        case "number":
            validarCampo(expresiones.number, e.target, 'number');
            break;
        case "country":
            validarCampo(expresiones.country    , e.target, 'country');
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
    if (campos.address && campos.state && campos.zip && campos.number && campos.country) {

        // formulario.reset(); Para no enviar el formulario

        document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
        }, 5000);

        document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
            icono.classList.remove('formulario__grupo-correcto');
        });
    } else {
        e.preventDefault();
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
    }
});


