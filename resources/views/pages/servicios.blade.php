@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/servicios.css') }}">
@endpush

@section('content')

    <section class="services-section container py-5">
        <h1 class="section-title text-center mb-5">Nuestros Servicios</h1>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <h5>💻 Desarrollo de Software</h5>
                    <p>Soluciones a medida que se adaptan a los procesos reales de tu empresa.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <h5>📦 Alquiler de Software</h5>
                    <p>Sistemas listos para usar, sin altos costos de implementación inicial.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <h5>🛠️ Mantenimiento</h5>
                    <p>Soporte continuo, mejoras y evolución constante de tus sistemas.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <h5>📊 Asesorías</h5>
                    <p>Acompañamiento técnico para optimizar procesos y decisiones tecnológicas.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="software-section py-5">
        <div class="container">
            <h1 class="section-title text-center mb-4">
                Software disponible para alquiler
            </h1>

            <h5 class="section-subtitle text-center mb-5">
                1. Sistema integral de gestión e inventario para el alquiler de herramientas y equipos de construcción.
            </h5>
        </div>

        <!-- CARRUSEL -->
        <div id="heroCarousel" class="carousel slide carousel-fade software-carousel" data-bs-ride="carousel">

            <div class="carousel-inner">

                <!-- Slide principal -->
                <div class="carousel-item active">
                    <img src="{{ asset('img/logos/carrucel3.jpg') }}" class="d-block w-100" alt="Sistema de Alquiler">
                    <div class="carousel-caption">
                        <h2>Sistema de Alquiler de Herramientas</h2>
                        <p>Control total del inventario, alquileres, pagos y devoluciones en un solo sistema.</p>
                    </div>
                </div>

                <!-- Roles y permisos -->
                <div class="carousel-item">
                    <img src="{{ asset('img/logos/carrucel2.jpg') }}" class="d-block w-100" alt="Roles y permisos">
                    <div class="carousel-caption">
                        <h2>Gestión de Roles y Permisos</h2>
                        <p>Accesos controlados por rol, auditoría de acciones y seguridad de la información.</p>
                    </div>
                </div>

                <!-- Inventario -->
                <div class="carousel-item">
                    <img src="{{ asset('img/logos/carrucel1.jpg') }}" class="d-block w-100" alt="Inventario">
                    <div class="carousel-caption">
                        <h2>Gestión de Inventario</h2>
                        <p>Registro, clasificación y disponibilidad en tiempo real de cada herramienta.</p>
                    </div>
                </div>

                <!-- Alquileres -->
                <div class="carousel-item">
                    <img src="{{ asset('img/logos/carrucel1.jpg') }}" class="d-block w-100" alt="Alquileres">
                    <div class="carousel-caption">
                        <h2>Gestión de Alquileres</h2>
                        <p>Cálculo automático de días cobrables según horarios y reglas del negocio.</p>
                    </div>
                </div>

                <!-- Pagos -->
                <div class="carousel-item">
                    <img src="{{ asset('img/logos/carrucel1.jpg') }}" class="d-block w-100" alt="Pagos y cobros">
                    <div class="carousel-caption">
                        <h2>Pagos, Cobros y Morosidad</h2>
                        <p>Control de pagos, abonos, alertas y semáforo de clientes morosos.</p>
                    </div>
                </div>

                <!-- Incidencias -->
                <div class="carousel-item">
                    <img src="{{ asset('img/logos/carrucel1.jpg') }}" class="d-block w-100" alt="Incidencias">
                    <div class="carousel-caption">
                        <h2>Incidencias y Mantenimiento</h2>
                        <p>Registro de daños, pérdidas y días no cobrables por incidencias.</p>
                    </div>
                </div>

                <!-- Devoluciones -->
                <div class="carousel-item">
                    <img src="{{ asset('img/logos/carrucel1.jpg') }}" class="d-block w-100" alt="Devoluciones">
                    <div class="carousel-caption">
                        <h2>Gestión de Devoluciones</h2>
                        <p>Devoluciones parciales o totales con control FIFO automático.</p>
                    </div>
                </div>

                <!-- Soporte físico -->
                <div class="carousel-item">
                    <img src="{{ asset('img/logos/carrucel1.jpg') }}" class="d-block w-100" alt="Soporte físico">
                    <div class="carousel-caption">
                        <h2>Soporte Físico</h2>
                        <p>Registro de entregas y devoluciones con firma del bodeguero.</p>
                    </div>
                </div>

                <!-- Reportes -->
                <div class="carousel-item">
                    <img src="{{ asset('img/logos/carrucel1.jpg') }}" class="d-block w-100" alt="Reportes">
                    <div class="carousel-caption">
                        <h2>Reportes Gerenciales</h2>
                        <p>Reportes diarios, mensuales y detallados por cliente y herramienta.</p>
                    </div>
                </div>

            </div>

            <!-- Controles -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

@endsection
