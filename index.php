<?php
session_start();

if (!isset($_SESSION['idusuario']) || $_SESSION['idusuario'] == 0) {
    header("Location: vistas/login.php");
    exit();
} else {
    // Incluimos el header de la plantilla para los usuarios logueados
    require_once("vistas/header.php");
    ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h1 class="boxtittle">¡Bienvenido al Sistema de Ventas!</h1>
                            <p>Has iniciado sesión correctamente. Esta es la página principal de tu aplicación.</p>
                            <p><a href="vistas/categorias.php">Ir a Categorías</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    // Incluimos el footer de la plantilla
    require_once("vistas/footer.php");
}
?>