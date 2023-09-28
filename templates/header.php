<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MACAK</title>
    <link rel="icon" href="public/img/Favicon.png" type="image/png"/>
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--Iconos Fontawsome -->
    <script src="https://kit.fontawesome.com/f2eddab7e4.js" crossorigin="anonymous"></script>
  
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary-plantilla p-0">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">MACAK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a class="item nav-link listar activar_boton" aria-current="page" href="src/vistas/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="item nav-link listar activar_boton irfundaciones" href="src/vistas/fundaciones.php">Fundaciones Asociadas</a>
                    </li>
                    <li class="nav-item">
                        <a class="item nav-link listar activar_boton iradopcion" href="src/vistas/adopcion_apadrinamiento.php">Adopción y
                            Apadrinamiento</a>
                    </li>
                    <li class="nav-item">
                        <a class="item nav-link listar activar_boton irdonar" href="src/vistas/donaciones.php">Donaciones</a>
                    </li>

                    <?php
                    session_start();

                    if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
                    ?>
                        <li class="nav-item " style=" color:black; display:none;" id="iniciar_sesion">
                            <b><a class="item nav-link btn p-1 m-1 bg-primary-plantilla listar activar_boton" href="src/vistas/login.php">Iniciar Sesión</a></b>
                        </li>
                        <li class="nav-item " style=" color:black; display:none;" id="registrarse">
                            <b><a class="item nav-link btn p-1 m-1 bg-primary-plantilla listar activar_boton" href="src/vistas/register.php">Registrarse</a></b>
                        </li>
                        <?php
                        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '3') {
                        ?>
                            <li class="nav-item " style=" color:black; " id="iniciar_administrador_fundaciones">
                                <b><a class="item nav-link btn p-1 m-1 bg-primary-plantilla  " href="administrador"> <span>Admin</span></a></b>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item " style=" color:black; display:none;" id="iniciar_administrador_fundaciones">
                                <b><a class="item nav-link btn p-1 m-1 bg-primary-plantilla  " href="administrador"> <span>Admin</span></a></b>
                            </li>
                        <?php
                        }
                        ?>
                        <li class="nav-item " style=" color:black; " id="sesion_iniciada">
                            <b><a class="item nav-link btn p-1 m-1 bg-primary-plantilla listar activar_boton" href="src/vistas/users.php"> <span><i class="fa-solid fa-user"></i></span></a></b>
                        </li>
                        <li class="nav-item " style=" color:black; " id="cerrar_sesion_btn">
                            <b><a class="item nav-link btn p-1 m-1 bg-primary-plantilla  activar_boton" href="?cerrar_sesion=true">Cerrar Sesión</a></b>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item " style=" color:black; " id="iniciar_sesion">
                            <b><a class="item nav-link btn p-1 m-1 bg-primary-plantilla listar activar_boton" href="src/vistas/login.php">Iniciar Sesión</a></b>
                        </li>
                        <li class="nav-item " style=" color:black; " id="registrarse">
                            <b><a class="item nav-link btn p-1 m-1 bg-primary-plantilla listar activar_boton" href="src/vistas/register.php">Registrarse</a></b>
                        </li>
                        <li class="nav-item " style=" color:black; display:none;" id="iniciar_administrador_fundaciones">
                            <b><a class="item nav-link btn p-1 m-1 bg-primary-plantilla  " href="administrador"> <span>Admin</span></a></b>
                        </li>
                        <li class="nav-item " style=" color:black; display:none;" id="sesion_iniciada">
                            <b><a class="item nav-link btn p-1 m-1 bg-primary-plantilla listar activar_boton" href="src/vistas/users.php"> <span><i class="fa-solid fa-user"></i></span></a></b>
                        </li>
                        <li class="nav-item " style=" color:black; display:none;" id="cerrar_sesion_btn">
                            <b><a class="item nav-link btn p-1 m-1 bg-primary-plantilla  activar_boton" href="?cerrar_sesion=true">Cerrar Sesión</a></b>
                        </li>
                    <?php
                    }
                    ?>


                </ul>

            </div>

        </div>
    </nav>
    <div id="contenido">