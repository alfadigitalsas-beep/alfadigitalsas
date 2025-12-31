<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alfa Digital SAS</title>
 
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- CSS propio -->
    <link rel="stylesheet" href="{{ asset('css/app-raiz.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
     @stack('styles')
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark tech-navbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="/">
            <img src="{{ asset('img/logos/logotipo4.png') }}" alt="Alfa Digital Logo" class="logo-navbar">
            <span>Digital Solutions S.A.S</span>
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto gap-3">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/nosotros">Nosotros</a>
                </li>               
                <li class="nav-item">
                    <a class="nav-link" href="/servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-info px-3" href="/contacto">
                        Contáctenos
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- CONTENIDO -->
<main class="container my-5">
    @yield('content')
</main>

<!-- FOOTER -->
<footer class="tech-footer">
    <div class="footer-container">

        {{-- Marca --}}
        <div class="footer-brand">
            <h4>ALFA DIGITALSOLUTIONS S.A.S</h4>
            <p>Gracias por preferir.Alfa Digital Solutions S. A .S
            ¡Esperamos tu regreso muy pronto!
            Tecnología que impulsa negocios</p>
        </div>

        {{-- producto --}}
        <div class="footer-brand"> 
            <h4>PRODUCTOS</h4>
            <p>Software contable</p>
            <p>Software de Software</p>  
            <p>Software de inventario</p>
            <p>Optimisacion Tecnologica</p>
            <p>Software Gestión Empresarial</p>
            <p>Soporte y asesoria TI</p> 
        </div>
        {{-- Políticas --}}
        <div class="footer-brand">
            <h4>POLITICAS</h4>
            <p>Protección de datos</p>
            <p>Política de seguridad</p>
            
        </div>  
        {{-- Ubícanos --}}
        <div class="footer-brand">
            <h4>Ubícanos</h4>
            <p>Calle 10 No. 20 - 06</p>
            <p>alfadigital.sas@gmail.com</p>
            <p>(+57) 313 256 0420</p>
            <p>862060 Puerto Asís, Putumayo Colombia</p>
            
        </div> 

        {{-- Links --}}
        <div class="footer-links">
            <h5>Empresa</h5>
            <ul>
                <li><a href="#">Sobre nosotros</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>   

        {{-- Redes --}}
        <div class="footer-social">
            <h5>Síguenos</h5>
            <div class="social-icons">
                <a href="#" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" title="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>

    </div>

    {{-- Copyright --}}
    <div class="footer-bottom">
        © {{ date('Y') }} Alfa Digital Solutions S.A.S · Todos los derechos reservados
    </div>
</footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
