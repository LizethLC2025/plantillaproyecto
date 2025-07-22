<?php
// Siempre iniciar la sesión al principio de cualquier script que use $_SESSION
session_start();

// Incluimos el archivo global.php para usar las constantes (como PRO_NOMBRE)
// Asegúrate de que la ruta sea correcta desde vistas/ a config/
require_once "../config/global.php";

// Lógica para mostrar mensajes de error desde el controlador
// Este bloque puede ser removido si solo se usa el manejo de errores por JavaScript.
// Pero se mantiene como fallback o para mensajes de PHP puros.
$mensaje_error = false;
if (isset($_SESSION['login_error'])) {
    $mensaje_error = $_SESSION['login_error'];
    unset($_SESSION['login_error']); // Limpiamos el mensaje de la sesión después de mostrarlo
}

// --- IMPORTANTE: Lógica para redirigir si el usuario ya está logueado ---
// Si el usuario ya tiene una sesión activa (es decir, ya inició sesión),
// lo redirigimos directamente a la página principal para evitar que vea el formulario de login.
if (isset($_SESSION['idusuario']) && $_SESSION['idusuario'] > 0) {
    // Aquí puedes añadir lógica para redirigir a 'categorias.php' si es admin (idrol 1)
    // O mantener solo 'portafolios_principal.php' si es la página para todos los usuarios logueados.
    // Considerando que 'categorias.php' no existe, solo redirigimos a 'portafolios_principal.php'.
    header("Location: portafolios_principal.php");
    exit(); // Es crucial salir para evitar que el resto del código HTML se cargue
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo PRO_NOMBRE; ?> - Iniciar Sesión</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../public/css/blue.css">
    <link rel="stylesheet" href="../public/css/login.css">
    <link rel="shortcut icon" href="../public/img/favicon.ico">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b><?php echo PRO_NOMBRE; ?></b></a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Ingresa tus datos para ver</p>

            <?php if ($mensaje_error): ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Error!</h4>
                    <?php echo $mensaje_error; ?>
                </div>
            <?php endif; ?>

            <form method="post" id="frmAcceso">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email o Usuario" name="logina" id="logina" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Contraseña" name="clavea" id="clavea" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <script src="../public/js/jquery-3.1.1.min.js"></script>
    <script src="../public/bootstrap/js/bootstrap.min.js"></script>
    <script src="../public/js/icheck.min.js"></script>
    <script src="./js/login.js"></script>
    <script>
        // Script para inicializar iCheck (estilo visual de los inputs)
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>
</html>