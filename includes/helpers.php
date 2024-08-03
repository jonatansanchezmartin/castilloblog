<?php


function showErrors($errors, $field){
    $alert = "";
    if(isset($errors[$field]) && !empty($field)){
        $alert = "<div class='alert alert-error'>".$errors[$field]."</div>";
    }

    return $alert;
}

// Ojo que esta función me da error



function eraseErrors (){
    $erased = false;

    $_SESSION["errors"] = null;
    $erased = session_unset();

    if(isset($_SESSION["completed"])){ 
    $_SESSION["completed"] = null;
    session_unset();
    }

    return $erased;
}


?>