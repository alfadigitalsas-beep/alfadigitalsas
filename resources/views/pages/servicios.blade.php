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
    {{-- PLANES--}} 
    <section class="pricing-section container py-5">
        <h2 class="section-title text-center mb-5">
            Planes de Alquiler del Sistema
        </h2>

        <div class="row g-4 justify-content-center">

            {{-- PLAN ESTÁNDAR --}}
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <h4 class="plan-title">Plan Estándar</h4>
                    <p class="plan-price">$280.000 <span>/ mes</span></p>

                    <ul class="plan-features">
                        <li>✅ Acceso a versión estándar</li>
                        <li>✅ Hosting en servidor confiable</li>
                        <li>✅ Dominio incluido</li>
                        <li>✅ Implementación inicial</li>
                        <li>✅ Backups periódicos</li>
                        <li>✅ Soporte técnico</li>
                        <li>✅ Seguridad y control de accesos</li>
                        <li class="disabled">❌ Funcionalidades a la medida</li>
                    </ul>

                    <button 
                        class="btn btn-outline-primary w-100 solicitar-plan"
                        data-plan="Plan Estándar"
                        data-precio="280.000"
                        data-mensaje="Acceso estándar, hosting, dominio, backups y soporte técnico">
                        Solicitar Plan
                    </button>


                </div>
            </div>

            {{-- PLAN PREMIUM --}}
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card featured">
                    <span class="badge-popular">Más vendido</span>

                    <h4 class="plan-title">Plan Premium</h4>
                    <p class="plan-price">$350.000 <span>/ mes</span></p>

                    <ul class="plan-features">
                        <li>✅ Todo lo del Plan Estándar</li>
                        <li>✅ Soporte técnico 24/7</li>
                        <li>✅ Funcionalidades adicionales</li>
                        <li>✅ Adaptación a reglas del negocio</li>
                        <li>✅ Actualizaciones del sistema</li>
                        <li>✅ Manual de usuario digital</li>
                        <li>✅ Seguridad avanzada</li>
                    </ul>

                    <button 
                        class="btn btn-primary w-100 solicitar-plan"
                        data-plan="Plan Premium"
                        data-precio="350.000"
                        data-mensaje="Soporte 24/7, funcionalidades a la medida, actualizaciones y manual de usuario">
                        Solicitar Plan
                    </button>

                </div>
            </div>

            {{-- COMPRA TOTAL --}}
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <h4 class="plan-title">Compra Total</h4>
                    <p class="plan-price">
                        $10.000.000 <span>pago único</span>
                    </p>

                    <p class="small text-muted mb-3">
                        + $50.000 mensuales por hosting
                    </p>

                    <ul class="plan-features">
                        <li>✅ Acceso completo al sistema</li>
                        <li>✅ Código y sistema entregado</li>
                        <li>✅ Hosting mensual</li>
                        <li>✅ Dominio incluido</li>
                        <li>✅ Soporte técnico</li>
                        <li>✅ Actualizaciones</li>
                        <li>✅ Manual de usuario</li>
                    </ul>

                    <button 
                        class="btn btn-outline-dark w-100 solicitar-plan"
                        data-plan="Compra Total del Sistema"
                        data-precio="10.000.000 + 50.000 mensual"
                        data-mensaje="Entrega completa del sistema, código fuente, soporte y actualizaciones">
                        Solicitar Información
                    </button>

                </div>
            </div>

        </div>
    </section>
    {{-- alquiler de ventas --}}
    <section class="software-section py-5">
        <div class="container">
            <h1 class="section-title text-center mb-4">
                Software disponible para alquiler
            </h1>

            <h5 class="section-subtitle text-center mb-5">
                Sistema de ventas de celulares, reparaciones, inventario y reportes.
            </h5>
        </div>

        <!-- CARRUSEL -->
        <div id="carouselVentas" class="carousel slide carousel-fade software-carousel" data-bs-ride="carousel">

            <div class="carousel-inner">

                <!-- INFO GENERAL -->
                <div class="carousel-item active">
                    <img src="{{ asset('img/img_ventas/info_general.png') }}" class="d-block w-100" alt="Panel general">
                    <div class="carousel-caption">
                        <h2>Panel General</h2>
                        <p>Resumen del negocio con métricas clave.</p>
                    </div>
                </div>

                <!-- NUEVA VENTA -->
                <div class="carousel-item">
                    <img src="{{ asset('img/img_ventas/new_venta.png') }}" class="d-block w-100" alt="Nueva venta">
                    <div class="carousel-caption">
                        <h2>Nueva Venta</h2>
                        <p>Registro rápido de ventas y pagos.</p>
                    </div>
                </div>

                <!-- DETALLE DE VENTAS -->
                <div class="carousel-item">
                    <img src="{{ asset('img/img_ventas/det_ventas.png') }}" class="d-block w-100" alt="Detalle de ventas">
                    <div class="carousel-caption">
                        <h2>Detalle de Ventas</h2>
                        <p>Historial completo por cliente.</p>
                    </div>
                </div>

                <!-- INVENTARIO -->
                <div class="carousel-item">
                    <img src="{{ asset('img/img_ventas/inventario.png') }}" class="d-block w-100" alt="Inventario">
                    <div class="carousel-caption">
                        <h2>Inventario</h2>
                        <p>Equipos, repuestos y accesorios en tiempo real.</p>
                    </div>
                </div>

                <!-- MOVIMIENTOS -->
                <div class="carousel-item">
                    <img src="{{ asset('img/img_ventas/movimiento.png') }}" class="d-block w-100" alt="Movimientos">
                    <div class="carousel-caption">
                        <h2>Movimientos de Inventario</h2>
                        <p>Entradas, salidas y ajustes con trazabilidad.</p>
                    </div>
                </div>

                <!-- REGISTRO DE PRODUCTOS -->
                <div class="carousel-item">
                    <img src="{{ asset('img/img_ventas/reg_producto.png') }}" class="d-block w-100" alt="Registro de productos">
                    <div class="carousel-caption">
                        <h2>Productos</h2>
                        <p>Gestión de precios, stock y categorías.</p>
                    </div>
                </div>

                <!-- REGISTRO DE CLIENTES -->
                <div class="carousel-item">
                    <img src="{{ asset('img/img_ventas/reg_clientes.png') }}" class="d-block w-100" alt="Registro de clientes">
                    <div class="carousel-caption">
                        <h2>Registro de Clientes</h2>
                        <p>Alta rápida de clientes.</p>
                    </div>
                </div>

                <!-- LISTADO DE CLIENTES -->
                <div class="carousel-item">
                    <img src="{{ asset('img/img_ventas/lis_cliente.png') }}" class="d-block w-100" alt="Listado de clientes">
                    <div class="carousel-caption">
                        <h2>Listado de Clientes</h2>
                        <p>Consulta y administración.</p>
                    </div>
                </div>

                <!-- REPARACIONES -->
                <div class="carousel-item">
                    <img src="{{ asset('img/img_ventas/manj_reparacion.png') }}" class="d-block w-100" alt="Reparaciones">
                    <div class="carousel-caption">
                        <h2>Gestión de Reparaciones</h2>
                        <p>Seguimiento por IMEI y técnico.</p>
                    </div>
                </div>

                <!-- GARANTÍAS -->
                <div class="carousel-item">
                    <img src="{{ asset('img/img_ventas/manej_garantias.png') }}" class="d-block w-100" alt="Garantías">
                    <div class="carousel-caption">
                        <h2>Garantías</h2>
                        <p>Control de garantías.</p>
                    </div>
                </div>

                <!-- EMPRESA -->
                <div class="carousel-item">
                    <img src="{{ asset('img/img_ventas/empresa.png') }}" class="d-block w-100" alt="Empresa">
                    <div class="carousel-caption">
                        <h2>Datos de la Empresa</h2>
                        <p>Configuración general del sistema.</p>
                    </div>
                </div>

                <!-- GASTOS -->
                <div class="carousel-item">
                    <img src="{{ asset('img/img_ventas/contr_gastos.png') }}" class="d-block w-100" alt="Gastos">
                    <div class="carousel-caption">
                        <h2>Control de Gastos</h2>
                        <p>Registro de gastos operativos.</p>
                    </div>
                </div>

            </div>

            <!-- CONTROLES -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselVentas" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselVentas" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>
    </section>
    {{-- PLANES de ventas--}} 
    <section class="pricing-section container py-5">
        <h2 class="section-title text-center mb-5">
            Planes de Alquiler del Software
        </h2>

        <div class="row g-4 justify-content-center">

            {{-- PLAN BÁSICO --}}
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <h4 class="plan-title">Plan Básico</h4>
                    <p class="plan-price">$30.000 <span>/ mes</span></p>

                    <ul class="plan-features">                        
                        <li>✔ Control de Ventas de celulares y accesorios</li>
                        <li>✔ Inventario básico</li>                        
                        <li>✔ Reportes simples</li>                        
                    </ul>

                    <button class="btn btn-outline-primary w-100 solicitar-plan"
                        data-plan="Plan Básico"
                        data-precio="30.000"
                        data-mensaje="Control de Ventas, inventario básico">
                        Solicitar Plan
                    </button>
                </div>
            </div>

            {{-- PLAN PROFESIONAL --}}
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card featured">
                    <span class="badge-popular">Más vendido</span>

                    <h4 class="plan-title">Plan Profesional</h4>
                    <p class="plan-price">$50.000 <span>/ mes</span></p>

                    <ul class="plan-features">
                        <li>✔ Hasta 1 usuarios y 1 admin</li>
                        <li>✔ Ventas y facturación Personal</li>
                        <li>✔ Control de Inventario</li>
                        <li>✔ Reparaciones de Celulares</li>
                        <li>✔ Control de Movimientos</li>
                        <li>✔ Reportes detallados</li>
                        <li>✔ Soporte técnico de Reparacion</li>
                    </ul>

                    <button class="btn btn-primary w-100 solicitar-plan"
                        data-plan="Plan Profesional"
                        data-precio="50.000"
                        data-mensaje="Ventas, inventario avanzado, reparaciones y reportes">
                        Solicitar Plan
                    </button>
                </div>
            </div>

            {{-- PLAN EMPRESARIAL --}}
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <h4 class="plan-title">Compra Total</h4>
                    <p class="plan-price">$2.000.000 <span>/ pago único</span></p>

                    <ul class="plan-features">
                        <li>✔ Usuarios ilimitados</li>
                        <li>✔ Ventas + reparaciones completas</li>
                        <li>✔ Inventario multi-producto</li>
                        <li>✔ Control de gastos</li>
                        <li>✔ Reportes</li>                        
                    </ul>

                    <button class="btn btn-outline-dark w-100 solicitar-plan"
                        data-plan="Plan Empresarial"
                        data-precio="2.000.000"
                        data-mensaje="Sistema completo con usuarios ilimitados y reportes avanzados">
                        Solicitar Plan
                    </button>
                </div>
            </div>

        </div>
    </section>

    {{-- DESCRICION DE PLANES --}}
    <div class="modal fade" id="planModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="modalPlanTitulo"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <p class="fw-bold text-primary" id="modalPlanPrecio"></p>
                    <p id="modalPlanDescripcion"></p>

                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" id="clienteNombre" class="form-control" placeholder="Tu nombre">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">WhatsApp</label>
                        <input type="text" id="clienteWhatsapp" class="form-control" placeholder="Ej: 3001234567">
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Cancelar
                    </button>

                    <button class="btn btn-success" id="btnWhatsapp">
                        Hablar por WhatsApp
                    </button>
                </div>

            </div>
        </div>
    </div>
{{-- PLAN ESTÁNDAR --}}
<script>
    document.querySelectorAll('.solicitar-plan').forEach(btn => {
        btn.addEventListener('click', function () {

            const plan = this.dataset.plan;
            const precio = this.dataset.precio;
            const descripcion = this.dataset.mensaje;

            document.getElementById('modalPlanTitulo').innerText = plan;
            document.getElementById('modalPlanPrecio').innerText = `$${precio} COP / mes`;
            document.getElementById('modalPlanDescripcion').innerText = descripcion;

            const modal = new bootstrap.Modal(document.getElementById('planModal'));
            modal.show();

            document.getElementById('btnWhatsapp').onclick = function () {
                const nombre = document.getElementById('clienteNombre').value || 'Cliente';
                const whatsapp = document.getElementById('clienteWhatsapp').value;

                const mensaje = `Hola, soy ${nombre}. Estoy interesado en el ${plan} (${precio} COP).`;

                const url = `https://wa.me/57${whatsapp}?text=${encodeURIComponent(mensaje)}`;
                window.open(url, '_blank');
            };
        });
    });
</script>
{{-- script carrusel velocidad --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const carousel = document.querySelector('#carouselVentas');//aqui el id del carrusel

        new bootstrap.Carousel(carousel, {
            interval: 2000, // ⬅️ aqui los segundos mas lento 5000 mas rapido 1000)
            pause: 'hover',
            ride: 'carousel',
            touch: true
        });
    });
</script>


@endsection
