<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Profile</title>
</head>
<body bgcolor="7DA2F6"  align="center">
    <style>
        body {
            background: url(imagenes/fondo-amarillo.avif) no-repeat center/cover;
        }
    </style>
    <div class="options">
        <ul class="menu-items">
            <li class="uno">
                <a href="home.html"><img src="imagenes/home_icon.png" alt="casa_icono_web" height="40" width="40">HOME</a>
            </li>
            <li class="dos">
                <a href="edit_profile.php"><img src="imagenes/persona-icon.png" alt="lapiz_imagen" height="45" width="45"><b>YOUR PROFILE</b></a>
            </li>
            <li class="tres">
                <a href="log_out.php"><img src="imagenes/logout.png" alt="logout" height="30" width="30">LOG OUT</a>
            </li>
        </ul>
    </div>
    <table align="center" class="image">
        <tr>
            <br>
            <br>
            <br>
            <br>
            <br>
            <td align="center">
                <img src="imagenes/persona-icon.png" alt="imagen_de_perfil" height="150" width="150">
            </td>
        </tr>
    </table>
    <table class="datos" align="center">
        <tr>
            <td>
                Username: <?php session_start(); echo $_SESSION["usuario_u"] ?>
            </td>
        </tr>
        <tr>
            <td>
                Nombre: <?php echo $_SESSION["usuario_n"] ?>
            </td>
        </tr>
        <tr>
            <td>
                Apellido: <?php echo $_SESSION["usuario_a"] ?>
            </td>
        </tr>
        <tr>
            <td>
                Correo: <?php echo $_SESSION["usuario_e"]?>
            </td>
        </tr>
    </table>
