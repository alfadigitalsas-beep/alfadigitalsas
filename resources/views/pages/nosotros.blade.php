@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">
@endpush

@section('title','Sobre Nosotros')
@section('header','Sobre Nosotros')

@section('content')

{{-- ===== SECCIÓN HERO ===== --}}
<section class="nosotros-section">
    <div class="nosotros-container">

        <div class="nosotros-texto">
            <h2>Alquiler sin complicaciones</h2>
            <h4>Un equipo cercano con grandes ambiciones</h4>

            <p>
                En <strong>TECA ARQUITECTOS</strong> trabajamos para que el alquiler
                de herramientas y equipos sea simple, rápido y confiable.
            </p>

            <p>
                Creemos en la organización, la tecnología y el acompañamiento
                constante para que nuestros clientes se enfoquen en lo más importante:
                construir.
            </p>
        </div>

        <div class="nosotros-imagen">
            <img src="{{ asset('img/logos/serv3.jpg') }}" alt="Equipo TECA">
        </div>

    </div>
</section>

{{-- ===== SECCIÓN VALORES ===== --}}
<section class="valores-section">
    <div class="valores-container">

        <div class="valores-imagenes">
            <img src="{{ asset('img/logos/serv4.jpg') }}" alt="Ciudad">
            <img src="{{ asset('img/logos/serv5.jpg') }}" alt="Trabajo en equipo">
        </div>

        <div class="valores-texto">
            <h2>Nuestros valores</h2>

            <p>
                Somos una empresa enfocada en soluciones tecnológicas para el control
                y gestión del alquiler de equipos.
            </p>

            <p>
                Acompañamos a pequeñas y medianas empresas en la digitalización
                de sus procesos operativos.
            </p>

            <p>
                Creemos en la transparencia, el trabajo en equipo y la mejora continua.
            </p>
        </div>

    </div>
</section>
{{-- ===== SECCIÓN MISION ===== --}}
<section class="nosotros-section">
    <div class="nosotros-container">

        <div class="nosotros-texto">  
            <h2>Nuestra Misión</h2>           

            <p>
                 Impulsar el crecimiento de las empresas  más allá,
                 ofreciendo soluciones tecnológicas innovadoras
                 y accesibles que optimicen sus operaciones y les permitan alcanzar su máximo potencial.
            </p>
            
        </div>

        <div class="nosotros-imagen">
            <img src="{{ asset('img/logos/serv6.png') }}" alt="Equipo TECA">
        </div>

    </div>
</section>
{{-- ===== SECCIÓN VISION ===== --}}
<section class="valores-section">
    <div class="valores-container">

        <div class="valores-imagenes">
            <img src="{{ asset('img/logos/serv7.png') }}" alt="Ciudad">
            
        </div>

        <div class="valores-texto">
            <h2>Nuestra Visión</h2>

            <p>
                Ser la empresa líder en soluciones tecnológicas en la región,
                 reconocida por nuestra innovación, calidad de servicio
                  y compromiso con el éxito de nuestros clientes.
            </p>
        </div>

    </div>
</section>
{{-- ===== SECCIÓN FILOSOFÍA / VALORES EN COLUMNAS ===== --}}
<section class="filosofia-section">
    <div class="filosofia-container">

        <div class="filosofia-titulo">
            <h2>Desde Colombia — con visión internacional</h2>
        </div>

        <div class="filosofia-grid">

            <div class="filosofia-item">
                <h4>Con los pies en la tierra</h4>
                <p>
                    Somos una empresa cercana, construida con esfuerzo propio,
                    enfocada en soluciones reales para nuestros clientes.
                </p>
            </div>

            <div class="filosofia-item">
                <h4>Innovadores</h4>
                <p>
                    Apostamos por la tecnología como motor de crecimiento y mejora
                    continua de nuestros servicios.
                </p>
            </div>

            <div class="filosofia-item">
                <h4>Experiencia</h4>
                <p>
                    Contamos con trayectoria en el sector de alquiler, construcción
                    y control de inventarios.
                </p>
            </div>

            <div class="filosofia-item">
                <h4>Comprometidos</h4>
                <p>
                    Crecemos de forma responsable, acompañando a nuestros clientes
                    en cada etapa de su negocio.
                </p>
            </div>

        </div>
    </div>
</section>
{{-- ===== SECCIÓN HISTORIA ===== --}}
<section class="historia-section">
    <div class="historia-container">

        {{-- TEXTO HISTORIA --}}
        <div class="historia-texto">
            <h2>Cómo empezó todo</h2>

            <p>
                En el año 2024 identificamos una necesidad clara en el sector
                de la construcción y el alquiler de herramientas: la falta de
                control, organización y trazabilidad en los procesos diarios.
            </p>

            <p>
                Muchos negocios trabajaban de forma manual, con registros
                dispersos y sin información clara sobre inventarios,
                movimientos y gastos.
            </p>

            <p>
                Así nació <strong>ALFA DIGITAL SOLUTIONS S.A.S</strong>, como una solución
                tecnológica diseñada para simplificar la gestión del alquiler,
                mejorar la toma de decisiones y acompañar el crecimiento de
                pequeñas y medianas empresas.
            </p>

            <div class="historia-firma">
                <span>Dirección General</span><br>
                <strong>ALFA DIGITAL SOLUTIONS S.A.S</strong>
            </div>
        </div>

        {{-- PERFIL / MENSAJE --}}
        <div class="historia-perfil">
            <img src="{{ asset('img/logos/logotipo3.png') }}" alt="Director General">

            <h4>César Herrera</h4>
            <h4>Andres Ortega</h4>
            <h4>Edinson Rosero</h4>
            <span>Directores General / S. A .S</span>

            <blockquote>
                “La tecnología no debe complicar los procesos,
                debe hacerlos simples, claros y eficientes.”
            </blockquote>
        </div>

    </div>
</section>
{{-- ===== SECCIÓN INFO ===== --}}
<section class="hero-section">
    <div class="hero-container">

        <h1 class="hero-title">
            Ahorra tiempo, alquila en línea
        </h1>

        <p class="hero-text">
            Gestiona el alquiler de herramientas y equipos de forma rápida,
            organizada y sin complicaciones.
        </p>

        <p class="hero-subtext">
            Controla inventarios, movimientos, gastos y clientes desde un
            solo lugar, con información clara y en tiempo real.
        </p>

        

    </div>
</section>

@endsection
