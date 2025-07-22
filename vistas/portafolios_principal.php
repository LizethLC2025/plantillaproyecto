<?php
session_start();

// Si no hay una sesión activa o el usuario no está logueado, lo enviamos al login.
if (!isset($_SESSION['idusuario']) || $_SESSION['idusuario'] == 0) {
    header("Location: login.php");
    exit();
}
// Opcional: Si el administrador (idrol 1) NO debe ver esta página, puedes descomentar las líneas de abajo
// y redirigirlo a su página (ej. categorias.php). Si sí puede verla, deja esto comentado.
// if (isset($_SESSION['idrol']) && $_SESSION['idrol'] == 1) {
//     header("Location: categorias.php");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecciona tu Portafolio</title>
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="stylesheet" href="../public/font-awesome/css/font-awesome.min.css">

    <style>
        body {
            background-color: #000000ff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .portfolio-selection {
            background-color: #fff;
            padding: 80px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 900px;
            width: 100%;
        }
        .portfolio-selection h2 {
            margin-bottom: 30px;
            color: #333;
            font-size: 2.5em;
        }
        .portfolio-item {
            margin-bottom: 10px;
            transition: transform 0.3s ease;
        }
        .portfolio-item:hover {
            transform: translateY(-5px);
            color: #435243
        }
        .portfolio-item img {
            max-width: 150px;
            height: auto;
            border-radius: 10%; /* Para que los iconos sean redondos si te gusta */
            border: 3px solid #eee;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .portfolio-item h3 {
            margin-top: 15px;
            color: #555;
        }
        .portfolio-item a {
            text-decoration: none;
            color: inherit;
            display: block; /* Para que todo el área del ítem sea clicable */
        }
    </style>
</head>
<body>

<div class="portfolio-selection">
    <h2>Selecciona un Portafolio</h2>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
            <a href="samak/index.php"> <img src="../vistas/samak/imagenes/samaklogo.webp" alt="Samak"> <h3>Samak</h3>
            </a>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
            <a href="ferus/principal.php"> <img src="../vistas/ferus/img/logo.webp" alt="Ferus"> <h3>Ferus</h3>
            </a>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
            <a href="gigglioot/index.php"> <img src="../vistas/gigglioot/img/icon_gigglioot.webp" alt="Giggliot"> <h3>Giggliot</h3>
            </a>
        </div>

        <div class="col-xs-12" style="margin-top: 30px;">
            <a href="../vistas/login.php" class="btn btn-danger">Cerrar Sesión</a>
            
        </div>
    </div>
</div>

<script src="../public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="../public/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>