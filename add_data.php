<?php


#RECIBIMIENTO DE DATOS
$nombre = $_POST["fname"];
$apellido = $_POST["lname"];
$usuario = $_POST["username"];
$correo = $_POST["email"];
$contra1 = $_POST["password1"];
$contra2 = $_POST["password2"];

$clave_sha1= sha1($contra2);


if(sha1($contra1) == sha1($contra2)){
    echo "claves iguales";
}

#GUARDADO DE CREDENCIALES EN ARCHIVO TXT
$db = @fopen("db.txt", "a+");

fwrite($db, ucwords($nombre)."|");
fwrite($db, ucwords($apellido)."|");
fwrite($db, $usuario."|");
fwrite($db, $correo."|");
fwrite($db, $contra1."|");
fwrite($db, $clave_sha1." ");


fwrite($db,chr(13).chr(10));    
fclose($db);

header("Location: registered.html");

?>