<?php




if(isset($_POST)){

    // Conexión a la base de datos
    require_once "includes/conexion.php";

    // Iniciar sesión
    if(!isset($_SESSION)){
        session_start(); 
    }
    // Recoger los valores del formulario de registro

    $name = isset($_POST["name"]) ? mysqli_real_escape_string ($db, $_POST["name"]) : false;
    $lastName = isset($_POST["lastName"]) ? mysqli_real_escape_string ($db, $_POST["lastName"]) : false;
    $email = isset($_POST["email"]) ? mysqli_real_escape_string ($db, trim($_POST["email"])) : false;
    $password = isset($_POST["password"]) ? mysqli_real_escape_string ($db, $_POST["password"]) : false;


    // Array de errores
    $errors = array();

    // Validar datos antes de guardarlos en la base de datos

    // Validar el nombre

    if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)){
        $validatedName = true;
    }else{
        $validatedName = false;
        $errors["name"] ="El nombre no es válido";
    }


    // Validar apellidos

    if(!empty($lastName) && !is_numeric($lastName) && !preg_match("/[0-9]/", $lastName)){
        $validatedLastName = true;
    }else{
        $validatedLastName = false;
        $errors["lastName"] ="El campo apellidos no es válido";
    }

    // Validar email

    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $validatedEmail = true;
    }else{
        $validatedEmail = false;
        $errors["email"] ="El email no es válido";
    }


    // Validar contraseña

    if(!empty($password)){
        $validatedPassword = true;
    }else{
        $validatedPassword = false;
        $errors["password"] ="La contraseña está vacía";
    }


    $saveUser = false;

    if(count($errors) == 0){
        $saveUser = true;

        // Cifrar la contraseña

        $passwordSafe = password_hash($password, PASSWORD_BCRYPT, ["cost"=>4]);
       
        // Insertar usuario en la tabla de usuarios de la BBDD
    
        $sql = "INSERT INTO users VALUES(null, '$name', '$lastName', '$email', '$validatedPassword', CURDATE());"; 
        $saveUser = mysqli_query($db, $sql);

        if ($saveUser){
            $_SESSION["completed"] = "Elregistro se ha completado con éxito";
        }else{
            $_SESSION["errors"] = "Fallo al guardar el usuario";
        }


    }else{
        $_SESSION["errors"] = $errors;
    }

}

header("Location: index.php");





?>