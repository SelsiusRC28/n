//Almacenar el formulario en la variable formulario
const formulario = document.getElementById('formulario');

//Almacenar en la variable inputs un array con todos los inputs
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
    email: /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/, // Letras y espacios, pueden llevar acentos.
    password: /^[a-zA-ZÀ-ÿ\s\d@]{4,40}$/, // 4 a 12 digitos.

}

const campos = {
    email: false,
    password: false,
}


//Funcion validarFormulario
const validarFormulario = (e) => {
    //El switch escoje el name y ejecuta un caso
    switch (e.target.name) {
        case "email":
            //Segun el caso se usa expresion regular input y campo
            validarCampo(expresiones.email, e.target, 'email');
            break;
        case "password":
            validarCampo(expresiones.password, e.target, 'password');
            break;
    }
}

// Funcion validar campo
const validarCampo = (expresion, input, campo) => {
    // Si el valor del input y la expresion es true se cambia las clases segun los datos del campo
    if (expresion.test(input.value)) {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');

        campos[campo] = true;
    }
    // Sino se ejecuta lo contrario
    else {
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
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


   
    if (campos.email && campos.password ) {
        setTimeout(() => {
            document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
        }, 5000);
  
        
    } else {
        // e.preventDefault();
      
    }
});




