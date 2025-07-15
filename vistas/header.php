<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- ELvamos a decir al navegador que el diseño que vamos a raelizar va a ser responsive o adaptable-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SysVentas</title>
    <!-- Añadimos la libreria de font aweson-->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Añadimos la libreria del tema de estilos AminLTE-->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- Añadimos la libreria de  AdminLTE-->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="stylesheet" href="../public/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../public/img/favicon.ico">
    <!--Añadimos la libreria del boostrap 3.3.5-->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>

<body class="hold-transtion skin-green sidebar-mini">

    <!--Div que contiene toda la estructura del body-->
    <div class="wrapper">
        <!-- Aqui va el header-->
        <header class="main-header">
            <!-- Logo-->
            <a href="#" class="logo">
                <!-- mini logo para sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>Sys</b>Ventas</span>
                <!-- logo para un dispositivo normal y disposivos moviles -->
                <span class="logo-lg"><b>SysVentas</b></span>
            </a> <!--Fin de logo -->
            <!-- Aqui va el header del Nabvar: los estilos se pueden encontrar en header.less-->
            <nav class="navbar navbar-static-top" role="navegation">
                <!-- Boton de la hamburguesa del navbar-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Navegación</span>
                </a>
                <!-- Navbar menú derecho -->
                <div class="navbar-custom-menu">
                    <ul class="navbar-nav">
                        <!-- Cuenta de usuario: los estilos lo puedes encontrar en dropdowm.less-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle">
                                <!--Cargamos la imagen del usuario-->
                                <img src="../public/img/Samak.jpg" alt="Imagen usuario" class="user-image">
                                <!--Nombre de usuario-->
                                <span class="hidden-xs">Lizeth Llulluna</span>
                            </a><!--Fin de la imagen-->
                            <!--desplegable del usuario-->
                            <ul class="dropdown-menu">
                                <!--Imagen del usuario-->
                                <li class="user-header">
                                    <img src="../public/img/Samak.jpg" alt="Imagen usuario" class="img-circle">
                                    <p>Lizeth Llulluna</p>
                                </li>
                                <!--menu footer o pie de menu-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Salir</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>

            </nav><!-- fin del navbar-->
        </header><!--fin del header-->

        <!--Menu izquierdo en columna , contiene un logo y el sidebar-->
        <aside class="main-sidebar">
            <section class="sidebar">
                <!--Ponemos cada uno de los menús-->
                <ul class="sidebar-menu">
                    <li class="header">SYSVENTAS</li>
                    <li>
                        <a href="#">
                            <i class="fa fa-cogs">
                                <span>configuración</span>
                            </i>
                        </a>


                    </li>
                    <!--lisa escritorio-->
                    <li>
                        <a href="">
                            <i class="fa fa-tasks"></i>
                            <span>Escritorio</span>
                        </a>
                    </li>
                    <!--Lista almacen-->

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Almacén</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="articulo.php">
                                    <i class="fa fa-circle-o"></i>Articulos
                                </a></li>

                            <li><a href="categoria.php">
                                    <i class="fa.fa-circle-o"></i>Categorías

                        </ul>
                    </li><!--fin de lsita almacen-->
                    <!--lista Persona-->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Ventas</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="venta.php">
                                    <i class="fa fa-circle-o"></i>Ventas
                                </a></li>
                            <li><a href="cliente.php">
                                    <i class="fa fa-circle-o"></i>Clientes
                                </a></li>
                    </li> <!--fin lista persona-->
                    <!--Lista de acceso-->
                    <li class="treeview">
                        <a href="">
                            <i class="fa fa-folder"></i>
                            <span>Acceso</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="usuario.php">
                                    <i class="fa fa-circle-o"></i>Usuarios
                                </a></li>
                            <li><a href="permiso.php">
                                    <i class="fa fa-circle-o"></i>Permisos
                                </a></li>


                        </ul>
                    </li>

                </ul>

            </section>

        </aside><!--fin del sidebar-->