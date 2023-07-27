<?php

session_start();
//Eliminar sesion
session_destroy();

header("Location: log_out.html");
?>