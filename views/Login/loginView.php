<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Tiendas de arreglos florales ">
    <link rel="shortcut icon" type="image/png" href="assets/ico/logobeta2.ico">
    <meta name="keywords" content="Diseño floral, Arreglo florales, Floristeria">
    <meta name="viewport" content="width=device-width" />
    <title>Tiendas online de areglos florales</title>

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/sweetalert/sweetalert2.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/Style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/plugins/sweetalert/sweetalert2.all.js"></script>

    <style>
    .mapa-responsive {
        overflow: hidden;
        padding-bottom: 89.7%;
        position: relative;
        height: 0;
    }

    .mapa-responsive iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }

    #card-formulario-mapa {
        padding: 15px;
    }

    #boton_enviar {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .mensajeError {
        color: red;
        font-size: 12px;
    }

    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .float:hover {
        text-decoration: none;
        color: #25d366;
        background-color: #fff;
    }

    .my-float {
        margin-top: 16px;
    }

    .error {
        color: #FF0000;
    }

    .invalid-feedback {
        display: block !important
    }

    #login_view{
        margin: 40px auto; 
        width: 50%;
    }

    @media (max-width:575px){
        #login_view{
            width: 80%;
        }
    }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/9e81b3d61e.js" crossorigin="anonymous"></script>

    <a href="https://wa.me/593991887965?text=Hola%20necesito%20informacion" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <header>
        <div id="principalheader" class="container">
            <div class="row align-items-center">
                <div class="col-4 col-sm-4 col-md-3 col-lg-2 catalogo">
                    <a href="index.php?c=login&a=index"><img id="imagen_logo" src="assets/img/logobeta3.png" alt="Logo de la tienda" /></a>
                </div>
                <div id="nav-principal" class="col-9 col-sm-8 col-md-9 col-lg-10 catalogo">
                    <nav id="posicionamiento" class="navbar navbar-expand-md navbar-dark navbar-main">
                        <button id="botonex" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mainNav"
                            aria-controls="mainNav" aria-expanded="false" aria-label="Barra de navegación">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="mainNav" class="collapse navbar-collapse ">
                            <div class="nav text-dark ms-auto flex-column flex-md-row">
                                <a href="index.php?c=login&a=index" class="nav-link ">Iniciar Sesion</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main><br>
        <div class="container-fluid" style="" id="login_view">
            <div class="card">
                <h4 class="card-header" style="text-align: center; background: black; color: white;">INICIO DE SESIÓN
                </h4>
                <div class="card-body">
                    <form id="login" action="index.php?c=login&a=login" method="post" style="margin: 5px auto; width: 60%;">
                        <div class="input-group mb-4">
                            <div class="input-group-append form group">
                                <span class="input-group-text" style="height: 38.67px;"><i
                                        class="fas fa-id-card"></i></span>
                            </div>
                            <input id="cedula" type="text" name="cedula" maxlength=10 class="form-control input_user" value=""
                                placeholder="cedula">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-append">
                                <span class="input-group-text" style="height: 38.67px;"><i
                                        class="fas fa-key"></i></span>
                            </div>
                            <input id="password" type="password" name="password" class="form-control input_pass" value=""
                                placeholder="contraseña">
                        </div>
                        <div class="col-md-12" style="text-align: center;">
                            <button class="btn btn-primary" type="submit">Iniciar Sesión</button>
                        </div>
                    </form>
                    <p style="text-align: center;">¿No tienes una cuenta?<br><a
                            href="index.php?c=login&a=registro">Registrate</a></p>
                </div>
            </div>
        </div>
    </main><br>
    <footer>
        <div id="SesionNosotros" style="text-align: center;">
            <h2 style="text-align: center; color: white; font-weight: bold;">En flores Gala</h2>
            <p style="text-align: center; color: white; font-size: 20px;">Trabajamos con rosas de exportación de la más
                alta
                calidad, que recibimos diariamente desde las fincas para garantizar la frescura de nuestros arreglos.
            </p>
            <div style="width:100%; text-align:center;margin:0px auto;">
                <button id="boton_nosotros" onclick="location.href='Nosotros.html'">Conoce más sobre
                    nosotros</button>
            </div>
        </div><br>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <div id="addresRedesSociales" class="disenofooter">
                        <h5 class="titulosfooter">Flores Gala</h5>
                        <p class="parafosfooter"> Siguenos en nuestras redes sociales</p>
                        <div id="menu_de_redes_sociales">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100009847033039">
                                        <img class="iconos_redes_Sociales" src="assets/img/Iconos/IconoFacebok.png"
                                            alt="Logo de la tienda" /></a>
                                <li>
                                    <a href="https://www.instagram.com/kaas7520/"><img class="iconos_redes_Sociales"
                                            src="assets/img/Iconos/IconoInstagram.png" alt="Logo de la tienda" /></a>
                                <li>
                                    <a href="https://twitter.com/kaas7520"><img class="iconos_redes_Sociales"
                                            src="assets/img/Iconos/IconoTwitter.png" alt="Logo de la tienda" /></a>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCkOPY_p67ooImx7dZQipQAA"><img
                                            class="iconos_redes_Sociales" src="assets/img/Iconos/Iconoyoutube.png"
                                            alt="Logo de la tienda" /></a>
                                <li>
                                    <a
                                        href="https://www.tiktok.com/@terror_kaas?lang=es&is_copy_url=1&is_from_webapp=v1"><img
                                            class="iconos_redes_Sociales" src="assets/img/Iconos/Iconotiktok.png"
                                            alt="Logo de la tienda" /></a>
                                <li>
                                    <a href="https://wa.me/593991887965?text=Hola%20necesito%20informacion"><img
                                            class="iconos_redes_Sociales" src="assets/img/Iconos/IconoWhatsapp.png"
                                            alt="Logo de la tienda" /></a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="disenofooter" id="DisenodeSucursal">
                        <h5 class="titulosfooter">Sucursales</h5>
                        <div class="row">
                            <div class="col-6 col-sm-12 col-md-12 col-lg-12 parrafossucursal">
                                <h6>Guayaquil</h6>
                                <p>Dirrección: Av. Juan Tanca Marengo Km.0.5</p>
                                <p>Télefono: (4) 3712380</p>
                                <p>Celular: 099188796</p>
                            </div>
                            <div class="col-6 col-sm-12 col-md-12 col-lg-12 parrafossucursal">
                                <h6>Quito</h6>
                                <p>Dirrección: Avenida Patria, Quito 170143</p>
                                <p>Télefono: (2) 2901686</p>
                                <p>Celular: 0990067417</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="disenofooter" id="ayuda">
                        <h5 class="titulosfooter">Ayuda</h5>
                        <a href="">Como comprar</a>
                        <a href="">Envio y Entrega</a>
                        <a href="">Pago y Facturacón</a>
                        <a href="">Devolución y Rembolso</a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="disenofooter" id="politicas">
                        <h5 class="titulosfooter">Politicas</h5>
                        <a href="index.php?views/Estaticas/ContactanosView.php">Contacto</a>
                        <a href="">Política de cookies</a>
                        <a href="">Política de privacidad</a>
                        <a href="">Términos y condiciones</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="assets/js/login.js"></script>
</html>