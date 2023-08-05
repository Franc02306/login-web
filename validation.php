<?php

session_start();

$validado = false;

$db = @fopen("db.txt", "r");
$db = file("db.txt");
$i = 0;


while($db[$i] && !$validado){
    $campo = explode("|", $db[$i]);
    if(($_POST["username"] == $campo[2] || $campo[3]) && ($_POST["password"] == $campo[4])){
        $validado = true;
    }else{
        
    }
    $i++;
}


if($validado){
    $_SESSION["usuario_n"] = $campo[0]; #NOMBRE GUARDADO EN LA SESION
    $_SESSION["usuario_a"] = $campo[1]; #APELLIDO GUARDADO EN LA SESION
    $_SESSION["usuario_u"] = $campo[2]; #USUARIO GUARDADO EN LA SESION
    $_SESSION["usuario_e"] = $campo[3]; #EMAIL GUARDADO EN LA SESION
    $_SESSION["usuario_c1"] = $campo[4]; #CLAVE 1 GUARDADO EN LA SESION
    $_SESSION["usuario_C2"] = $campo[5]; #CLAVE 1 (SHA1) GUARDADO EN LA SESION
    header("Location: home.html");

}elseif($_SESSION["usuario_c1"] != $_SESSION["usuario_C2"]){
    header("Location: sign_in_error.html");
}else{
    session_destroy();
    header("Location: sign_in_error.html");
}
?>