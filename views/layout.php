<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AsesoriasHoy VERSION 1</title>
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-218349858-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-218349858-1');
        </script>
</head>
<body>

    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="/build/img/logo.png" alt="Logo AsesoriasHoy">
                </a>
                <div class="mobile-menu">
                    <img src="/build/img/barra.png" alt="icono menu responsive">
                </div> <!-- .mobile-menu -->
                
                <div class="derecha">
                    <nav class="navegacion">
                        <a href="/nosotros">Nosotros</a>
                        <a href="/servicios">Servicios</a>
                        <!-- 
                        <a href="alumnos.php">Alumnos</a>
                        <a href="docentes.php">Docentes</a>
                        -->
                        <a href="/contacto">Contacto</a>
                    </nav>
                </div> <!-- .derecha -->
            </div> <!-- .barra -->
        </div> <!-- .contenedor .contenido-header -->
    </header>

    <?php echo $contenido; ?>
    
    <footer class="footer">
    <div class="contenedor barra">
        <nav class="navegacion">
            <a href="/nosotros">Nosotros</a>
            <a href="/servicios">Servicios</a>
            <!-- 
                <a href="alumnos.php">Alumnos</a>
                <a href="docentes.php">Docentes</a>
            -->
            <a href="/contacto">Contacto</a>
        </nav>
        <div class="redes">
            <a href="#facebook" id="facebook"><i class="fab fa-facebook"></i></a>
            <a href="#instagram" id="instagram"><i class="fab fa-instagram"></i></a>
            <a href="#whatsapp" id="whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div> <!-- .redes -->
    </div> <!-- .contenedor .barra -->

    <p class="copyright">Todos los Derechos Reservados <?php echo date('Y');?> &copy;</p>
    </footer> <!-- .footer .seccion -->

    <script src="/build/js/bundle.min.js"></script>
    
</body>
</html>