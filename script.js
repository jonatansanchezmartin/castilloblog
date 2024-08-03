function checkLogin(){
    let emailLogin = document.getElementById("nameLogin").value; 
    let passwordLogin = document.getElementById("passwordLogin").value;
    let errorEmailLogin = document.getElementById("errorEmailLogin");
    let errorpasswordLogin = document.getElementById("errorPasswordLogin");

    if(emailLogin !== ""){
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (emailRegex.test(emailInput)) {
            if (passwordLogin !== ""){

            }else{
                errorPasswordLogin.textContent = "Falta la contraseña";
                errorPasswordLogin.style.color = "red";
            }
        }else{
            errorEmailLogin.textContent = "El email no es válido";
            errorEmailLogin.style.color = "red";
    }

}
}


function checkRegister(){
    let emailRegister = document.getElementById("nameRegister").value; 
    let passwordRegister = document.getElementById("passwordRegister").value;
    let errorEmailRegister = document.getElementById("errorEmailRegister");
    let errorpasswordRegister = document.getElementById("errorPasswordRegister");

    if(emailRegister !== ""){
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (emailRegex.test(emailInput)) {
            if (passwordRegister !== ""){

            }else{
                errorPasswordRegister.textContent = "Falta la contraseña";
                errorPasswordRegister.style.color = "red";
            }
        }else{
            errorEmailRegister.textContent = "El email no es válido";
            errorEmailRegister.style.color = "red";
    }

}
}

