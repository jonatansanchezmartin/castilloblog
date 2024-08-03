<?php

// Iniciar sesión y la conexión a la base de datos

require_once "includes/conexion.php";

// Recoger los datos del formulario

if(isset($_POST)){
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

// Consulta para comprobar las credenciales del usuario

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login) == 1){
        $user = mysqli_fetch_assoc($login);
    


// Comprobar la contraseña / cifrar

        $verify = password_verify($password, $user["$validatedPassword"]);
        if($verify){
            // Utilizar una sesión para guardar los datos del usuario logueado
            $_SESSION["user"] = $user;

            if(isset($_SESSION["errorLogin"])){
                session_unset($_SESSION["errorLogin"]);

            }



        }else{
        // Si algo falla, enviar una sesión con el fallo
        $_SESSION["errorLogin"] = "Acceso incorrecto";

        }

    }else{
    // mensaje de error
    $_SESSION["errorLogin"] = "Acceso incorrecto";
    }
}

// Redigirir a index.php
header("Location: index.php");

?>