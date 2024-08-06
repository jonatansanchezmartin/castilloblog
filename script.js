function checkLogin() {
    // Obtener los valores de los campos de entrada y los elementos de error
    const emailLogin = document.getElementById("emailLogin").value.trim();
    const passwordLogin = document.getElementById("passwordLogin").value.trim();
    const errorEmailLogin = document.getElementById("errorEmailLogin");
    const errorPasswordLogin = document.getElementById("errorPasswordLogin");

    // Expresión regular para validar el formato del email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Restablecer mensajes de error
    errorEmailLogin.textContent = "";
    errorPasswordLogin.textContent = "";

    let isValid = true;

    // Validación del email
    if (emailLogin === "") {
        errorEmailLogin.textContent = "El email no debe estar vacío.";
        errorEmailLogin.style.color = "red";
        isValid = false;
    } else if (!emailRegex.test(emailLogin)) {
        errorEmailLogin.textContent = "El email no es válido.";
        errorEmailLogin.style.color = "red";
        isValid = false;
    }

    // Validación de la contraseña
    if (passwordLogin === "") {
        errorPasswordLogin.textContent = "La contraseña no debe estar vacía.";
        errorPasswordLogin.style.color = "red";
        isValid = false;
    } else if (passwordLogin.length < 6) {
        errorPasswordLogin.textContent = "La contraseña debe tener al menos 6 caracteres.";
        errorPasswordLogin.style.color = "red";
        isValid = false;
    }

    // Si todas las validaciones pasan, se envía el formulario
    if (isValid) {
        document.forms[0].submit();
    }
}



function checkRegister() {
    // Obtener los valores de los campos de entrada y los elementos de error
    const name = document.getElementById("nameRegister").value.trim();
    const lastName = document.getElementById("lastNameRegister").value.trim();
    const email = document.getElementById("emailRegister").value.trim();
    const password = document.getElementById("passwordRegister").value.trim();

    const nameError = document.getElementById("nameError");
    const lastNameError = document.getElementById("lastNameError");
    const emailError = document.getElementById("emailError");
    const passwordError = document.getElementById("passwordError");

    // Expresión regular para validar el formato del email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Restablecer mensajes de error
    nameError.textContent = "";
    lastNameError.textContent = "";
    emailError.textContent = "";
    passwordError.textContent = "";

    let isValid = true;

    // Validación del nombre
    if (name === "") {
        nameError.textContent = "El nombre no debe estar vacío.";
        nameError.style.color = "red";
        isValid = false;
    }

    // Validación de apellidos
    if (lastName === "") {
        lastNameError.textContent = "Los apellidos no deben estar vacíos.";
        lastNameError.style.color = "red";
        isValid = false;
    }

    // Validación del email
    if (email === "") {
        emailError.textContent = "El email no debe estar vacío.";
        emailError.style.color = "red";
        isValid = false;
    } else if (!emailRegex.test(email)) {
        emailError.textContent = "El email no es válido.";
        emailError.style.color = "red";
        isValid = false;
    }

    // Validación de la contraseña
    if (password === "") {
        passwordError.textContent = "La contraseña no debe estar vacía.";
        passwordError.style.color = "red";
        isValid = false;
    } else if (password.length < 6) {
        passwordError.textContent = "La contraseña debe tener al menos 6 caracteres.";
        passwordError.style.color = "red";
        isValid = false;
    }

    // Si todas las validaciones pasan, se envía el formulario
    if (isValid) {
        document.forms[0].submit();
    }
}





