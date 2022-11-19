<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/ico" href="static/img/PHI_logo_icono/phi-icono.ico">
    <title>einsphi</title>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="static/css/styles4.css">
    <link rel="stylesheet" href="static/css/styles_sec.css">
</head>
<body>

    <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>

    <div class="contenido-principal">
        <nav class="nav-main">
            <img src="static/img/PHI_logo_icono/phi_logo.png" alt="logo" class="nav-img-logo">
            <ul class="nav-menu">
                <li>
                    <a href="inicio"> ☞ Inicio </a>
                </li>
                <li>
                    <a href="ElFisicoMatematico"> ☞ El Físico Matemático </a>
                </li>
                <li>
                    <a href="contactos"> ☞ Contactos </a>
                </li>
            </ul>
        </nav>
        <hr>
    </div>

    <div class="contenido">
        <?php
        $date = array(
            'what1' => "https://wa.me/message/QMU4GWMYONCVH1",
            'what2' => "https://wa.me/message/QMU4GWMYONCVH1",
            'face' => "https://www.facebook.com/elfisicomatematico",
            'insta' => "https://www.instagram.com/elfisicomatematico91/",
            'direc' => "https://goo.gl/maps/M7sYpmaxebBVzyGx8",
            'telegram' => "https://t.me/elfisicomatematico",
        );

        $rutas = array();
        
        if (isset($_GET["pg"])){

            $rutas = explode("/", $_GET["pg"]);

            if ($rutas[0]=="automatizacion" || $rutas[0]=="TablerosElectricos" 
            || $rutas[0]=="InstalacionesElectricas" || $rutas[0]=="capacitaciones"
            || $rutas[0]=="proyectos") {
                $enl = Mcontrolador::enlaceS($rutas[0]);
                include $enl;
            } elseif ($rutas[0]=="datos") {
                $enlas = $rutas[1];
                header("Location: $date[$enlas]");
                exit();
            } else {
                if ($rutas[0]=="ElFisicoMatematico") {
                    include "principales/fm.php";
                } elseif ($rutas[0]=="BinancePayQR" || $rutas[0]=="lemon_cash"
                || $rutas[0]=="Bpichincha") {
                    include "principales/imagenes.php";
                } elseif ($rutas[0]=="pacifico" || $rutas[0]=="pichincha"
                || $rutas[0]=="austro" || $rutas[0]=="provincia" 
                || $rutas[0]=="mercadopago" || $rutas[0]=="ars"){
                    include "principales/bancos.php";
                }
                else {
                    include "principales/".$rutas[0].".php";
                }
                
            }
        } else {
            include 'principales/inicio.php';
        }
    
        ?>
    </div>

    <section class="social">
        
        <p>Síguenos</p>

        <div class="links">
            <a href="datos/face">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="datos/insta">
                <i class="fab fa-instagram"></i>
            </a>
        </div>

        <footer class="pie">
            <h3>El Físico Matemático</h3>
            <div class="base_pie">
                <div>
                    <a href="contactos">Contactos</a>
                </div>
                <div>
                    <a href="datos/direc">Dirección</a>
                </div>
            </div>
        </footer>

    </section>

    <script src="static/js/main.js"></script>
</body>
</html>