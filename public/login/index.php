<?php
    include '../../server/connection/conexion.php';
    date_default_timezone_set("America/Bogota");
    /*Sweet Alert -> Parametros */
    $title='';
    $text = '';
    $html='';
    $icon = '';
    $img='';
    $active=true;

    session_start();
    if (isset($_SESSION['id'])) {
        $GLOBALS['icon'] = 'success';
        $GLOBALS['title'] = 'Éxito';
        $GLOBALS['text'] = 'Ya has inciado sesión';
        $active=false;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta Data-->
    <meta charset="utf-8">
    <title>SitePersist</title>
    <meta charset="UTF-8">
    <meta name="author" content="Darkpersist(Mateo & Sebastian)">
    <meta name="description" content="Bookings System for Reservation spaces and electronics devices">
    <meta name="keywords" content="Bookings, SitePersist, Site">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/resources/assets/favicon.ico">
    <!--Import-->
    <script src="https://kit.fontawesome.com/5780471e07.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!---Login-->
    <div class="initiation">
        <div class="container">
            <div class="boxMain">
                <div class="box signin">
                    <h2>¿Ya tienes una cuenta?</h2>
                    <a onclick="left()" id="btn" class="signinBtn"><span>Iniciar sesión</span></a>
                </div>
                <div class="box signup">
                    <h2>¿Aún no tienes una cuenta?</h2>
                    <a onclick="right()" id="btn" class="signupBtn"><span>Inscribirse</span></a>
                </div>
            </div>
            <div class="formBx left">
                <div class="form signinForm">
                    <form action="index.php" method="post">
                        <h3>Iniciar sesión</h3>
                        <input id="actionIn" type="hidden" name="action" value="signin" required>
                        <div class="icon emailIn">
                            <input id="emailIn" onblur="verifyEmailIn()" type="email" name="email" placeholder=' Correo' maxlength="120" value="" required>
                            <i id="success" class="fas fa-check-circle"></i><i id="error" class="fas fa-exclamation-circle"></i><i id="warning" class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div class="icon passwordIn">
                            <input id="passwordIn" onblur="verifyPasswordIn()" type="password" name="password" placeholder=" Contraseña" maxlength="20" required>
                            <i id="success" class="fas fa-check-circle"></i><i id="error" class="fas fa-exclamation-circle"></i><i id="warning" class="fas fa-exclamation-triangle"></i>
                        </div>
                        <a onmouseenter="habilitarIn()">
                            <input id="submitIn" class="disabled" type="submit" value="Ingresar" disabled>
                        </a>
                        <a href="#" class="forgot">¿Olvidaste tu contraseña?</a>
                    </form>
                </div>
                <div class="form signupForm">
                    <form action="index.php" method="post">
                        <h3>Inscribirse</h3>
                        <input id="actionUp" type="hidden" name="action" value="signup" required>
                        <div class="icon nameUp">
                            <input id="nameUp" type="text" onblur="verifyNameUp()" name="name" placeholder=" Nombre Y Apellido(s)" maxlength="50" value="" required>
                            <i id="success" class="fas fa-check-circle"></i><i id="error" class="fas fa-exclamation-circle"></i><i id="warning" class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div class="icon emailUp">
                            <input id="emailUp" onblur="verifyEmailUp()" type="email" name="email" placeholder=" Correo" maxlength="120" value="" required>
                            <i id="success" class="fas fa-check-circle"></i><i id="error" class="fas fa-exclamation-circle"></i><i id="warning" class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div class="icon passwordUp">
                            <input id="passwordUp" type="password" name="password" placeholder=" Contraseña" maxlength="20" required>
                            <i id="success" class="fas fa-check-circle"></i><i id="error" class="fas fa-exclamation-circle"></i><i id="warning" class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div class="icon passwordcheckUp">
                            <input id="passwordcheckUp" onblur="verifyPasswordUp()" type="password" name="passwordcheck" placeholder=" Verificar Contraseña" maxlength="20" required>
                            <i id="success" class="fas fa-check-circle"></i><i id="error" class="fas fa-exclamation-circle"></i><i id="warning" class="fas fa-exclamation-triangle"></i>
                        </div>
                        <select id="typeUp" name="type" required>
                            <option value=""> Seleccione su cargo</option>
                            <option value="0"> Docente</option>
                            <option value="1"> Estudiante</option>
                            <option value="3"> Empleado</option>
                        </select>
                        <p class="terms"><input type="checkbox" name="terms" value="yes" required>Acepto los <a target="blank" href=" ../assets/docs/Terms_and_Conditions.pdf ">terminos y condiciones</a></p>
                        <a onmouseenter="habilitarUp()">
                            <input id="submitUp" class="disabled" type="submit" value="Registrar" disabled>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        <?php include "main.js"; ?>
    </script>
</body>

</html>